<?php  
$new_paises = ['portugal', 'brasil', 'tailandia', 'cuba', 'inglaterra'];

sort($new_paises);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  foreach ($new_paises as  $value) { ?>
        <ul>
            <li><?php echo ($value) ?></li>
        </ul>
    <?php } ?>
</body>
</html>