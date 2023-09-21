<?php

$frutas = ['banana', 'uva', 'caqui'];
$frutas_reverse = array_reverse($frutas);

array_push($frutas_reverse, 'morango', 'melancia');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($frutas_reverse as $value) { ?>
        <ul>
            <li><?php echo ($value) ?></li>
        </ul>
   <?php } ?>
</body>
</html>