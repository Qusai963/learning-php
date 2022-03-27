<!DOCTYPE html>
<html>
<head>
    <title>Page Title</title>
</head>
<body>

    <?php $score = 50?>
    <?php if($score > 50): ?>
        <strong>large than 50</strong>
    <?php elseif ($score < 50): ?>
        <strong>less than 50</strong>
    <?php else: ?>
        <strong>equal 50</strong>
    <?php endif;?>
    <br>
</body>
</html>

<?php

    $programmingLanguage = ['php','java','c++'];
    foreach ($programmingLanguage as $key => $value)
        echo $key.' '.$value.'<br>';


    $flashes = ['qusai','omran','karam'];
    foreach ($flashes as $key => &$value){
        $value = 'adnan';}
    print_r($flashes);

    echo '<br>';
    $array = ['1','2',['3','4','5']];
    foreach ($array as $value)
        echo(json_encode($value)); // "1""2"["3","4","5"] // json_encode to print array
        echo '<br>';


        $mathKey = 2;
      $h = match($mathKey){
            1,3 =>  'hello',
            2 =>  'world'
        };
        echo $h.'<br>';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>world</p>
</body>
</html>

