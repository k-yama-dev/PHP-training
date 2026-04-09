<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //2-2
    $data = 12345;
    print("$data" ."<br>");
    print('$data' . '<br>');

    //2-3
    $price = 5;
    $off = 0.79;
    printf('Price : $%.2f', $price - $off);
    print("<br>");

    //2-4
    $string = "  aaabbb  ";
    print("\$string: /" . $string . "/<br>");
    print("strlen: " . strlen($string) . "<br>");
    print("substr : /" . substr($string, 0, 5). "/<br>");
    print("str_replace : /" . str_replace('aaa','AAA',$string). "/<br>");
    print("trim : /" . trim($string). "/<br>");

    //2-5
    print "A " . ucwords(strtoupper('sato ichiro')) . "<br>";
    print "B " . ucwords(strtolower('SATO ICHIRO')) . "<br>";
    print "C " . strtoupper(ucwords('sato ichiro')) . "<br>";
    print "D " . strtolower(ucwords('SATO ICHIRO')) . "<br>";

    //2-6
    $string = 'abcdefghijk';
    print substr($string, 1,5 ) . "<br>";

    //2-7
    print 1 * 8 . 3 * 4;
    print("<br>");
    print 1 * 8.3 * 4;
    print("<br>");

    //2-8
    $BANANA = 1;
    //$5banana = 2; //数値で始まる変数はできない
    $Fruits_Banana = 3;
    $_banana = 4;
    //$apple-banana = 5; //変数に-は使えない
    $apple7 = 6;

    //2-9
    print 'Hello' == 'Hello';   //1
    print("<br>");
    print 'Hello' == 'HELLO';   //なし
    print("<br>");
    print strcasecmp('Hello', 'Hello'); //0
    print("<br>");
    print strcasecmp('Hello', 'HELLO'); //0
    print("<br>");

    //2-10
    echo "Print string1 : \"PHP\" <br>";

    echo <<<_DATA_
    Print string2 : "PHP" <br>
    _DATA_;

    echo <<<abc
    <p>abcdefg</p>
    <p>2行目</p>
    abc;
    print("<br>");


    //12-11
    $number = 0;

    $number += 1;
    $number += 2;
    $number += 3;
    $number += 4;
    $number += 5;
    ++$number;

    print 'number : ' . $number . "<br>";
    print 'number : ' . $number++ . "<br>";
    print 'number : ' . ++$number . "<br>";

    ?>

    </body>
</html>
