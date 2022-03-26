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

</body>
</html>

