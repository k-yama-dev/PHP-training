<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // 現在日時を取得
    $now = new DateTime();
    echo "現在日時: " . $now->format('Y-m-d H:i:s') . "<br>";

    // 特定の日付を設定
    $specificDate = new DateTime('2026-12-31 15:30:00');
    echo "指定日: " . $specificDate->format('Y-m-d H:i:s') . "<br>";

    // 日付の加算（+1日）
    $plus1Days = clone $specificDate;
    $plus1Days->add(new DateInterval('P1D'));
    echo "1日後: " . $plus1Days->format('Y-m-d H:i:s') . "<br>";
?>
</body>
</html>