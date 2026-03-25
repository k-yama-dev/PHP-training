<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>おまえの適正体重ぞ</title>
</head>

<body>
    <?php
    $height = (float) $_POST['height'];
    if (0 < $height) {
        if ($height < 2.5) {
            echo 'おまえの適正体重は' . ($height * $height * 22) . 'kgやで';
        }else{
            echo '身長2.5m以上な訳ないやろ!';
        }
    } else {
        echo ' 正直にちゃんと入れろや!';
    }
    ?>
</body>

</html>