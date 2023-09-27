<?php
//mostrar a frase 10 vezes com uma opacidade que vai abaixando ate ser quase invisivel 
//atributo style

$frase = 'aqui vai aparecer com diferentes opacidades';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for ($i=10  ; $i >=0 ; $i--) { ?>
        <?php //echo $i ?>
            <p style="opacity: <?php echo $i / 10 ?> ;"> <?php echo $frase ?></p>
       <?php }?>
    
</body>
</html>