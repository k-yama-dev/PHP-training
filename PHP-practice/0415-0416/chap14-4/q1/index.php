<?php
class Polygon {
    private int $numSides = 0;

    public function __construct(int $numSides) {
        $this->numSides = $numSides;
    }
    public function description() : string {
        return 'これは' . $this->numSides . '角形です。';
    }
    // public function getEnglishName() : string {
    public function englishName() : string {
        return 'polygon';
    }
}

class Triangle extends Polygon {
    public function __construct() {
        parent::__construct(3);
    }
    public function englishName() : string {
        return 'triangle';
    }
}

$triangle = new Triangle();
// $triangle = new Polygon(3);
echo $triangle->description();
echo $triangle->englishName();