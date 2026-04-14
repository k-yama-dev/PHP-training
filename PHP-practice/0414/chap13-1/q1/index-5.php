<?php
function pocket(&$biscuit) {
    $biscuit = $biscuit * 2;
}
$biscuit = 4;
pocket($biscuit);
echo 'ビスケットは' . $biscuit . 'っ。';