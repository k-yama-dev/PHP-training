<?php
function pocket($biscuit)
{
    echo 'ボケっとの中のビスケットは' . $biscuit . 'つやで';
    $biscuit = $biscuit * 2;
}
$biscuit = 4;
$candy = 5;
pocket($candy);
echo 'ポケットの外のビスケットは' . $biscuit . 'つやで' . "\n";

function pocke(&$biscui)
{
    $biscui = $biscui * 2;
}
$biscui = 4;
pocke($biscui);
echo 'ビスケットは' . $biscui . 'つやで' . "\n";

function p($b)
{
    return $b * 2;
}
$b = 4;
$b = p($b);
echo "ビスケットは{$b}やで\n";
?>
