<?php
class Dice {
    private int $number;
    private int $timestamp;

    public function __construct(int $number) {
        $this->number = $number;
        $this->timestamp = time();
    }

    public function getNumber() {
        return $this->number;
    }

    public function getTimestamp() {
        return $this->timestamp;
    }
}

$myDice = new Dice(5);

echo $myDice->getNumber() . "<br>";
echo $myDice->getTimestamp();