<?php
$filename = 'sample-code.old.php';

//1
echo substr($filename,-3);//php
echo "<br>";
echo substr($filename,1);//ample-code.old.php
echo "<br>";

//2
echo strstr($filename,'.');//.old.php
echo "<br>";

//3
echo substr($filename,strpos($filename,'.'),strrpos($filename,'.'));//.old.php
echo "<br>";

//4
// echo explode('.',$filename)[count(explode('.',$filename))];//error
echo explode('.',$filename)[count(explode('.',$filename))-1];//php
echo "<br>";

//現場
$filename = 'sample-code.old.jpeg';
echo substr($filename, strrpos($filename,'.')+1);