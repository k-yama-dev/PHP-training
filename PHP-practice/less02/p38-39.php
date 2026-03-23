<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>いい天気だなぁ</title>
</head>
<body>
    <?php
    echo "文字列1" . "文字列2";
    ?>
<br>
    <?php
    $a = "文字列3";
    $b = "文字列4";
    echo $a . $b;
    ?>
<br>
    <?php
    $text = "こんにちは";
    $text .="今日の天気は";
    $text .="いい天気です!";
    echo $text;
    ?>

</body>
</html>