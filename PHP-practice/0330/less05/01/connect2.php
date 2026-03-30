<?php
try {
    $user = "phpuser";
    $password = "password";
    $opt = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES => false,
        PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
        // => 連想配列
    ];
    $dbh = new PDO('mysql:host=localhost;dbname=sample_db', $user, $password, $opt);
    var_dump($dbh);
} catch (PDOException $e) {
    echo "エラーやで!!!" . $e->getmessage() . "<br>";
    exit;
    // -> Object's Method
    // 関数のことをメソッド、値はプロパティ
}
