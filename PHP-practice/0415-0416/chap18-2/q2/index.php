<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
try {
    $dsn = 'mysql:host=mariadb;dbname=sample;charset=utf8';
    $dbh = new PDO($dsn, 'docker', 'password');
} catch (PDOException $e) {
    echo "接続に失敗しました";
    echo $e->getMessage();
    exit();
}

$books_ids = [1,2];

foreach($books_ids as $book_id) {
    $sth = $dbh->prepare('SELECT id,title,review_score FROM books WHERE id = ?');
    $sth->bindValue(1, $book_id, PDO::PARAM_INT);
    $sth->execute();
    $book = $sth->fetch();
    echo $book['title'] . "<br>";
}
?>
</body>
</html>