<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
function inverse($x) {
    return 1/$x;
}
try {
    echo inverse(3);
    echo inverse(0);
    echo "complite!";
// } catch(DivisionByZeroError $e) {
//     echo "0で割りました";
} catch(Exception $e) {
    echo "ここに来ない";
    echo $e->getMessage();
} catch(Error $e) {
    echo "<br>Fatal Errorです";
}

?>
</body>
</html>