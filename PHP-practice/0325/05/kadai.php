<?php
echo '1から100の素数';
echo '以下<br><br>';

for ($i = 2; $i <= 100; $i++) {
    $n = true;
    for ($j = 2; $j < $i; $j++) {
        if ($i % $j === 0) {
            $n = false;
            break;
        }
    }
    if ($n === true) {
        echo $i . '<br>';
    }
}
?>
