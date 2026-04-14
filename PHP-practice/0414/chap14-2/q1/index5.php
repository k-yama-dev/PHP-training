<?php
class DateUtil {
    private int $timestamp;

    public function __construct() {
        $this->timestamp = time();
    }
    public function getYmdText() {
        return date('Y年m月d日',$this->timestamp);
    }
    public function getTomorrow() {
        return strtotime('+1 day', $this->timestamp);
    }
    public function getTomorrowText() {
        // return date('Y年m月d日',strtotime('+1 day', $this->timestamp));
        return date('Y年m月d日',$this->getTomorrow());
    }
}

$date = new DateUtil();
echo $date->getYmdText() . "<br>";
echo $date->getTomorrowText();
