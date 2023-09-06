<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tabuada com laço FOR</h1>
    <form action="index2.php" method="get">
        <label for="value">Escolha um valor para tabuada</label>
        <select name="numero_tabuada" id="">
            <?php

                for ($contador_option=1; $contador_option <= 10 ; $contador_option++) { 
                    echo "<option value = '$contador_option'>$contador_option</option>";
                }
            ?>
        </select>
        <input type="submit" value="Calcular Tabuada">
    </form>
</body>
</html>