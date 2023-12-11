<?php

$time_passed = function() {
        $data = "20.03.2016";
        $time = strtotime($data);
        $today = time();
        $day = ($today - $time)/86400;
        $day = floor($day);
        if ($day == 1) {
            echo $day . "день назад";
        }
        else if ($day >= 2 && $day < 5) {
            echo $day . "дня назад";
        }
        else if ($day > 4) {
            echo $day . "дней назад";
        }
        else if ($day > 30) {
            echo "месяц назад";
        }
}

?>

