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

