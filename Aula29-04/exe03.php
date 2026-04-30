<?php 
function somar(int $a, int $b): int{
    $resul = $a + $b;
    //ou return $a + $b;
    return $resul;
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo somar(3.9,20);
    ?>
</body>
</html>