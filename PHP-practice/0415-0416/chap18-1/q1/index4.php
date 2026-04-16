<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//not work
try {
    $dsn = 'mysql:host=mariadb;dbname=sample;charset=utf8';
    $dbh = new PDO($dsn, 'docker', 'password');
} catch (PDOException $e) {
    echo "接続に失敗しました";
    echo $e->getMessage();
    exit();
}

$sth = $dbh->query('SELECT :id,:title,:review_score FROM books WHERE review_score >= 50');

$records = $sth->fetch(PDO::FETCH_ASSOC);
var_dump($records);
?>
</body>
</html>