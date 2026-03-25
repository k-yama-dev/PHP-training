<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>idk</title>
</head>
<body>
<?php
//データを読み込む
require_once 'functions.php';
$fp = fopen('bookdata.csv','r');
if ($fp === false) {
    echo "ファイルのオープンに失敗しました。";
    exit;
}
//1行ずつ表示する
while($row = fgetcsv($fp)) {
    echo "書籍名:" . str2html($row[0]) . "<br>";
    echo "著作者:" . str2html($row[4]) . "<br><br>";
}
fclose($fp);
?>
</body>
</html>