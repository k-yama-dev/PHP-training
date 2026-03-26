<?php
$str = "〒 899-5115 鹿児島県霧島市隼人町東郷";
preg_match('/\d{3}-\d{4}/u',$str,$match);
var_dump($match);