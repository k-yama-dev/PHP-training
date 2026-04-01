<?php
require_once __DIR__.'/token_check.php';
require_once __DIR__ . '/inc/functions.php';
include __DIR__ . '/inc/error_check.php';
include __DIR__ . '/inc/header.php';

if (empty($_POST['id'])) {
    echo "idを指定するんやで";
    exit;
}
if (!preg_match('/\A\d{1,11}+\z/u', $_POST['id'])) {
    echo "id正しくいれるんやで";
    exit;
}

try {
    $dbh = db_open(); //p217 図11

    $sql = "UPDATE books SET title = :title ,isbn = :isbn,price = :price,
        publish= :publish,author = :author WHERE id = :id";
    $stmt = $dbh->prepare($sql);

    $price = (int) $_POST['price'];
    $id = (int) $_POST['id'];
    $stmt->bindParam(":title", $_POST['title'], PDO::PARAM_STR);
    $stmt->bindParam(":isbn", $_POST['isbn'], PDO::PARAM_STR);
    $stmt->bindParam(":price", $price, PDO::PARAM_INT);
    $stmt->bindParam(":publish", $_POST['publish'], PDO::PARAM_STR);
    $stmt->bindParam(":author", $_POST['author'], PDO::PARAM_STR);

    $stmt->bindParam(":id", $id, PDO::PARAM_INT);

    $stmt->execute();
    echo "データが更新されたやでぇ";
    echo "<a href='index.php'><br>ホームへ戻るやでぇ</a>";
} catch (PDOException $e) {
    echo "エラーやで!!!" . str2html($e->getmessage()) . "<br>";
    exit;
    // -> Object's Method
    // 関数のことをメソッド、値はプロパティ
}
?>
<?php include __DIR__ . '/inc/footer.php'; ?>