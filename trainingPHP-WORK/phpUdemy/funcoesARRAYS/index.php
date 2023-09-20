<?php
    //funções ASSOCIADAS A  arrays
    //array é um tipo de dado muito util pra php principalmente pela integração com banco de dados

    $nomes = [
        'natan', 'rubia','irineuy', 'daniel'
    ];

    // como saber se a variavel é um array?

    $resultado = is_array($nomes);

    //echo $resultado;

// como saber quantos elementos tem um array?

$resultado = count($nomes);
echo $resultado;

// Adicionar valores no final do array
array_push($nomes,'adicionando no final');


// Adicionar valores no inicio do array
array_unshift($nomes,'adicionando no inicio');

//retirar um valor do final do array

array_pop($nomes);

//retirar um valor do inicio do array

array_shift($nomes);

//eliminar um determinado elemento pelo indice
unset($nomes[0]); //remove o primeiro elemento do array