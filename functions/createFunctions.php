<?php

    echo foo(); // hello world

    function foo(){
        return 'hello world'.'<br>';
    }

    echo foo(); // hello world
// you can declare function in the bottom,middle and above
// you can call function if you declare it inside if statement in one case: call here after declare it and condition is true

function type():int|float{

}

function nullfun(): ?int{
    return null; // still work because we put '?'
}

function prints(){
    echo 'printing','<br>';
}
$rt = 'prints';
if(is_callable())
$rt();
else
    echo 'not found'.'<br>';

