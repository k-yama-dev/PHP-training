<?php
class Dice {
    public static function echoRandom() {
        echo 'サイコロの目(1)：' . self::getRandom();
    }
    public static function getRandom() {
        return rand(1,6);
    }
}

Dice::echoRandom();
echo 'サイコロの目(2)：' . Dice::getRandom();

