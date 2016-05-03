<?php
/*
    Создайте 5 переменных с разными скалярными типами и присвойте им
    произвольные значения. Затем создайте переменные: $name, $age, $city, $job и
    присвойте им соответствующие данные. $job – логическая (да/нет). Есть работа? С
    помощью echo выведите все переменные в удобочитаемом виде.
*/

    $bool = true;       // Логический тип
    $int = 5;           // Integer - целочисленный тип
    $float = 2.6;       // Float - число с плавающей точкой (Double)
    $string = 'Строка'; // String - Строчный тип

    # 5-й скалярный тип данных PHP не знаю

    echo "$bool - ".gettype($bool).'<br>';
    echo "$int - ".gettype($int).'<br>';
    echo "$float - ".gettype($float).'<br>';
    echo "$string - ".gettype($string).'<br>'.'<hr>';

    $name = "Denis";
    $age = 25;
    $city = 'Nuremberg';
    $job = false;

    echo "Hi! My name is <b>$name</b> and I'm $age. I live in $city and ".(($job) ? "have a job!" : "I'm student!");