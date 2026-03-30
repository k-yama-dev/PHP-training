<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データの追加やでぇ</title>
</head>

<body>
    <?php
    require_once 'functions.php';

    

    try {
        $user = "phpuser";
        $password = "password";
        $opt = [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_EMULATE_PREPARES => false,
            PDO::MYSQL_ATTR_MULTI_STATEMENTS => false,
        ];
        $dbh = new PDO('mysql:host=localhost;dbname=sample_db', $user, $password, $opt);

        $sql = "INSERT INTO books(id, title, isbn, price, publish, author)
                VALUES (NULL, :title, :isbn, :price, :publish, :author)";
        $stmt = $dbh->prepare($sql);

        $price = (int) $_POST['price'];
        $stmt->bindParam(":title", $_POST['title'], PDO::PARAM_STR);
        $stmt->bindParam(":isbn", $_POST['isbn'], PDO::PARAM_STR);
        $stmt->bindParam(":price", $price, PDO::PARAM_INT);
        $stmt->bindParam(":publish", $_POST['publish'], PDO::PARAM_STR);
        $stmt->bindParam(":author", $_POST['author'], PDO::PARAM_STR);

        $stmt->execute();
        echo "データが追加されたやでぇ";
    } catch (PDOException $e) {
        echo "エラーやで!!!" . str2html($e->getmessage()) . "<br>";
        exit;
        // -> Object's Method
        // 関数のことをメソッド、値はプロパティ
    }
    ?>

</body>

</html>