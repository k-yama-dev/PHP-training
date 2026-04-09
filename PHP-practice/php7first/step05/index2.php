<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5章 9以降</title>
</head>
<body>
    <?php
        //5-9
        function add($a, $b) {
            $a = 100;
            global $b;
            $b = 200;
            print 'local_$a =>' . $a . ',local_$b =>' . $b;
            print ", ";
        }

        $a = 10;
        $b = 20;
        add($a, $b);
        print 'global_$a => '. $a . ',global_$b =>' . $b;
        print "<br>";
        
        //5-10
        $a = 2;
        $b = 3;
        $c = 5;
        $sum = 0;
        function change($a, $b, $c) {
            $a = 100;
            global $b;
            $b = 200;
            $GLOBALS['c'] = 300;
        }
        change($a, $b, $c);
        $sum = $a + $b + $c;
        print $sum;
    ?>
</body>
</html>