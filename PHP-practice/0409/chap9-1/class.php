<?php
echo "クラス:値と処理(その値に関する処理)がひとつになってるもの<br>";
class Box
{
    public $id = 0;
    public $w;
    public $h;
    public $d;

    function __construct($w, $h, $d)
    {
        $this->id++;
        $this->w = $w;
        $this->h = $h;
        $this->d = $d;
    }
}

$data = new Box(80, 90, 100);
if (iVI($data)) {
    echo "十分です";
} else {
    echo "不足です";
}

function iVI($item)
{
    if ($item->w < 100) {
        echo "商品 {$item->id}";
        return false;
    }

    if ($item->h < 100) {
        return false;
    }

    if ($item->d < 100) {
        return false;
    }

    return true;
}
