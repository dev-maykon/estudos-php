<?php 

    session_start();
    $logado = isset($_SESSION["logado"]) ?? false;
    $manterLogado = isset($_COOKIE["manterLogado"]) ?? 0;
    if(isset($_COOKIE["nome"])){
        $nome = $_COOKIE["nome"];
    }
    else{
        $nome = $_SESSION["nome"];
    }

    if(!$_SESSION["logado"] && !$_COOKIE["manterLogado"]){
        $_SESSION["erro"] = 2;
        header("Location:index.php");
    }
    else {
      
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php echo $_SESSION["nome"]; ?>
    <a href="logout.php"> <Button> Sair: </Button> </a>

</body>
</html>

<?php 
    }
?>