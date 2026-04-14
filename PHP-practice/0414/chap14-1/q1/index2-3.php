<?php
class Dice {
    public function __construct(
        private int $number,
        private int $timestamp) { }

    public function getNumber() {
        return $this->number;
    }

    public function getTimestamp() {
        return $this->timestamp;
    }
}

$myDice = new Dice(rand(1,6),time());

echo $myDice->getNumber() . "<br>";
echo $myDice->getTimestamp();