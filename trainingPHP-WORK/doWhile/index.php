<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Contagem progressiva</h1>

    <?php  // código pra fazer um contador 
        $cont = 100;

        do {
            echo "$cont ";
            $cont-= 10 ;
        } while ($cont >= 1);

    ?>
</body>
</html>