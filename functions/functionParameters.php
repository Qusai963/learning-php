<?php

    declare(strict_types = 1); // if we passes different data type will make error
    function par(int|float $x, $y = 4){
        return $x+$y;
    }
    echo par(5).'<br>'; // 9
    echo par(4,45).'<br>';   // 8

    function sum(...$numbers){
//        $sum = 0;
//        foreach ($numbers as $value){
//            $sum += $value;
//        }
//        return $sum;

        //or:

        return array_sum($numbers);
    }
    echo sum(1,2,3,4,5).'<br>';

        function split($x,$y,...$arr){
            return$x + $y + array_sum($arr);
        }
        $array = [1,2,3,4];
        echo split(0,5,...$array).'<br>';

    function div($x,$y){
        if($x>$y)
        return $x/$y;
        else
            return $y/$x;
    }
    $y = 8;
    $x = 4;
    echo div(y: $y, x: $x).'<br>'; // named argument

    $keyArray = ['x'=>3,'y'=>9];
    echo div(...$keyArray);

