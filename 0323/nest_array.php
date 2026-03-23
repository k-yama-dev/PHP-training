<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ねすたれいやでえ</title>
</head>

<body>
    <p>p68 図2</p>
    <!-- p68 図2 -->
    <?php
    $people[] = ['name' => '佐藤', 'blood' => 'A'];
    $people[] = ['name' => '田中', 'blood' => 'B'];
    $people[] = ['name' => '加藤', 'blood' => 'O'];
    $people[] = ['name' => '長崎', 'blood' => 'AB'];

    var_dump($people);
    ?>

    <p>p70 図6</p>
    <!-- p70 図6 -->
    <?php
    $people[] = ['name' => '佐藤', 'blood' => 'A'];
    $people[] = ['name' => '田中', 'blood' => 'B'];
    $people[] = ['name' => '加藤', 'blood' => 'O'];
    $people[] = ['name' => '長崎', 'blood' => 'AB'];

    echo $people[2]['blood'] . '<br>';
    echo $people[4]['name'] . '<br>';
    ?>

    <p>p71 図9</p>
    <!-- p71 図9 -->
    <?php
    $people[] = ['name' => '佐藤', 'blood' => 'A'];
    $people[] = ['name' => '田中', 'blood' => 'B'];
    $people[] = ['name' => '加藤', 'blood' => 'O'];
    $people[] = ['name' => '長崎', 'blood' => 'AB'];

    foreach ($people as $key => $value) {
        echo 'キーは' . $key . '、値は' . $value . '<br>';
    }
    ?>

    <p>p71 図10</p>
    <!-- p71 図10 -->
    <?php
    $people = ['name' => '佐藤', 'blood' => 'A'];

    foreach ($people as $key => $value) {
        echo 'キーは' . $key . '、値は' . $value . '<br>';
    }
    ?>

    <p>p73 図15</p>
    <!-- p73 図15 -->
    <?php
    $people2[] = ['name' => '佐藤', 'blood' => 'A'];
    $people2[] = ['name' => '田中', 'blood' => 'B'];
    $people2[] = ['name' => '加藤', 'blood' => 'O'];
    $people2[] = ['name' => '長崎', 'blood' => 'AB'];

    foreach ($people2 as $people_key => $person) {
        echo '順番は' . $people_key . '<br>';
        foreach ($person as $person_key => $value) {
            echo 'キーは' . $person_key . '、値は' . $value . 'やで!<br>';
        }
    }
    ?>
    <p>p73 図17</p>
    <?php
    $people3[] = ['name' => '佐藤', 'blood' => 'A'];
    $people3[] = ['name' => '田中', 'blood' => 'B'];
    $people3[] = ['name' => '加藤', 'blood' => 'O'];
    $people3[] = ['name' => '長崎', 'blood' => 'AB'];

    foreach ($people3 as $key => $person) {
        echo '名前は' . $person['name'] . 'やで<br>';
    }

    ?>

</body>

</html>