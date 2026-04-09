<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第5章</title>
</head>
<body>
    <?php
        //5-1
        // function calc() {

        // }

        //5-2
        function add($data1,$data2) {
            $sum = $data1 + $data2;
            return $sum;
        }
        print add(10,20);
        print "<br>";
        print ADD(10,20);
        print "<br>";

        //5-3
        //関数の宣言でデフォルトの宣言ができる

        //5-4
        // function message($message, $name="hanako") { //A
        //     print "$message, $name";
        // }
        function message($message="Hello", $name="taro") { //C
            print "$message, $name";
        }

        message("Hello", "taro"); //A,C: Hello, taro
        print "<br>";
        message("Hello"); // A:Hello, hanako C:Hello, taro
        print "<br>";
        message(); // A:エラー C:Hello, taro
        print "<br>";

        //5-5
        function a(): array {
            return [1,2]; //タプル
        }

        print_r(a());
        print "<br>";
        [$a1,$a2] = a();
        print $a1;
        print "<br>";
        print $a2;
        print "<br>";

        //5-6
        function score_check($num1, $num2, $num3) {
            $sum = $num1 + $num2 + $num3;
            return $sum;
        }
        $num1 = 30;
        $num2 = 20;
        $num3 = 30;

        if (score_check($num1, $num2, $num3) >= 80) {
            print "Success !!";
        }elseif(score_check($num1,$num2,$num3) >= 50 &&
                score_check($num1,$num2,$num3) < 80) {
            print "Challenge !!";
        } else {
            print "Failer !!";
        }

        print "<br>";
        //5-7
        function countup($num) {
            for($i=0; $i<10; $i++) {
                $num += 1;
            }
            // return $num;
        }
        $num = 9;
        // $num = countup($num);//return があれば19
        countup($num);//9
        print $num;
        print "<br>";
        //5-8
        print("GLOBALSのnum : " . $GLOBALS['num']);
    ?>
</body>
</html>