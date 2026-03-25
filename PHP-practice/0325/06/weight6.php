<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>おまえの適正体重ぞ</title>
</head>

<body>
    <?php
    require_once 'functions.php';

    $height = (float) $_POST['height'];
    $weight = (float) $_POST['weight'];

    if (!((0 < $height) && ($height < 3))) {
        echo 'ちゃんと入れろ!';
        exit;
    }
    if (($weight < 30) || (200 < $weight)) {
        echo 'ちゃんと入れろ!';
        exit;
    }

    $goalWeight = ($height * $height * 22);

    $difference = ($goalWeight - $weight);

    echo '体重:' . str2html($weight) . 'kg<br>';
    echo '理想:' . str2html($goalWeight) . 'kg<br>';
    if (0 < $difference) {
        echo 'あと:' . abs(str2html($difference)) . 'kg太ったら適性体重やで<br>';
    } if($difference < 0){
        echo 'あと:' . abs(str2html($difference)) . 'kg痩せたら適性体重やで<br>';
    } 
    ?>
</body>

</html>