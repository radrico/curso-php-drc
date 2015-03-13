<?php
#comentário válido, mas pouco usado em PHP
$nome = 'Ricardo'; //comentário em linha
echo $nome,', Olá Mundo!',PHP_EOL;
const DRC_AULA = 2;
/*
Bloco de comentário
antigamente para definir uma constante
define('DRC_AULA',2)
*/
echo DRC_AULA, PHP_EOL;
/**
  *comentário para a documentação de funções
  *@tag 
  */
// Tipos de dados - Escalares
$string = 'Texto';
$string2 = "Texto com variável - $nome";
echo $string, ' ', $string2, PHP_EOL;
$inteiro = 123;
$octal = 0123;
$hex = 0xDA;
echo $inteiro, ' ', $octal, ' ', $hex, PHP_EOL;
$float = 123.456;
echo $float, PHP_EOL;