<?php
//dado array com nomes, apresente todos exceto o no indice 4

function showArray($array){
    echo "<pre>";

    print_r($array);

    echo "</pre>";
}


$nomes = [
    0 => "natan0",
    1 => "natan1",
    2 => "natan2",
    3 => "natan3",
    4 => "natan4",
    5 => "natan5",
    6 => "natan6"
];


showArray($nomes);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exec3</title>
</head>
<body>
    <?php
        foreach ($nomes as $key => $value) {
            if ($key !== 4) {
                echo "$value ";
            }
        }
    ?>
</body>
</html>