<?php

//1
for ($i = 0; $i < 10; $i++) {
    echo "$i\n";
}
//2
$o = 10;
for (; $o < 20; $o++) {
    echo "$o\n";
}
//3
for ($p = 20;; $p++) {
    if ($p >= 30) {
        break;
    }
    echo "$p\n";
}
//4
for ($l = 30; $l < 40;) {
    echo "$l\n";
    $l++;
}
//5
$m = 40;
for (;;) {
    if ($m >= 50) {
        break;
    }
    echo "$m\n";
    $m++;
}
//6
for ($n = 50, $limit = 60; $n < $limit; $n++) {
    echo "$n\n";
}
//7
for ($b = 60; print($b . "\n"), $b < 69; $b++) {
}
//8
for ($v = 70; $v < 80; print($v . "\n"), $v++);
