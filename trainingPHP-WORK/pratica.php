<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //teste variaveis

        //É CaseSensitive 

        $name = "natan";
        $num = 4;
        $numS = 58585.7;
        $logic = true; //retorna 1 
        $logic2 = false; // retorna string vazia

        echo "<h1> Olá $name </h1>";

        //echo $num . $numS; //concatenação no php é com '.'

        $number1 = 4;
        $number2 = 2;
        $somaResult = $number1 + $number2;

        //echo  $somaResult;

        // todos operadores aritmeticos : + - / * %

        // criando um script pra verificar se é par

        ?>

        <div>
            <?php
                $teste1 = 5;
                $teste2 = 8;
                $resultadoTeste = $teste1 + $teste2;

                //echo "<h2>O resultado é $resultadoTeste </h2";
                // echo " a soma vale" . ($teste1 + $teste2); // outra forma de mostrar na tela concatenando
                // echo "<br> a subtração vale" . ($teste2 - $teste1);
                // echo "<br> a multiplicação vale" . ($teste1 * $teste2);
                // echo "<br> a divisão vale" . ($teste1 / $teste2);
                // echo "<br> o resto (modulo) vale" . ($teste1 % $teste2);
            ?>
        </div>

        <!-- Como utilizar valores personalizados por usuarios na URL no PHP 
            ?a=2&b=3
        -->

        <div>
            <?php
                $teste1 = $_GET["a"];
                $teste2 =  $_GET["b"];

                echo "valores recebidos foram $teste1 e $teste2"; // 2 e 3

                //funções matematicas

                //função VALOR ABSOLUTO  (pega o valor e desconsidera o - e considera só o valor)
               echo "<br>O valor absoluto de $teste2 é ". abs($teste2);

               //função potenciação  - pow()  (cria uma potenciação)
               echo "<br>O valor da potencia entre $teste1 e $teste2: ($teste1<sup>$teste2</sup>) é " . pow($teste1,$teste2);

               //função raiz quadrada  - sqrt()  (cria uma raiz quadrada)
                echo "<br> a raiz quadrada de $teste1 é " . sqrt($teste1);
                
                 //função para arredondar  - round()  (arredonda valores) / tambem tem as funções ceil() que arredonda pra cima e floor() que arredonda pra baixo

                 echo "<br> o valor arredondado de $teste1 é " . round($teste1);

                 //função pega a primeira parte do num real  - intval() // pega a parte inteira do numero (3,37373) vai devolver 3

                 echo "<br> primeira parte de $teste1 é " . intval($teste1);

                 //função que formata numero monetario ou oq precise  - number_format() // formatação

                 echo "<br> O valor $teste1 em moeda é R$ " . number_format($teste1, 2); // PRIMEIRO: valor - SEGUNDO: número de casas decimais

                 //operadores de atribuição + concatenação

                 //Exemplo quando um valor vai receber ele mesmo mais outro valor

                 $teste1 = $teste1 + $teste2; 
                 //ou
                 $teste1 += $teste2; // isso tambem pode ser aplicado a varios tipos de calculos por exemplo:

                 $teste1 *= $teste2;

                 //caso vá receber ele mesmo + 1 ou -1 podemos escrever de duas formas:

                    $teste1 = $teste1 + 1;
                    //ou
                    $teste1 += 1;
                    //ou 
                    $teste1++;  //vale pra subtração tbm
            ?>
        </div>

        <div>
            <?php
                $valor = $_GET["a"]; //GET = pego o valor da URL

                echo "<br>o preço do produto é R$" . number_format($valor,2);
                $aumento = $valor + ($valor * 10 /100); // se colocar a mesma expressõa com - seria pra fazer um desconto

                echo "<br>o preço do produto com 10% de aumento é R$ " . number_format($aumento,2);
            ?>
        </div>

        <div>
            <?php  
                    //Operadores de Incremento  / Incremento =  funciona pra adicionar valores / Decremento = funciona pra diminuir

                    //Pré Incremento  $a = $a + 1  ou  ++$a
                    //Pós incremento  $a = $a + 1  ou $a++

                    //Pré Decremento  $a = $a - 1  ou  --$a
                    //Pós Decremento  $a = $a - 1  ou  $a--


                    //Exercicio 2
                        //mostrar o ano anterior ao ano atual

                        $ano_atual = $_GET["a"];
                        echo "O ano atual é $ano_atual";
                        echo "<br> o ano anterior foi " . --$ano_atual;

                        //variaveis referenciadas / por referencia

                        $a = 3; 
                        $b = $a;
                        $b += 5;
                        //echo $a;
                        //echo $b;

                        //$a = 3
                        //$b = 8

                        //por referencia 

                        $a = 3; 
                        $b = &$a;
                        $b += 5; // 8 
                        //echo $a;
                       // echo $b;

                            //estão ligados por referencia
                        //$a = 8
                        //$b = 8

                        echo "<br>o valor de A é $a"; //8
                        echo "<br>o valor de B é $b"; //8 

                        //variaveis de variaveis
                        $testeVAR = "youtube";
                        $$testeVAR = "codeAcademy";

                        echo "<br> $testeVAR"; 
                        echo "<br> $youtube"; 

                        //Operadores lógicos

                    // >  <  >=  <=  ==   ===

                    //operador ternário no php

                    //sintaxe: expressão? true : false;

                    //ex: $a > $b ? $a : $b;

                    //tem como usar operador ternário dentro de uma variavel

                    //$maior = $a > $b ? $a : $b;  Ou seja se A maior que B, maior recebe A se não recebe B

                    //$resultado = $media < 7 ? "reprovado" : "aprovado;
                    
                    //exercicio: pegar um valor do usuario A e outro B pela URL e o tipo de operação

                    $valor_a = $_GET["a"];
                    $valor_b = $_GET["b"];
                    //$operacao = $_GET["op"];


                    echo "<br>os valores são $valor_a e $valor_b";
                    $resultado_ternario = ($operacao == "s") ? $valor_a + $valor_b : $valor_a * $valor_b;

                    echo "<br> o resultado é $resultado_ternario";

                    //exercicio 4

                    $media = ($valor_a + $valor_b) / 2;

                    echo "<br>a media entre $valor_a e $valor_b é $media";
                    $situacao = ($media  > 7) ? "aprovado" : "reprovado";

                    //echo "<br>a sua situação é : $situacao";

                    echo "<br>a sua situação é " . (($media  > 7) ? "aprovado" : "reprovado");

                    //operadores lógicos

                    //AND - &&   Se uma condição nao for verdadeiro, toda expressão nao vai ser
                    //OR - ||    Se uma condição for verdadeira, por mais q a outra seja falsa, toda expressão vai ser verdadeira
                    //NO - !    Se for !, é sempre o contrario,logo falso

                    //exercicio eleição

                    $ano_nascimento = $_GET["ano"];

                    $idade = 2023 - $ano_nascimento;

                    echo "<br> Sua idade é $idade";

                    $situacao_voto = ($idade >= 18 && $idade < 65) ? "OBRIGATORIO" : "NAO OBRIGATORIO"; 
                    echo "<br> seu voto é $situacao_voto";


            ?>
        </div>

</body>
</html>

