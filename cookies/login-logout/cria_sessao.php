<?php 

session_start();

$_SESSION["nome"] = "ana";

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <h1> <?php  echo $_SESSION["nome"]; ?> </h1>
    
    
</body>
</html>