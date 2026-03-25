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
    var_dump($row);
    echo "<br>";
}
?>
</body>
</html>