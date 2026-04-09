<?php
$n = 0;
$c = 0;
while($n !== 1){
    $c++;
    $n = rand(1,199);
    if($n === 1){
        echo "初当たり{$c}回転目です!\n";
        
    }else{
        echo "残念、{$n}でした...<br>\n";
    }
}

?>