<?php
//urlの内容を取得する
$homepage = file_get_contents('http://localhost/php7first/step11/11-1/recv1.php');//array()
// $homepage = file_get_contents('./recv1.php');//空
var_dump($homepage);
print("<br>");

//ローカルファイルの一部を読みこむ
$datafile = file_get_contents('./sample.txt',FALSE,NULL,10,5);
var_dump($datafile);
print("<br>");

//ストリームコンテキストの使用
$data = array(
    "key1"=>"value1",
    "key2"=>"value2"
);
$data = http_build_query($data,"","&");
$opts = array(
    'http'=>array(
        'method'=>"POST",
        'header'=>"Content-Type: application/x-www-form-urlencoded",
        'content'=>$data
    )
);
$context = stream_context_create($opts);
$contents=file_get_contents('http://localhost/php7first/step11/11-1/recv1.php',
        false,$context);
var_dump($contents);
print("<br>");
?>
