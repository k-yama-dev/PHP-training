<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>複数値の受け渡し</title>
</head>
<body>
    <?php
        $colors = $_POST['color'] ?? ['選択してください'];
        foreach($colors as $color) {
            print($color . '/');
        }
    ?>
</body>
</html>