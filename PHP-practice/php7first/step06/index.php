<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>６章</title>
</head>
<body>
    <?php
        //6-1
        //methodはfunctionで作る C

        //6-2
        // $obj = new Car();
        // $obj はインスタンス
        // Car()はコンストラクタ（初期化処理）

        //6-3
        //静的メソッドは
        //static function run() {}のように宣言
        //利用時は
        //Car::run();のようにクラス名に::を付ける
        //$obj->run()では利用できない

        //6-4
        //インスタンス化しないで呼び出せるのは
        //静的メソッドでありコンストラクタではない


        //6-5
        function division($x,$y) {
            if ($y == 0) {
                throw new Exception("ゼロによる除算");
            }
            return $x / $y;
        }
        try {
            print division(9,3) . ", ";
            print division(5,0) . ", ";
            print division(4,2) . ", ";
        } catch (Exception $e) {
            print $e->getMessage();
        }
    ?>
</body>
</html>