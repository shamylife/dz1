<?php
/*
    Создайте переменную $str, которой присвойте строковое значение,
    содержащее отдельные слова разделённые пробелом. Выведите строку на экран.
    Затем разбейте строку на массив. Выведите массив. Затем используя циклы while
    или do-while (на ваше усмотрение) развернуть массив и склеить в строку используя
    любой символ, кроме пробела. Вывести результат.
*/

    $str = "Арбуз Абрикос Слива Яблоко Груша";

    echo $str . '<br>';

    $arr = explode(' ', $str);

    echo '<pre>' . print_r($arr, true) . '</pre>';

    $length = count($arr);
    $reverse_array = Array();

    while ($length) {
        $reverse_array[] = $arr[$length - 1];
        $length--;
    }

    echo '<pre>' . print_r($reverse_array, true) . '</pre>';

//    $newstr = implode(' & ', $reverse_array);
//
//    echo $newstr;