<?php
/**
 * Created by PhpStorm.
 * User: ricardoc
 * Date: 11/03/15
 * Time: 22:27
 */
$arroz = 2.69;
$feijao = 7.68;
$leite = 1.99;

//3kg arroz, 5kg feijao, 12l leite
function multiplica ($item, $multiplicador){
    return $item * $multiplicador;
}
function soma($item1, $item2, $item3){
    $total = multiplica($item1, 3) + multiplica($item2, 5) + multiplica($item3, 12);
    return $total;
}
echo "arroz: $arroz = ", multiplica($arroz, 3), PHP_EOL;
echo "feijão: $feijao = ", multiplica($feijao, 5), PHP_EOL;
echo "leite: $leite = ", multiplica($leite, 12), PHP_EOL;
echo "total: ".soma($arroz,$feijao,$leite), PHP_EOL;