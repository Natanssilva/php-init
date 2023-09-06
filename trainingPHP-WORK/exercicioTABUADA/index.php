<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>exercicio tabuada</h1>

    <form action="index02.php" method="get"> <!--crio formularios -->
        <label for="value">escolha um valor:</label>
        <select name="valor_tabuada" id="">
            <?php //crio um php pra criar as opções do select dinamicamente
                $contador = 1;
                do { // ou seja esse laço de repetição cria options conforme o valor do contador de 1 a 10 
                    echo "<option value = '$contador'>$contador</option>";
                    $contador++;
                } while ($contador <= 10);
            ?>
        </select>
        <input type="submit" value="Calcular Tabuada">
    </form>

</body>
</html>