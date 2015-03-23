<?php
namespace DRC\Report\Service\Output;

use DRC\Report\Interaction\DataProcessor;

class Shell extends Output implements Printable
{
    protected $title = 'Relatório de faturamento / bandeira';
    protected $reportWidth = 40;

    protected function strPad($input, $pad_length, $pad_string, $pad_style, $encoding = "UTF-8")
    {
        return str_pad($input,
            strlen($input) - mb_strlen($input, $encoding) + $pad_length, $pad_string, $pad_style);
    }

    protected function montaLinha($nome, $valor, $formatarMoeda)
    {
        return '|' . str_pad($nome, 15, ' ', STR_PAD_BOTH) .
        '|' . $this->strPad($formatarMoeda($valor), $this->reportWidth - 15 - 3, ' ', STR_PAD_LEFT) . '|' . PHP_EOL .
        str_repeat('-', $this->reportWidth) . PHP_EOL;
    }


    public function mostraMukeka(DataProcessor $dataProcessor){
        $report = $dataProcessor->processa();

        $output = PHP_EOL . $this->title . PHP_EOL;
        $output .= str_repeat('-', $this->reportWidth) . PHP_EOL;
        $output .= '|' . str_pad(strtoupper('Bandeira'), 15, ' ', STR_PAD_BOTH);
        $output .= '|' . str_pad(strtoupper('Faturamento'), $this->reportWidth - 15 - 3, ' ', STR_PAD_BOTH) . '|' . PHP_EOL;
        $output .= str_repeat('-', $this->reportWidth) . PHP_EOL;
        $total = 0;
        foreach ($report as $bandeira => $valor) {
            $output .= $this->montalinha($bandeira, $valor, [$this->report->getCurrency(), 'convert']);
            $total += $valor;
        }
        $output .= $this->montalinha('TOTAL', $total, [$this->report->getCurrency(), 'convert']);
        return $output;
    }

    public function show(DataProcessor $processor)
    {
        return $this->mostraMukeka($processor);
    }

}