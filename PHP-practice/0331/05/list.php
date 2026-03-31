<?php
require_once 'functions.php';//作成した関数の読み込み
try {
    $dbh = db_open();    

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