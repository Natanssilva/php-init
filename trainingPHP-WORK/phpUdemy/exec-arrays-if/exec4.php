<?php

$nome = "ana";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if ($nome == "natan") { ?>
        <p>O nome é Natan</p>
    <?php }elseif ($nome == "ana") { ?>
        <p>O nome é ana</p>
    <?php }else{ ?>
        <p>O nome é jean</p>
   <?php } ?>
    
    
    
</body>
</html>