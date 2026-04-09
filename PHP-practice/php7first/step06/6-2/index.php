<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carクラスの実験</title>
</head>
<body>
    <?php
        require 'car.class.php';

        $car1 = new Car();  //インスタンス作成
        $car1->setCar(123,30);  //setter
        print($car1->getCar()); //getter
        // print($car1->gas);　//publicならばできる
        print "<br>";

        $car2 = new Car();
        $car2->setCar(8889,10);
        print($car2->getCar());
    ?>
</body>
</html>