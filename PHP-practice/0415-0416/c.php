<?php
$c = ['red', 'green', 'blue', 'yellow'];

echo array_slice($c, 1, 1) . PHP_EOL;

array_pop($c);
array_pop($c);
echo array_pop($c) . PHP_EOL;

$c = ['red', 'green', 'blue', 'yellow'];
echo array_search('green', $c) . PHP_EOL;

list($yellow, $blue, $green) = $c;
echo $green . PHP_EOL;

$c = ['red', 'green', 'blue', 'yellow'];
list($f, $s, $t) = ['red', 'green', 'blue', 'yellow'];
echo $s . PHP_EOL;

list($f, $s, $t) = [
    2 => 'red',
    3 => 'green',
    1 => 'blue',
    0 => 'yellow'
];
echo $s . PHP_EOL;

list(,, $t) = ['red', 'green', 'blue', 'yellow'];
echo $t . PHP_EOL;
?>
<br>
<?php
list($f, list($s, $t), $fo) = ['red', ['green', 'blue'], 'yellow'];
echo $f . PHP_EOL;
echo $s . PHP_EOL;
echo $t . PHP_EOL;
echo $fo . PHP_EOL;
