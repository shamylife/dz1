<?php
/*
    Создать ассоциативный массив $cars. Данные взять из задания №6. Требуется,
    чтобы все данные были в одном массиве. Реализовать через вложенные массивы.
    Вывести массив в удобочитаемом виде через конструкцию print_r и через foreach.
*/

    $cars = [
        'BMW'    => ['model' => 'X5', 'speed' => 120, 'doors' => 5, 'year' => 2015],
        'Toyota' => ['model' => 'Land Cruiser', 'speed' => 100, 'doors' => 5, 'year' => 2014],
        'Opel'   => ['model' => 'Frontera', 'speed' => 80,  'doors' => 5, 'year' => 2003]
    ];

    echo '<pre>'.print_r($cars, true).'</pre><br><hr>';

    foreach ($cars as $key => $value) {
        echo $key.': '.$value.'<br>';
    }