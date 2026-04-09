<?php
$number = 0;
while ($number !== 6) {
    $number = rand(1,6);

    if ($number === 6) {
        echo "6が出ました!\n";
    } else {
        echo "残念、{$number}でした...\n";
    }
}
