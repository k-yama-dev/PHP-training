<?php
function sum(?int $a, int $b = 0): int
{
    if ($a === null) {
        return 'ERROR'; //戻り値にintを宣言しているのに文字列を返した
        //Error
    }
    return $a + $b;
}

//$total = sum(null,20);//return時に実行エラーになる
echo sum(13, 25) . "\n";//コンパイルエラーはないので実行できる
