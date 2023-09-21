<?php

$lista = ['natan','diogo', 'rubia','thiago', 'matheus'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista não ordenada</title>
</head>
<body>
    <?php foreach ($lista as $value) { ?>
        <ul>
            <li><?php echo ($value); ?></li>
    </ul>
    <?php } ?>
</body>
</html>