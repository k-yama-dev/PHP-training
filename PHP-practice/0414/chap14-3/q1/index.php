<?php
class Game {
    public function __construct(
        private int $point
    ) {}
    public function getPoint() : int{
        return $this->point;
    }
    public function addPoint(int $point): void {
        $this->add($point);
    }
    public function doublePoint() : void {
        $this->add($this->point);
    }
    private function add(int $point) : void {
        $this->point += $point;
    }
}

$myGame = new Game(10);
$myGame->addPoint(20);
$myGame->doublePoint();
echo $myGame->getPoint();//60