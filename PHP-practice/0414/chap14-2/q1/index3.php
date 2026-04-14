<?php
class Dice {
    private $count = 0;

    public function echoRandom() {
        echo 'サイコロの目(1)：' . $this->getRandom();
        // echo 'サイコロの目(1)：' . self::getRandom();//getRandomがstaticだと呼べない
    }
    public function getRandom() {
    // public static function getRandom() {
        // $this->count++;//staticからobjectの変数を見るのはできない
        return rand(1,6);
    }
    public function getCount() {
        return $this->count;
    }
}

$dice = new Dice();
$dice->echoRandom();
echo 'サイコロの目(2)：' . $dice->getRandom() . "<br>";
echo 'getRandomの回数:' . $dice->getCount() . "<br>";
echo 'サイコロの目(2)：' . $dice->getRandom() . "<br>";
echo 'getRandomの回数:' . $dice->getCount() . "<br>";
