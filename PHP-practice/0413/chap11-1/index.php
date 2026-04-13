<?php
for ($i = 0; $i < 10; $i++) {
    if ($i % 2 === 0) {
        continue;
    }
    if ($i % 7 === 0) {
        break; //breakはforを終了させる
    }
    echo "$i\n";
}

$exams = [
    ['name' => '国語', 'points' => 90],
    ['name' => '数学', 'points' => 30],
    ['name' => '英語', 'points' => 100],
    ['name' => '理科', 'points' => 100],
    ['name' => '社会', 'points' => 40]
];
$akaten = false;
foreach ($exams as $exam) {
    if ($exam['points'] <= 50) {
        $akaten = true;
        break;
    }
}
if ($akaten) {
    echo "赤点やっど\n";
} else {
    echo "赤点はなかど\n";
}

$exams1 = [
    ['name' => '国語', 'points' => 90],
    ['name' => '数学', 'points' => 30],
    ['name' => '英語', 'points' => 100],
    ['name' => '理科', 'points' => 100],
    ['name' => '社会', 'points' => 40]
];
$keyIndex = array_search(100, array_column($exams1, 'points'));
var_dump($exams1[$keyIndex]);
