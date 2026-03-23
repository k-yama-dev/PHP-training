<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach ふぉーいーち</title>
</head>

<body>
    <h3>0323</h3>
    <!-- p61 p62 図11 -->
    <?php
    echo 'foreach( as )<br>';
    $name = [
        0 => '佐藤',
        1 => '鈴木',
        2 => '高橋'
    ];
    foreach ($name as $value) {
        echo '名前は' . $value . 'やで!<br>';
    }
    ?>
    <!-- p63 図15 -->
    <?php
    echo 'foreach( as  => )<br>';
    $name = [
        0 => '佐藤',
        1 => '鈴木',
        2 => '高橋'
    ];
    foreach ($name as $key => $value) {
        echo 'キーは' . $key . '、名前は' . $value . 'やで!<br>';
    }
    ?>
</body>

</html>