<?php
require_once __DIR__ . '/inc/functions.php';
include __DIR__ . '/inc/error_check.php';
include __DIR__ . '/inc/header.php';


try {
    $dbh = db_open(); //p217 図11

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
    echo "<a href='index.php'><br>ホームへ戻るやでぇ</a>";
} catch (PDOException $e) {
    echo "エラーやで!!!" . str2html($e->getmessage()) . "<br>";
    exit;
    // -> Object's Method
    // 関数のことをメソッド、値はプロパティ
}
?>

<?php include __DIR__ . '/inc/footer.php'; ?>