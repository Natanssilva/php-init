<?php

if (isset($_GET['band'])) {
   $bandeira = $_GET['band'];

   if ($bandeira == 'brasil') {
        echo "
                <h1>Cidades: </h1><br>
                <p>Itajai e Barra Velha </p>
                <h1>Lingua nativa: </h1><br>
                <p>Portugues</p>";
   }

   elseif ($bandeira == 'spain') {
    echo "
        <h1>Cidades: </h1><br>
        <p>Madrid e Barcelona </p>
        <h1>Lingua nativa: </h1><br>
        <p>Espanhol</p>";
    }
    else{
        echo "
        <h1>Cidades: </h1><br>
        <p>Nova York e Los Angeles </p>
        <h1>Lingua nativa: </h1><br>
        <p>Ingles</p>";
    }
}


