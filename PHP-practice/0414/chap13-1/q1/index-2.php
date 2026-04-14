<?php
function pocket() {
    echo 'ポケットの中のビスケットは' . $biscuit . 'っ。';
    $biscuit = $biscuit * 2;
}
$biscuit = 4;
$candy = 5;
pocket();
echo 'ポケットの外にビスケットは' . $biscuit . 'っ。';