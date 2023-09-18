<?php

function showArray($array)
{
    echo "<pre>";

    print_r($array);

    echo "</pre>";
}

//arrays multidimensionais (matriz)

$matriz =[
    'lisboa' => [
        'telefone' => '1732',
        'email' => 'lisboa@gmail.com'
    ],
    'porto' => [
        'telefone' => '2295',
        'email' => 'porto@gmail.com'
    ],
    'sporting' =>[
        'telefone' => '8383',
        'email' => 'sporting@gmail.com'
    ],
    'brasil' =>[
        'telefone' => '5555',
        'email' => 'brasil@gmail.com'
    ]
];

ShowArray($matriz);

echo "o primeiro indice é " . array_key_first($matriz);  //array_key_first função que serve pra ver o primeiro indice de arrays multidimensionais e ajuda quando são associativos

//apresentar um valor especifico do array

echo "<br>" . $matriz['porto']['email'];