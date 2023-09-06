<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = "chocolate";
        $b = 5.0;

        printf("o valor do %s é %.2f", $a, $b); //função printF usaa %s avisando q vai declarar string e %.2f q ta declarando um float com 2 casas decimais

        // depoiis das virgulas mostram a variavel de acordo com a ordem

        //print_r()  mostra o valor de um array
        $x[0] = 4;
        $x[1] = 2;
        $x[2] = 6;

        echo "<br>";
        print_r($x); //muito util pra testes com array  / tbm tem as funções var_dump() e  var_export

        $nome = "natan porto";

        echo strlen($nome); // retorna 11 pq tem 11 caracteres na string, é igual o length com javascript

        //função trim() tira os espaços finais e iniciais da contagem do tamanho de uma string

        //função ltrim() tira os espaços inicias

        //função rtrim() tira os espaços finais

        //função str_world_count() 

        //função explode() uma versão mais nova da função anterior e cria um vetor onde cada string é uma posição (PEGA CADA PALAVRA E JOGA NUM INDICE[])

        //função str_split() vai pegar cada LETRA E JOGAR NUM INDICE[]

        //função implode()     implode("#", $x) Substitui o # PELO ESPAÇÕ ENTRE A STRING 
        //FUNÇÃO join() funciona da mesma forma da implode()

        //strtolower() Concatenado com o valor de uma variavel do tipo string ele vai mostrar tudo em minusculo

        //  strtoupper() Concatenado com o valor de uma variavel do tipo string ele vai mostrar tudo em MAIUSCULO

        //    ucfirst() coloca a primeira letra em MAISUCULO  

           //   ucwords() coloca a primeira Letra de cada palavra maiuscula

        // strrev( ) Mostra a string invertida

        /* strpos() mostra em qual posição está uma string por exemplo:
        
        $frase = " eu sou o mais lindo da terra";
        $pos = strpos($frase, "terra");

        echo "a posicao da string terra é $pos";   */

        //substr_count()  essa função é parecida com a anterior só q mostra quantas vezes a STRING apareceu

        //str_repeat() repete strings   por exemplo
        
        $txt = str_repeat("natan",5);  //"natan" é a string q vc ta criando / 5 é a quantidade de vezes
        print("olá $txt");

        // str_replace("matematica", "natan") troca uma string pela outra
        
        $n = [3,5,6,7];

        //outra maneira de declarar um array com varios valores
        // $n = array (3,5,6,7);

        echo "<br> $n[0]"; // mostra o valor no indice 0


        $c = range(5,20,5);  // range() cria um array que começa com 5 e termina em 20 e os outros dois valores serão contados de 5 em 5 ou seja
                            // [5,x,x,20] ========= [5,10,15,20]

        foreach ($c as $valorF) {  //PARA CADA elemento do vetor $c tratado como $valorF, ele vai colocar um elemento do vetor $c dentro do $valorF
            echo "<br> $valorF";
        }


        ?>
</body>
</html>