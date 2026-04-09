<?php
class Box {
    public $width;
    public $height;
    public $depth;

    // function __construct(int $w, int $h, int $d) {
    function __construct($w, $h, $d) {
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
    $result = true;
    if($item->width < 100) {
        $result = false;
    }
    if($item->height < 100) {
        $result = false;
    }
    if($item->depth < 100) {
        $result = false;
    }
}
