<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>idの値ちぇぇっくぅぅぅ</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    require_once 'functions.php';
    if (empty($_GET['id'])) {
        echo "idを指定せんかい";
        exit;
    }
    if (!preg_match('/\A\d{1,11}+\z/u', $_GET['id'])) {
        echo "id正しくいれんかい";
        exit;
    }
    $id = (int) $_GET['id'];

    $dbh = db_open();
    $sql = "SELECT id,title,isbn,price,publish,author FROM books WHERE id = :id";
    $stmt = $dbh->prepare($sql);
    $stmt->bindParam(":id", $id, PDO::PARAM_INT);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$result) {
        echo "指定したデータはないで";
        exit;
    }

    $title = str2html($result['title']);
    $isbn = str2html($result['isbn']);
    $price = str2html($result['price']);
    $publish = str2html($result['publish']);
    $author = str2html($result['author']);
    $id = str2html($result['id']);

    $html_form = <<< FOD
    <form action = 'update.php' method = 'post' class='editform'>
        <p>
            <label for ='title'>タイトル:</label>
            <input type = 'text' name = 'title' value = '$title'>
        </p>
         <p>
            <label for ='isbn'>ISBN:</label>
            <input type='text' name='isbn' value='$isbn'>
        </p>
         <p>
            <label for ='price'>価格:</label>
            <input type = 'text' name = 'price' value = '$price'>
        </p>
         <p>
            <label for ='publish'>出版日:</label>
            <input type = 'text' name = 'publish' value = '$publish'>
        </p>
         <p>
            <label for ='author'>著者:</label>
            <input type = 'text' name = 'author' value = '$author'>
        </p>
        <p class = 'button'>
            <input type='hidden' name='id' value='$id'>
            <input type='submit' value='送信やで'>
        </p>
</form>
FOD;
    echo $html_form;
    ?>
</body>

</html>