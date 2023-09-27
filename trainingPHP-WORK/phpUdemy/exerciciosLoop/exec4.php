<?php

//array com nomes e devem ser mostrado todos MAS a partir do valor do indice 4 deve ser apresentado com background red

function showArray($array){
    echo "<pre>";

    print_r($array);

    echo "</pre>";
}
$css = '';
$nomes = [
    0 => "natan0",
    1 => "natan1",
    2 => "natan2",
    3 => "natan3",
    4 => "natan4",
    5 => "natan5",
    6 => "natan6"
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exec5</title>
    <style>
        .background{
            background-color: red;
        }
    </style>
</head>
<body>
    
    <?php
        foreach ($nomes as $key => $value) {
            if ($key >= 4) {
                $css = 'background';
                echo "<p class = '$css'>$value</p>";    
            } else {
                echo "<p>$value</p>";
            }
        }
    
    ?>
</body>
</html>