<?php
echo 'match文の判定<br>';
$n = 3;
$r = match ($n) {
    '3' => 'ラッキーな1日になるでしょう',
    $n == 3 => '素敵な出会いがあるでしょう',
    1 + 2 => '実力を発揮できるでしょう',
    default => '来世に期待しましょう'
};
echo $r;


echo '<br><br>switch文<br>';
$ur = true;

switch ($ur) {
    case 0:
        echo 'ようこそ管理者';
        break;

    case 1:
        echo 'ようこそ編集者';
        break;

    case 2:
        echo 'ようこそ一般人';
        break;

    default:
        echo '誰お前';
        break;
}

echo '<br><br>if文<br>';
$ur1 = true;

if ($ur1 === 0) {
    echo 'ようこそ管理者';
} elseif ($ur1 === 1) {
    echo 'ようこそ編集者';
} elseif ($ur1 === 2) {

    echo 'ようこそ一般人';
} else {
    echo '誰お前';
}

echo '<br><br>match文に数値以外をセット<br>';
$ur2 = true;
echo match($ur2){
    0=> 'へい管理者',
    1=> 'へい編集者',
    2=> 'へい一般人',
    default =>'誰お前'
};
