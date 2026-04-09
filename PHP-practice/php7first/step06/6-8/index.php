<?php
namespace MyNameSpace1 {
    class Car {
        public function run() {
            print "MyNameSpace1のCarが走ります";
        }
    }
}

namespace MyNameSpace2 {
    class Car {
        public function run() {
            print "MyNameSpace2のCarが走ります";
        }
    }
}

namespace {
    $car1 = new \MyNameSpace1\Car();
    print $car1->run() . "<br>";

    $car2 = new \MyNameSpace2\Car();
    print $car2->run();

}

?>