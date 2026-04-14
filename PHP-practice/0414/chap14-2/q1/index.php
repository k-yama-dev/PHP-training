<?php
class Dice {
    public static function getRandom() {
        return rand(1,6);
    }
}

//1
echo 'サイコロの目：' . Dice::getRandom();

//2
// echo 'サイコロの目：' . $this->getRandom();

//3
// echo 'サイコロの目：' . $dice->getRandom();

//4
// echo 'サイコロの目：' . new Dice();
