<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Soma de valores inteiros</h1>

    <?php
    /*
        function addic($num1,$num2){
            $soma = $num1 + $num2;
            echo "O resultado da soma é $soma";
        };

        addic(10,15);   

       function adicao ($valor1, $valor2){
            $soma = $valor1 + $valor2;
            return $soma; 
            //outra maneira de fazer

            return $valor1 + $valor2;
        };

        $valorX = 15;
        $valorY = 10;

        $resultado = adicao($valorX, $valorY);
        echo "o resultado da soma é  $resultado"; */

        function soma(){
            $valores = func_get_args(); //retorna um array com todos os argumentos dentro
            $total = func_num_args(); //retorna a quantidade de argumentos passados pela função, no caso do script aqui, ele retornaria 4
            $soma = 0;

            for ($contador=0; $contador < $total ; $contador++) { 
                $soma += $valores[$contador];
            }
            return $soma;

        }

        echo "a soma dos valores é " .  soma(3,4,2,10);

    ?>
</body>
</html>