<?php

/*
    MANIPULAÇÃO DE FILESYSTEM COM PHP

    manipulação de pastas e ficheiros de um servidor web
    como: criar e remover pastas e ficheiros, efetuar leitura, obter informações

*/

//listagem de ficheiros
echo '<pre>';
echo __DIR__ . '<br>';    //mostra o diretorio que o script ta sendo rodado no servidor
$files = scandir(__DIR__); //função pra verificar a pasta que esta em parametro, no caso o diretorio, coloca tudo em um array associativo
print_r($files);


// . é a pasta atual e .. é a pasta anterior
echo '<hr>';
$files2 = scandir('../');
print_r($files2);


//verificar se É UM ARQUIVO ---> is_file

echo '<hr>';

foreach ($files as  $itens) {
    echo '<br>';
    if (is_file($itens)) {
        echo $itens . "<br>";   //vai retornar index.php, unico arquivo(file) encontrado
    }
}



//verificar se é uma pasta ---> is_dir

echo '<hr>';
echo '<br>';


//podemos criar e remover pastas

// mkdir(__DIR__ . '/pasta_teste'); //se existir vai aparecer um aviso, se nao existir vai criar a pasta



if (!file_exists(__DIR__ . 'pasta/teste')) { 
    mkdir(__DIR__ . '/pasta_teste');
}

//se não existe uma pasta com esse endereço, crie a pasta nomeada



//REMOVER PASTA

// rmdir(__DIR__ . '/pasta_teste');

//IMPORTANTE: só funciona se a pasta estiver vazia, se tiver arquivos n vai funcionar


//É POSSIVEL CRIAR PASTAS DE FORMA RECURSIVA

//como nao vamos usar o segundo argumento, usamos named arguments
//para definir o valor do terceiro parametro

mkdir(__DIR__ . '/aaa/bbb', recursive:true);

//vai criar a pasta aaa com a pasta bbb dentro

