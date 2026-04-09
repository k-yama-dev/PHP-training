<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>値の判定</title>
</head>
<body>
    <?php
        $num = filter_input(INPUT_POST,'id',FILTER_VALIDATE_INT,
                        array('options'=>array('min_range'=>0,
                                            'max_range'=>100)));
        if (is_null($num) || ($num===false)) {
            print 'Error!';
        } else {
            print 'ID is ' . $num;
        }
    ?>
</body>
</html>