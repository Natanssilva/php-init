<?php
   if (isset($_POST['submit'])) {
    $limite_inferior = $_POST['limite_inferior'];
    $limite_superior = $_POST['limite_superior'];

    if ($limite_inferior >= $limite_superior) {
        echo "Limite inferior maior. Por favor redigite";
        
    }else{
        echo "<p> Numeros de limite inferior até limite superior:";
        $numbers = $limite_inferior;
        do {
            $numbers++;
            echo "<br>$numbers";
            
        } while ($numbers < $limite_superior);
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>exercicio 3</h1>
    <form action="exec3.php" method="post">
        <label for="">Digite um limite inferior</label>
        <input type="number" name="limite_inferior" id="" required>
        <label for="">Digite o limite superior</label>
        <input type="number" name="limite_superior" id="" required>
        <input type="submit" name="submit" value="enviar">
    </form>
</body>
</html>