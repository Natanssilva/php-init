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



//MATRIZES


