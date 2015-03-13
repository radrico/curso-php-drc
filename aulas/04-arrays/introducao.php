<?php
$array = array('A','B','C');
$array = [
    'A',
    'B',
    'C'
];
echo $array[2], PHP_EOL;

$array[] = 'D'; // adiciona um elemento no fim do array
echo $array[count($array)-1], PHP_EOL;
