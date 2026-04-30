<?php
 
session_start();
 
if(isset($_GET['tema'])){
    $_SESSION['padrao'] = $_GET['tema'];
} else {
    $_SESSION['padrao'] = 'claro';
}
 
?>
 
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
 
        .claro{
            background: #fafafa;
            color: black;
        }
 
        .escuro{
            background: black;
            color: #fafafa;
        }
 
    </style>
</head>
<body class=" <?php echo $_SESSION['padrao']; ?>">
 
<form action="" method="get">
 
<input type="submit" name="tema" value="claro">
<input type="submit" name="tema" value="escuro">
 
</form>
 
<?php
echo $_SESSION['padrao'];
?>
 
 
   
</body>
</html>
 