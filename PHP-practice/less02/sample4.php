<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample.php</title>
</head>
<body>
    <?php
    $a = $_POST['a'];
    if($a === '1'){
        echo "aは1です!";
    }else{
        echo "aは1ではありませelse!!!";
    }
    ?>
</body>
</html>