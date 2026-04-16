<?php
$colors = ['red','green','blue','yellow'];

//1
// print_r(array_slice($colors,1,1));//error
// echo array_slice($colors,1,1);//error
echo array_slice($colors,1,1)[0];//green
echo "<br>";

//2
echo array_pop($colors);//yellow
echo array_pop($colors);//blue
echo array_pop($colors);//green
echo "<br>";
$colors = ['red','green','blue','yellow'];

//3
echo array_search('green',$colors);//1番目の要素なので 1が返る
echo "<br>";

//4
list($yellow,$blue, $green) = $colors;
// [$yellow,$blue, $green] = $colors;
echo $green;
echo "<br>";

//4-1
list($first,$second,$third) = ['red','green','blue','yellow'];
echo $second;
echo "<br>";

//4-2
list($first,$second,$third) = [2=>'red',3=>'green',1=>'blue',0=>'yellow'];
echo $first;//yellow 教科書とは違う、キーの順番に採れる
echo $second;//blue
echo $third;//red
var_dump([2=>'red',3=>'green',1=>'blue',0=>'yellow']);

echo "<br>";

//4-3
list(,,$third) = ['red','green','blue','yellow'];
echo $third;//blue
echo "<br>";

//4-4
list($first,list($second,$third),$forth) = ['red',['green','blue'],'yellow'];
echo $first;
echo $second;
echo $third;
echo $forth;
echo "<br>";

//4-5
list(1=>$second, 2=>$third) = ['red','green','blue','yellow'];
echo $second;//green
echo $third;//blue
echo "<br>";

//4-6
list('green'=>$green, 'blue'=>$blue) = [
    'red' => 'ff0000','green'=>'00ff00','blue'=>'0000ff','yellow'=>'ffff00'
] ;
echo $green;//00ff00
echo $blue;//0000ff
