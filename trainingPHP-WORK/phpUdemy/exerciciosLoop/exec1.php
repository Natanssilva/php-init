<?php

//construindo tabuada do 5
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exec1</title>
</head>
<body>
    <?php 
        $numTabuada = 5;
        for ($i=0; $i <= 10; $i++) { 
            echo "<br>$numTabuada x $i = " . $numTabuada * $i;
        }


    ?>
</body>
</html>