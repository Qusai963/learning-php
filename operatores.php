<?php
echo 2**4,'<br>'; // 16

$str_casting = '10';
var_dump(+$str_casting); // int(10) (+ or -)
echo '<br>';

$x = 5.5;
$y = 2.3;

var_dump($x % $y); // int(1) /* cast to int */
echo '<br>';
//to avoid that we using:
var_dump(fmod(5.5,2.3)); //float(0.9000000000000004)
echo '<br>';

var_dump(fdiv(5,0)); //float(INF)
echo '<br>';

// when we compare string value and numeric value
// before php 8 the string value will convert to numeric ,
// but in php 8 numeric value will convert to string

$str = 'abc';
echo ++$str.'<br>'; // abd

// we said array 1 equal array 2 if equals (keys and value)
$firstArray = ['a'=>1,'b'=>2];
$secondArray = ['c'=>1,'d'=>2];
var_dump($firstArray == $secondArray); //bool(false)