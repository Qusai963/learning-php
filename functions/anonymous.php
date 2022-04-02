<?php
    $out = 1;
    $sum = function (...$arr) use($out) {
        return array_sum($arr) + $out; // if we change value of out inside function nothing will happen
    };

    echo $sum(1,2,3,4).'<br>';

    $array1 = [1,2,3,4];
    $array2 = array_map(function ($element){
        return $element*2;
    },$array1);
    echo '<pre>';
    print_r($array1);echo '<br>';
    print_r($array2);
    echo '</pre>'.'<br>';

    function pop($element){
        return $element *3;
    }
    $arr3 = [1,2,3];
    $arr4 = array_map('pop',$arr3);
    print_r($arr4);

    //arrow function
    $arra = [1,2,3,4];
    $arra2 = array_map(fn($number)=> $number*$number,$arra);
