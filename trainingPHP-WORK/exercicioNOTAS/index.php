<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Resultado das medias</h1>
    <?php
    // 0 a 5 = reprovado
    // 5 a 7 = recuperação
    // maior que 7 = aprovado
        $n1 = $_GET["campo_nota1"];
        $n2 = $_GET["campo_nota2"];

        $media = ($n1 + $n2)/2;

        echo "De acordo com as suas notas $n1 e $n2, sua média fica $media";

        if ($media <= 5) {
            echo "<br>REPROVADO COM MÉDIA DE $media";
        }elseif ($media >= 5 && $media < 7) {
            echo "<br>RECUPERAÇÃO COM MÉDIA DE $media";
        }else{
            echo "<br>APROVADO COM MÉDIA DE $media";
        }
    ?>
    <br>
    <a href="index.html">VOLTAR</a>
</body>
</html>