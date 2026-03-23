<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sample.php</title>
</head>
<body>
    <!-- p53 図26 -->
    <h3>0323</h3>
    <?php
    $a = true;
    if($a === true){
        echo "aは真です";
    }
    if($a !== false){
        echo 'aは真です';
    }
    ?>
</body>
</html>