<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Maioridade</h1>
        <?php
            $idade = date("Y") - $_GET["campo_nascimento"];
    /*
            if ($idade >= 18) {
                echo "Pode dirigir e votar";
            }else if($idade >= 16 && $idade < 18){
                echo " seu voto é opcional e dirigir tambem"; 
            } 
            else{
                echo "Não Pode dirigir nem votar";
            }
            */

            if($idade < 16){
                echo "nao vota";
            }elseif(($idade >= 16 && $idade < 18 ) || ($idade > 65)){
                echo "voto opcional";
            }else{
                echo "voto obrigatorio";
            }
           
        ?>
</body>
</html>