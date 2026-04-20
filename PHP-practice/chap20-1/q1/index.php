<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$users = new ArrayObject([
        ['name' => '山田', 'age' => 17],
        ['name' => '佐藤', 'age' => 28],
        ['name' => '林', 'age' => 24]
    ]
);

echo $users[0]['name'];
echo "<br>";

foreach($users as $index => $elements) {
    echo "i:{$index} / ";
    echo "name: {$elements['name']} age:{$elements['age']}<br>";
    // if (is_array($elements)) {
    //     foreach($elements as $key => $value) {
    //         echo "key: {$key} value: {$value} // ";
    //     }
    //     echo "<br>";
    // }
}
?>
</body>
</html>