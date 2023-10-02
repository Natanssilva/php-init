<?php

if (isset($_POST['submit'])) {
    $tempF = floatval($_POST['temperatura']);
    $tempC = ($tempF - 32) / 1.8;

    if ($tempC >= 1 && $tempC <= 12 ) {
        echo "<p> Muito frio! </p>";

    }elseif($tempC > 12 && $tempC <= 23 ){
        echo "<p> Clima ameno </p>";

    }elseif ($tempC > 23 && $tempC <= 32 ) {
        echo "<p> Calor! </p>";

    }elseif ($tempC > 32 && $tempC <= 40 ) {
        echo "<p> Calor tórrido</p>";
    }else{
        echo "<p> sem registro </p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio 1</title>
</head>
<body>
    <h1>Conversão Fahrenheit para Celsius</h1>
    <form action="exec1.php" method="post">
        <label for="">Digite</label>
        <input type="number" name="temperatura" id="" placeholder="temperatura Fahrenheit">
        <input type="submit" value="SALVAR" name="submit">
    </form>


</body>
</html>