<?php
$good_at_english = [0 => '山田', 1 => '佐藤'];
$good_at_math = [0 => '佐藤', 1 => '林', 2 => '佐々木'];

var_dump($good_at_english + $good_at_math);

var_dump(array_merge($good_at_english, $good_at_math));
