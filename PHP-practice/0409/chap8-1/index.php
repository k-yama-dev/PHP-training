<?php
$dogs = 14;
$cats = 9;
echo "合計:".$dogs + $cats;
echo "<br>PHPでは算術演算子が優先される<br>";

//トランプのカードを1枚定義する
$suit = 'spade'; //スート
$number = '11'; //数字1~13
$picture = (int)$number > 10;//絵札かどうかのtrue/false

if(($suit === 'spade' || $suit === 'club') && !$picture){
    echo '黒色の絵札です!';
}else {
    echo '数札ではありません（絵札か、赤色です）';
}

?>