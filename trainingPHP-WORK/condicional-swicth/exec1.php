<?php


//Condicional Switch

//switch trata um parametro q será avaliado, e cada caso verifica se é verdadeiro/válido
// caso seja valido o codigo para no break e nao executa o resto

//default é igual um else, caso nenhum case seja valido,ele executará o default
//DEFAULT NAO É OBRIGATORIO

//switch PODE ser usado com diferentes tipos de dados por exemplo, STRING, BOOLEAN e NUMERICOS

$estado_encomenda = 'extraviad';

// switch ($estado_encomenda) {
//     case 'em processamento':
//         echo 'a encomenda está em processamento';
//         break;
//     case 'anulada':
//         echo 'encomenda anulada';
//         break;
//     case 'enviada':
//         echo 'encomenda foi enviada';
//         break;
    
//     default:
//         echo 'estado da encomenda é indefinido';
//         break;
// }


//expressão condicional switch

//Podemos agrupar vários casos


switch ($estado_encomenda) {
    case 'em processamento':
    case 'enviado':
        echo 'encomenda em processamento e enviado';
        break;
    case 'anulada':
    case 'cancelada':
    case 'extraviada':
        echo 'encomenda foi cancelada';
        break;
    default:
        echo 'essa encomenda nao existe';
        break;


}

