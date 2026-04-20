<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo $abc;//WARNING
error_reporting(E_ALL & ~ E_WARNING);//全部のエラーの内WARNINNGだけ出さない
echo $abc;//エラー表示なし

$abc = "test";
echo "anser:${test}";//DEPRECATE
error_reporting(E_ALL & ~ E_WARNING & ~ E_DEPRECATED & ~ E_USER_DEPRECATED);
echo "anser:${test}";//DEPRECATE

?>
</body>
</html>