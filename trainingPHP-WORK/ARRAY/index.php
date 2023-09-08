<?php

$valores = array("nome" => "natan",
                 "idade" => 20,
                 "altura" => 1.7
);

$valores ["saude"] = "boa"; // adicionando um array com nome do indice "saude" e valor boa que vai ficar no FINAL do array

foreach ($valores as $campo => $conteudo) {  //O construtor foreach fornece uma maneira fácil de iterar sobre arrays. O foreach funciona somente em arrays e objetos
    echo "<br>No campo $campo possui $conteudo"; //para cada $valores as $campo associado ao conteudo
}
print_r($valores);


?>

<pre>

<?php
//MATRIZES == vetores de vetores ou seja VETORES DENTRO DE VETORES

 $s = array(array(2,3),  //declarando q na posição 0 do array vai ter outro array com 2,3
            array(4,8),  //parecido com 0 [][]
                         //             1 [][]
                         //             2 [][]
            array(1,7)   //                0 1

 );

 print_r($s);

    $s[2][0] = $s[1][1]; //o 2 significa linha 2 ou seja o indice 3, posição 0 seria o valor 1 
                        //vai deixar d ser 1 pra ser 8 ja q taq como linha 1 coluna 1
                        //[linha][posição]

     print_r($s);
     ?>
</pre>

