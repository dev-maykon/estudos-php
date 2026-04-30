<?php

$senha = "Senha123";

function temTamanhoMinimo($senha){
    return strlen($senha) >= 8;
    }

function temNumero($senha){
    for($i = 0; $i < strlen($senha); $i++){
        if(is_numeric($senha[$i])){
            return true;
        } 
    }
    return false;
    };

    function temMaiuscula($senha){
    for($i = 0; $i < ctype_upper($senha); $i++){
        if(temMaiuscula($senha[$i])){
            return true;
        } 
    }
    return false;
    }

    function senhaValida($senha)
{
    if (temTamanhoMinimo($senha) && temNumero($senha) && temMaiuscula($senha)) {
        echo "Senha válida";
    } else {
        echo "Senha Incorreta.";
    }
}
 
senhaValida($senha);
 
// jeito simples
// if(senhaValida($senha)){
//     echo "Senha válida";
// } else {
//     echo "Senha Incorreta.";
// }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>