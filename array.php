<?php
// isset() function return if the index is found or not
$arr = ['0','1','2'];
var_dump(isset($arr[0]));
echo '<br>';
var_dump(isset($arr[3]));
echo '<br>';
var_dump($arr);
echo '<br>';

echo "<pre>";
print_r($arr);
echo "</pre>";

echo count($arr); // number of elements
$arr[] = '3'; // adding in the end of array
array_push($arr,'4','5');
echo '<br>';
print_r($arr);
echo '<br>';

$arrayIndex = ['a'=>"oop","b"=>'advance'];
$arrayIndex[null] = 5;
$arrayIndex[] = 6;
print_r($arrayIndex);
echo '<br>';

$ror =
    [
        'php'=>
        [
            'laravel'=>[0,1,2]
        ],
        'java'=>[-1,-2]
    ];
var_dump($ror);
echo '<pre>';
print_r($ror);
echo '</pre>';
print_r($ror['php']['laravel'][2]); echo '<br>';

$tr = ['1'=>5,1=>8];
echo $tr['1'].'<br>'; // 8

$difr = [true=>'a',1=>'b',1.8=>'c','a'=>'d'];
print_r($difr); // Array ( [1] => d )
