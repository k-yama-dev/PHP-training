<?php
$filename = 'counter.log';

$file = fopen($filename,'r');
$count = fread($file,filesize($filename));
fclose($file);

// $file = fopen($filename,'r');//error
$file = fopen($filename,'w');//0->1
// $file = fopen($filename,'a');//0->01
// $file = fopen($filename,'x+');//error
fwrite($file, $count + 1);
fclose($file);