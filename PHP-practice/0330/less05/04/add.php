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

    if(empty($_POST['title'])){
        echo "タイトル必須やで";
        exit;
    }
    if(!preg_match('/\A[[:^cntrl:]]{1,200}\z/u',$_POST['title'])){
        echo "タイトルは200文字までやでぇ";
        exit;
    }
    if(!preg_match('/\A\d{0,13}\z/',$_POST['isbn'])){
        echo "ISBNは数字13桁までやでぇ";
        exit;
    }
     if(!preg_match('/\A\d{0,6}\z/u',$_POST['price'])){
        echo "価格は数字6桁までやでぇ";
        exit;
    }
    if(empty($_POST['publish'])){
        echo "日付は必須やでぇ";
        exit;
    }
    if(!preg_match('/\A\d{4}-\d{1,2}-\d{1,2}\z/u',$_POST['publish'])){
        echo "日付のフォーマットが違うやでぇ";
        exit;
    }
    $date = explode('-',$_POST['publish']);
    if(!checkdate($date[1],$date[2],$date[0])){
        echo "正しい日付を入れるんやでぇ";
        exit;
    }
    if(!preg_match('/\A[[:^cntrl:]]{0,80}\z/u',$_POST['author'])){
        echo "著者名は80文字以内やでぇ";
        exit;
    }

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