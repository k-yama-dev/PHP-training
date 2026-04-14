<?php
class DateUtil {
    public static function getYmdText(int $year,
                                    int $month,
                                    int $date) {
        return $year . '年' . $month . '月' . $date . '日';
    }
}

echo DateUtil::getYmdText(2023,12,25);