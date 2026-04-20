<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $path = __DIR__; // 現在のスクリプトがあるディレクトリ

    // Directory オブジェクトを取得
    $dir = dir($path);

    echo "ディレクトリパス: " . $dir->path . "<br>";
    echo "内容一覧:" . "<br>";

    // ディレクトリ内のエントリを順に読み込む
    while (false !== ($entry = $dir->read())) {
        // . と .. はスキップ
        if ($entry === '.' || $entry === '..') {
            continue;
        }
        echo " - {$entry}" . "<br>";
    }

    // ディレクトリを閉じる
    $dir->close();
?>
</body>
</html>