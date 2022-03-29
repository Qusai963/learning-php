<?php
$_123 = "def";

$x = 5;
$y = $x;
$x = 23;
echo $y,"<br>"; //print 5

$x2 = 99;
$y2 = &$x2; // attention
$x2 = 6;
echo $y2,"<br>"; // print 6

//we can't print a variable in single quotes against double quotes
//like: echo 'hello $x2'; the output will be hello $x2
//but here:
echo "hello $x2","<br>"; // hello 6
echo "hello {$x2}","<br>"; // hello 6 but more readable
print "hello".$x2; // or single quote
echo "<br>";

define("x3", 100); // constant value and we can't use $ to print it
echo x3."<br>";
echo defined("x3"); // print 1 if the constant value exists and don't print anything if it doesn't exist

// const in compile time
// define in run time
// ==> so we can't use const in loop and if condition (control structure)

$paid ="PAID";
define("STATUS_".$paid,"STATUS_PAID2");
echo "<br>".STATUS_PAID;

echo "<br>".PHP_VERSION; //predefined constant
echo "<br>".__LINE__."<br>"; // magic constant

$foo = 'bar';
$$foo = 'oop';
$bar = 'c++';
echo $$foo."<br>"; // c++
echo "${$foo}"; // c++ and don't write $$foo in single or double quotes

// we can change the data type of variables
$p = 5;
$p = "p";
echo "<br>".$p;
echo '<br>'.gettype($p).'<br>'; // string
echo var_dump($p).'<br>'; // string(1:number of character) "p"
$o = 5;
echo var_dump($o).'<br>'; // int(5)

$a = [1,2.5,true,"this is array"];
print_r($a).'<br>'; //Array ( [0] => 1 [1] => 2.5 [2] => 1 [3] => this is array )
// we can't use echo to print array

// php determine data type of variable in runtime
echo '<br>';

echo (int) '45safdsdaaasa3231'.'<br>';
echo floor((0.1+0.7)*10).'<br>';
echo "1                                   2".'<br>'; // 1 2
echo nl2br("line 1 $p
line 2 $o
");

// heredoc
$text = <<<TEXT
line 3 $p
line 4
TEXT;
echo nl2br($text).'<br>';

// nowdoc
$text = <<<'TEXT'
line $p
line $a
TEXT;
echo nl2br($text);

$we = <<<we
<div>
    <p>hello</p>
    <p>world</p>
</div>
we;
echo $we;

//unset function destroy the variable
// $x = 7;  unsent($x); : here we can't access to x because it convert to null

