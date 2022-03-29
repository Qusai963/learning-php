<?php
// include 'notFound.php'; => generate warning if not found
// require 'notFound.php'; => generate error if not found

// $nf = include 'notFound.php';
// $f = include 'file2.php';
// var_dump($nf); bool(false)
// var_dump($f); // int(1)

$x = 7;
require_once 'file2.php';
require_once 'file2.php'; // printing hello from file2 once time

echo $x.'<br>'; // print 5 , go to file2 to know why



