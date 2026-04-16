<?php
$good_at_english = [0=>'山田',1=>'佐藤'];
$good_at_math = [0=>'佐藤',1=>'林',2=>'佐々木'];

var_dump($good_at_english + $good_at_math);//林が佐藤に負けて、佐藤が山田に負けて
//山田,佐藤,佐々木
echo "<br>";

var_dump(array_merge($good_at_english , $good_at_math));
//山田、佐藤、佐藤、林、佐々木
echo "<br>";
$users = [
    ['name'=>'山田','age'=>17],
    ['name'=>'佐藤','age'=>28],
    ['name'=>'林','age'=>24]
];

usort($users, function($a,$b){
    return $a['age'] <=> $b['age'];
});

var_dump($users);
//山田,林,佐藤

