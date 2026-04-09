<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>superとsubのクラス</title>
</head>
<body>
    <?php
    class Super {
        private $data;      //privateでは　Data:となる
        // protected $data; //protectedならば Data: Redとなる

        public function getData() {
            return $this->data;
        }

        public function __construct($data) {
            $this->data = $data;
        }
    }

    class Sub extends Super {
        private $param;

        public function getParam() {
            return $this->param;
        }

        public function __construct($data,$param) {
            $this->data = $data;
            $this->param = $param;
        }
    }

    //main
    $obj = new Sub("Red","Blue");
    print "Data: " . $obj->getData() . "<br>";
    print "Param: " . $obj->getParam();
    ?>
</body>
</html>