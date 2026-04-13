<?php
function sum(?int $a, int $b = 0): int {
    if ($a === null) {
        return 0;
    }
    return $a + $b;
}

//ok
echo sum(10,20) . "\n";//30
echo sum(null,20) . "\n";//0

//ng
// echo sum(,20);//第1引数は省略できない
// echo sum();//両方省略もできない

//ok
echo sum(10) . "\n";//第２引数を０として実行　10

//ng
// echo sum(10,null);//第２引数は整数が指定されているのにnullが指定された

//?
echo sum('15','20') . "\n";//実行できてしまう
// echo sum('abc','efg');//これはさすがにエラー

