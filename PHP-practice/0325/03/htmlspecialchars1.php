<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
echo "<s>test</s>" . PHP_EOL;
echo htmlspecialchars("<s>test</s><br>", ENT_QUOTES, 'UTF-8');
?>
</body>
</html>