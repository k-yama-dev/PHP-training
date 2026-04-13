<?php
$n = 0;
$st = microtime(true);

while($n !== 6){
    $n = rand(1,10000);
    if($n === 6){
        echo "6が出ました\n";
    }else{
        echo "残念...{$n}でした...\n";
    }   

    if(microtime(true) - $st > 0.01){
        echo "時間がかかりすぎたので終了します\n";  
        break;
    }
}