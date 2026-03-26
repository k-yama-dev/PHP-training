<?php
//最大公約数を求めるhtmlとPHPセットを作りましょう
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];

if($n1 > $n2 ){
    while($n1 % $n2 === 2){ 
        echo '';
        break;
    }
    echo $a;
}


//ヒント 紀元前からあるアルゴリズム:ユークリッドの互除法