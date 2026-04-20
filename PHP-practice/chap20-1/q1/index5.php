<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SplFileObject</title>
</head>
<body>
<?php
$fp = new SplFileObject('test.csv');
$fp->setFlags(SplFileObject::READ_CSV);

foreach ($fp as $line) {
    print_r($line);
    echo "<br>";
}
?>
</body>
</html>