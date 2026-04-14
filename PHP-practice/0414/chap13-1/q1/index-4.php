<?php
function pocket($biscuit) {
    echo 'ポケットの中のビスケットは' . $biscuit . 'っ。';
    $biscuit = $biscuit * 2;
}
$biscuit = 4;
$candy = 5;
pocket($biscuit);
echo 'ポケットの外にビスケットは' . $biscuit . 'っ。';