<?php
/**
 * Created by PhpStorm.
 * User: ricardoc
 * Date: 12/03/15
 * Time: 20:32
 */

$colecao = [
    'Anderson',
    'Bruno',
    'Marcos',
    'Ricardo'
];

echo current($colecao),PHP_EOL;
echo next($colecao),PHP_EOL;
echo current($colecao),PHP_EOL;
echo prev($colecao),PHP_EOL;
echo current($colecao),PHP_EOL;
echo key($colecao),PHP_EOL;