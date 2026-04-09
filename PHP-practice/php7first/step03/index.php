<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //3-1
    // 0 0.0 '' '0' はfalse
    print('abc'==true); //1
    print("<br>");
    print(0==true);//なし
    print("<br>");
    print(0.0==true);//なし
    print("<br>");
    print(40==true);//1
    print("<br>");
    print(('phptest' . '@example.com')==true);//1
    print("<br>");
    print((4-7+3)==true);//なし
    print("<br>");
    print('0'==true);//なし
    print("<br>");
    print('0 '==true);//1
    print("<br>");
    print(''==true);//なし
    print("<br>");

    //2-2
    $data = false;

    if($data) {
        print('Hello');
    } else {
        print('Bye');
    }
    print("<br>");

    //2-3
    $data = '10';//true
    //$data = '10number';//8はfalse,7はtrue

    if($data==10) {
        print "1";
    } else {
        print "2";
    }
    print("<br>");

    //3-4
    if (abs(-100) > abs(-50)) { //absは絶対値
        print "AAA";
    }

    if ("abc" > "xyz" ) {//aとxの比較 xがコードが後ろなので大きい
        print "BBB";
    } elseif("567"<"890") {//5と8の比較 8のほうがコードが後ろなので大きい
        print "CCC";
    }
    print("<br>");

    //3-5
    if ('5member' < 44) {
        print "44"; //php7 5 < 44 true
    } else {
        print "5member";//php8 "5" < "4" false
    }
    print("<br>");

    //3-6
    if (strcmp("54321", "6789") > 0) {
        print "Over";
    } else {
        print "Under";
    }
    print("<br>");

    //3-7
    $ans = 2 <=> 22.5;
    // $ans = '5member' <=> 44;

    if ($ans > 0) {
        print "Over";
    } else {
        print "Under";
    }
    print("<br>");

    //3-8
    $data = 70;
    if (($data >= 70 ) && ($data <= 100)) {
        print "Success";
    } elseif (($data >= 30 ) && ($data < 70) ) {
        print "Fail!";
    }
    print("<br>");

    //3-9
    $i = 1;
    $add = 0;
    while(++$i < 10) {
        $add += $i;
    }

    print $add;
    print("<br>");

    //3-10
    for($k = 0; $k <= 10; $k++) {
        if($k % 3 == 0) {
            print "3";
        }elseif($k % 4 == 0) {
            print "4";
        }else {
            print "0";
        }
    }


?>
</body>
</html>
