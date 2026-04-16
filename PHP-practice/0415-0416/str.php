<?php
$fn = 'sample-code.old.php';
//1
echo '1:'.substr($fn,-3).PHP_EOL;
//2
echo '2:'.strstr($fn,'.').PHP_EOL;
//3
echo '3:'.substr($fn,strpos($fn,'.'),strpos($fn,'.')).PHP_EOL;
//4
echo '4:エラー!'.PHP_EOL.'後ろに-1をつけると'.explode('.',$fn)[count(explode('.',$fn))-1].PHP_EOL;

$fnj='sample-code.old.jpeg';
echo substr($fnj,-3).PHP_EOL;

echo substr($fnj,strpos($fnj,'.')+1).PHP_EOL;

echo explode('.',$fnj)[count(explode('.',$fnj))-1].PHP_EOL;