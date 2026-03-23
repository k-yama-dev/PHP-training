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
    }
    // <!-- $_POSTに渡ってきているのは、数字ではなく文字列としてである -->
    if($a !== '1'){
        echo "aは1ではありません!";
    }
    ?>
</body>
</html>