<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
//データを読み込む
$fp = fopen('bookdata.csv','r');
if ($fp === false) {
    echo "ファイルのオープンに失敗しました。";
    exit;
}
//1行ずつ表示する
while($row = fgetcsv($fp)) {
    echo "書籍名:" . htmlspecialchars($row[0],ENT_QUOTES,'utf-8') . "<br>";
    echo "著作者:" . htmlspecialchars($row[4],ENT_QUOTES,'utf-8') . "<br><br>";
}
fclose($fp);
?>
</body>
</html>