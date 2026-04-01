<?php
function str2html(string $string): string{
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}
function db_open() :PDO{ //型宣言でPDO型を指定
    $user = "phpuser";
    $password = "password";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,

    ];
    $dbh = new PDO('mysql:host=localhost;dbname=sample_db', $user, $password, $opt);
    // ↑ローカル変数(functionの中だから)
    return $dbh; //返り値を返す
}

