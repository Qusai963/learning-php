<?php
    $out = 1;
    $sum = function (...$arr) use($out) {
        return array_sum($arr) + $out; // if we change value of out inside function nothing will happen
    };

    echo $sum(1,2,3,4);

