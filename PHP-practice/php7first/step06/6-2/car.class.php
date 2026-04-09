<?php
class Car {
    protected $num;
    protected $gas;
    // public $gas; //publicならば $car1->gasを見ることができる

    //コンストラクター(初期化処理)
    function __construct() {
        $this->num = 0;
        $this->gas = 0.0;
    }

    //セッター setter
    function setCar($n,$g) {
        $this->num = $n;
        $this->gas = $g;
    }

    //ゲッター getter
    function getCar() {
        return "この車のナンバーは" . $this->num . 
        "でガソリンは" . $this->gas . "リットルです";
    }
}
?>