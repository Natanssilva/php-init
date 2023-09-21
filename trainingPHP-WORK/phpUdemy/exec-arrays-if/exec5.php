<?php

    $lojas = [
        "lisboa" => "lisboa@gmail.com",
        "canada" => "canada@gmail.com",
        "brasil" => "brasil@gmail.com"    
    ];

    $cidade = "teste";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>cidades</h1>
    <?php if (key_exists($cidade,$lojas)) { ?>
        <h3> <?php echo ($cidade) ?></h3>
        <p><?php echo ($lojas[$cidade]) ?></p>
   <?php }else{ ?>
        <p>Nao existe essa cidade</p>
   <?php } ?>
</body>
</html>