<?php
session_start();
require_once('../dbconnect.php');

//index.php経由でない場合は登録に戻る
if (!isset($_SESSION['join'])) {
    header('Location: index.php');
    exit;
}
//ニックネーム取得
$nick = h($_SESSION['join']['name']);
//初期化
unset($_SESSION['join']);
?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="thanks-container">
        <h1>登録完了画面</h1>
        <p><?php echo $nick; ?>さんを登録しました</p>
        <button type="button" class="submit" onclick="location.href='../'">LOGINへ</button>
    </div>
</body>
</html>