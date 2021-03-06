<?php
/*
    Создайте массив $bmw с ячейками: model, speed, doors, year. Заполните ячейки
    значениями соответственно: “X5”, 120, 5, “2015”. Создайте массивы $toyota и $opel
    аналогичные массиву $bmw (заполните данными).
    Выведите значения всех трёх массивов в виде:
    Модель: model
    Скорость: speed
    Двери: doors
    Год выпуска: year
    Например:
    Модель: X5
    Скорость: 120
    Двери: 5
    Год выпуска: 2015
*/

    $bmw = Array(
        'model' => "X5",
        'speed' => 120,
        'doors' => 5,
        'year'  => "2015"
    );

    $toyota = Array(
        'model' => "Land Cruiser",
        'speed' => 100,
        'doors' => 5,
        'year'  => "2014"
    );

    $opel = Array(
        'model' => "Frontera",
        'speed' => 80,
        'doors' => 5,
        'year'  => "2003"
    );

    # Вывод значений массива BMW
    echo "Модель:      $bmw[model] <br>
          Скорость:    $bmw[speed] <br>
          Двери:       $bmw[doors] <br>
          Год выпуска: $bmw[year]  <br> <hr>";
    
    # Вывод значений массива Toyota
    echo "Модель:      $toyota[model] <br>
          Скорость:    $toyota[speed] <br>
          Двери:       $toyota[doors] <br>
          Год выпуска: $toyota[year]  <br> <hr>";

    # Вывод значений массива Opel
    echo "Модель:      $opel[model] <br>
          Скорость:    $opel[speed] <br>
          Двери:       $opel[doors] <br>
          Год выпуска: $opel[year]  <br> <hr>";