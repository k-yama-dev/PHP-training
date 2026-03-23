<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>アレイヤデェ</title>
</head>

<body>
    <h3>0323</h3>
    <p>p60~61</p>
    <!-- p60 p61 -->
    <?php
    $name = [
        0 => '佐藤',
        1 => '鈴木',
        2 => '高橋'
    ];
    var_dump($name) ?>
    <br>
    <?php
    $name = [
        'sato' => '佐藤',
        'suzuki' => '鈴木',
        'takahashi' => '高橋'
    ];
    var_dump($name);
    echo $name['takahashi'];
    ?>
    <br>
    <!-- p64 図18 -->
    <p>p64 図18</p>
    <?php
    $people[0] = '佐藤';
    $people[1] = '鈴木';
    $people[2] = '高橋';

    foreach ($people as $key => $value) {
        echo 'キーは' . $key . '、名前は' . $value . 'やで!<br>';
    }
    var_dump($people)
    ?>
    <p>p64 図20</p>
    <!-- p64 図20 -->
    <?php
    $a = ['A', 'B', 'C'];
    var_dump($a)
    ?>
    <p>p65 図22</p>
    <!-- p65 図22 -->
    <?php
    $b[] = 'D';
    $b[] = 'E';
    $b[] = 'F';

    var_dump($b)
    ?>
    <p>p66 図25</p>
    <!-- p66 図25 -->
    <?php
    $a = ['A', 'B', 'C'];

    echo '1番目の要素は' . $a[0] . 'やで!' . '<br>';
    echo '2番目の要素は' . $a[1] . 'やで!' . '<br>';
    echo '3番目の要素は' . $a[2] . 'やで!' . '<br>';
    ?>
</body>

</html>