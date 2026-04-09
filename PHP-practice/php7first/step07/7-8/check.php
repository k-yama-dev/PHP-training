<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>空のチェック</title>
</head>
<body>
    <?php
    if(strlen(trim($_POST['name']))==0) { //正解
    // if(trim(strlen($_POST['name']))==0) {//問題の間違い ===0 なら分かる
    // if(count(trim($_POST['name']))==0) {//エラー
    // if(trim(count($_POST['name']))==0) {//エラー
            print 'Error : Please enter your name.';
    } else {
        print 'NAME : ' . $_POST['name'];
    }
    ?>
</body>
</html>