<?php
class Zaiko {
    public function __construct(
        public string $name,
        public int $number
    ) {
        //
    }
    public function checkNumber() {
        return $this->number >= 0;
    }
}

$pen = new Zaiko('ペン',5);
if ($pen->checkNumber() === false) {
    echo '在庫数は０以上を入力してください';
}
echo 'name = ' . $pen->name;
echo 'number = ' . $pen->number . "<br>";

$notebook =  new Zaiko('ノート',-10);
if ($notebook->checkNumber() === false) {
    echo '在庫数は０以上を入力してください';
}
echo 'name = ' . $notebook->name;
echo 'number = ' . $notebook->number;