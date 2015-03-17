<?php
/**
 * Created by PhpStorm.
 * User: ricardoc
 * Date: 11/03/15
 * Time: 22:27
 */
$lista = [
    'arroz' => 2.69,
    'feijao' => 7.68,
    'leite' => 1.99
];
$quantidade = [
    'arroz' => 3,
    'feijao' => 5,
    'leite' => 12
];

//foreach ($colecao as [$indice => ]$valor)

$total = 0;
foreach ($lista as $i => $valor){
    $t = $valor * $quantidade[$i];
    echo "$i    $valor x $quantidade[$i] = $t", PHP_EOL;
    $total = $total + $t;
};
echo "Total = $total",PHP_EOL;