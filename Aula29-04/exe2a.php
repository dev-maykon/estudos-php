
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 function saudar($nome){
        echo "Olá, " . $nome;
    }
?>
<form action="" method="post">
    nome: <input type="text" name="nome">
    <input type="submit">
</form>    
<?php 
    if($_SERVER["REQUEST_METHOD"] === "POST" && !empty($_POST['nome'])){
        $nome = $_POST["nome"];
        saudar($nome);
    }
?>

</body>
</html>