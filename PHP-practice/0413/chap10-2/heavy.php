<?php
function very_heavy_function()
{
    sleep(5);
    return 10;
}
for ($i = 0; $i < very_heavy_function(); $i++) {
    echo "$i\n";
}

$limit = very_heavy_function();
for ($o = 0; $o < $limit; $o++) {
    echo "$o\n";
}

for ($p = 0, $limit = very_heavy_function(); $p < $limit; $p++) {
    echo "$p\n";
}
