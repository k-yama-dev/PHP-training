<?php
class Dice {
    private int $timestamp;

    public function __construct(private int $number) {
        $this->timestamp = time();
    }

    public function getNumber() {
        return $this->number;
    }

    public function getTimestamp() {
        return $this->timestamp;
    }
}

$myDice = new Dice(rand(1,6));

echo $myDice->getNumber() . "<br>";
echo $myDice->getTimestamp();