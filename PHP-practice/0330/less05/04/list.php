<?php
require_once 'functions.php';
//↑p117で作成したXSS対策用関数の読み込み
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
    
    $sql = 'SELECT title,author FROM books';
    $statement = $dbh->query($sql);

    while($row = $statement->fetch()){
        echo "書籍名:".str2html($row[0])."&nbsp&nbspやで<br>";
        echo "著者名:".str2html($row[1])."&nbsp&nbspやで<br><br>";
    }
} catch (PDOException $e) {
    echo "エラーやで!!!" . $e->getmessage() . "<br>";
    exit;
    // -> Object's Method
    // 関数のことをメソッド、値はプロパティ
}

//データベースを見るときには一行ずつしか見れない