<?php
$a = 20; //$aに20を代入
function test(){
    $a =10;
    return $a;//returnで$aを返り値として返す
}
$b = test();//$bに返り値を代入
echo '$aは '.$a.' $bは '.$b.' ですYO!!!';
?>