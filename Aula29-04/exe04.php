<?php 
function maior_numero(int $a, int $b, int $c): int{
    if(($a > $b)&& ($a > $c)){
    $result = $a;
    return $a;
    }else if(($b > $a)&& ($b > $c)){
    $result = $b;
    return $b;
    } else{
        $result =$c;
        return $c;
    };

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
    echo maior_numero(3,20,30);
    ?>

</body>
</html>