<?php 

session_start();
$erro = $_SESSION["erro"] ?? 0;

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
</head>
<body>

<form action="valida.php" method="post">

    <div>
    <label>Usuario </label>
    <input type="text" name="usuario">
    </div>

    <div>
        <label>Senha:</label>
        <input type="password" name="senha">
    </div>

    <div> 
        <input type="submit" name="enviar">
     </div>

     <div>
        <?php 
            if($erro == 1){
                echo "usuário e/ou senha incorretos!";
            } else {
                if($erro == 2){
                    echo "Efetue o Login!";
                }
            }
        ?>
     </div>


</form>
    
</body>
</html>