<?php
    // $path = "http://localhost/php7first/step09/9-2/sample.txt"; //textの場合
    // $path = "https://eternalkagosima.chobi.net/img/ball1.png";
    $path = "http://localhost/php7first/step09/9-5/sample.csv"; //textの場合

    // $img = file_get_contents($path);
    $fp = fopen($path,'rb');
    $arry = fgets($fp,100);
    print_r($arry);
    print($arry[0]);

    // header('Content-type: text/plain'); //textの場合
    // header('Content-type: image/png');//画像が見れる
    // header('Content-type: text/csv'); //downloadされる

    // echo $img;
?>