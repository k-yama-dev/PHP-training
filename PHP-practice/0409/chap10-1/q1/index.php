<?php
//無限ループするので
//docker compose exec php bashで起動して
//cd chap10-1/q1
//php index.phpで実行
//CTRL+Cで終了
$number = 0;
while (true) {
    $number = rand(1,6);

    if ($number === 6) {
        echo "6が出ました!\n";
    } else {
        echo "残念、{$number}でした...\n";
    }
}
