<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>第4章</title>
</head>
<body>
    <?php
    //4-2
    $numbers = array(10,20,30);
    $numbers[] = 40;
    $numbers[] = 50;
    print $numbers[4];
    print "<br>";

    //4-3
    $colors['sea'] = 'blue';
    $colors['leaf'] = 'green';
    $colors['night'] = 'black';

    $scores = array('国語' => 80,
                    '数学' => 90,
                    '英語' => 75);

    print $colors['sea'];
    print "<br>";
    print $scores['英語'];
    print "<br>";

    //4-4
    $array = array("10"=>'a',"1"=>'b',"3"=>'c',"2"=>'d');

    foreach($array as $k=>$v) {
        print("key." . $k . "=>" . $v ."<br>");
    }

    //4-5
    $colors = []; //一度空っぽにする
    $colors[0] = 'red';
    $colors[1] = 'yellow';
    $colors[3] = 'orange';
    $colors[2] = 'blue';

    foreach($colors as $color) {
        print "$color ";
    }
    print "<br>";
    var_dump($colors);
    print "<br>";

    //4-6
    $colors = [];
    $colors['sea'] = 'blue';
    $colors['leaf'] = 'green';
    $colors['night'] = 'black';
    $colors['sun'] = 'red';

    var_dump($colors);
    print "<br>";

    //Valueでソートする
    asort($colors);

    var_dump($colors);
    print "<br>";

    foreach($colors as $key => $value) {
        print " $key \t : $value <br>";
    }

    //4-7
    $fruits = [];
    $fruits = array(1 => 'apple',
                    2 => 'banana',
                    3 => 'lemon',
                    4 => 'orange');

    foreach($fruits as $key => $value) {
        print "{$key} {$value},";
    }
    print "<br>";

    $n = count($fruits);
    for($i=1; $i <= $n; $i++) {
        print "{$i} {$fruits[$i]},";
    }
    print "<br>";
    
    //4-8
    $a = array(2025,4,30);
    print implode('/',$a);
    print "<br>";
    print implode('-',$a);
    print "<br>";

    $b = "2025,4,30";
    $barray = explode(',',$b);
    var_dump($barray);
    print "<br>";

    print in_array(2025,$a);
    print "<br>";
    print in_array(30,$barray);
    print "<br>";

    //4-9
    $profiles = 
        array(0=>
                array('name'=>'Yamada','age'=>24,'country'=>'Osaka'),
            1=>
                array('name'=>'Tanaka','age'=>32,'country'=>'Tokyo'),
            2=>
                array('name'=>'Ikeda','age'=>27,'country'=>'Kyoto')
        );
    var_dump($profiles);
    print($profiles[1]['country']);
    print "<br>";

    //4-10
    $arrays = [];
    $arrays['apple']['color'] = 'red';
    $arrays['apple']['stock'] = 1000;
    $arrays['banana']['color'] = 'yellow';
    $arrays['banana']['stock'] = 2000;
    var_dump($arrays);
    print "<br>";

    $arrays = [];
    $arrays = array(
            'apple'=>array('color'=>'red','stock'=>1000),
            'banana'=>array('color'=>'yellow','stock'=>2000)
    );
    var_dump($arrays);
    print "<br>";

?>
</body>
</html>