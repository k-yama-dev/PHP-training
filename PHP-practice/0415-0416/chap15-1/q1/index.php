<?php
//sub1のみ使用
// require_once __DIR__ . '/sub1/MyName.php';
// use sub1\MyName;
// $sub = new MyName();
// $sub->NamePrint();

//sub2のみ使用
// require_once __DIR__ . '/sub2/MyName.php';
// use sub2\MyName;
// $sub = new MyName();
// $sub->NamePrint();

//sub1とsub2を切り分ける
require_once __DIR__ . '/sub1/MyName.php';
require_once __DIR__ . '/sub2/MyName.php';
use sub1\MyName as Suzuki;
use sub2\MyName as Nakamura;
$suzuki = new Suzuki();
$nakamura = new Nakamura();
$suzuki->NamePrint();
$nakamura->NamePrint();
