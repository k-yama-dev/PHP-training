<?php
$sky_color = 'blue';
$SKY_COLOR = 'orange'; //大文字は別物

function echo_sky() {
    global $sky_color;
    echo 'Beautiful ' . $sky_color . ' sky!';
}

function ECHO_SKY() { //FATAL error: Cannot redeclear ECHO_SKY()
    global $SKY_COLOR;
    echo 'Beautiful ' . $SKY_COLOR . ' sky!';
}

echo_sky(); //どちらにしろ $sky_colorはfunctionのローカルにないのでエラー
ECHO_SKY();