<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>contador</h1>

    <?php
        $contador = 0;

        while ($contador < 10) {
            $contador++;
            echo $contador;
        }
    ?>
</body>
</html>