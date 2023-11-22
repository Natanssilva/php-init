<?php

//COPIAR, MOVER, RENOMEAR E ELIMINAR ARQUIVOS


//COPIAR UM ARQUIVO
copy(__DIR__ . '/origem/teste.txt', __DIR__ . '/destino/new_teste.txt');


//podemos copiar o mesmo nome do arquivo tb

//SE O ARQUIVO EXISTIR ELE SERÁ ESMAGADO


//PARA MOVER UM ARQUIVO(a copia duplicada), usa a função rename

//  rename(__DIR__ . '/novo.txt', __DIR__ . '/destino/novo.txt');

//essa função serve pra renomear o arquivo desde q seja mantido a path ou o caminho

rename(__DIR__ . '/novo.txt', __DIR__ . '/novoNome.txt');

//para excluir um arquivo

unlink('novoNome.txt');