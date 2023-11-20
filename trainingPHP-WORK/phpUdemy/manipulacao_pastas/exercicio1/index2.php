<?php

//uma das formas mais diretas de criar e escrever informações num arquivo é a função

file_put_contents(
'fileTeste.txt', 'conteudo do script'
);

//se o arquivo existe, ele é esmagagado e criado novamente

//caso pretenda adicionar informações a um arquivo existente

file_put_contents('fileTeste.txt',time() . PHP_EOL, FILE_APPEND);
echo 'terminado';