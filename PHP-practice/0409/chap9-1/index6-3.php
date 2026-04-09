<?php
class Box {
    public $id=0;
    public $width;
    public $height;
    public $depth;

    // function __construct(int $w, int $h, int $d) {
    function __construct($w, $h, $d) {
        $this->id++;
        $this->width = $w;
        $this->height = $h;
        $this->depth = $d;
    }
}

$data = new Box(80,90,100);
if (isValidItem($data)) {
    echo "十分です";
} else {
    echo "不足です";
}

function isValidItem($item) {
    if($item->width < 100) {
        echo "商品 {$item->id}の幅が{$item->width}で足りてません";
        return false;
    }
    if($item->height < 100) {
        echo "商品 {$item->id}の幅が{$item->height}で足りてません";
        return false;
    }
    if($item->depth < 100) {
        echo "商品 {$item->id}の幅が{$item->depth}で足りてません";
        return false;
    }
    return true;
}
