<?php 
    session_start();

    // $usuario = trim($_POST["usuario"]);

    $usuario = htmlspecialchars(trim($_POST["usuario"]), ENT_QUOTES, 'UTF-8'); // evita caracteres especiais
    
    $senha = trim($_POST["senha"]);

    if(($usuario === "admin") && ($senha === "123")){
        $_SESSION["logado"] = true;
        $_SESSION["nome"] = "João";
        $_SESSION["erro"] = 0;
        header("Location:perfil.php");
    } 
    else {
        $_SESSION["logado"] = false;
        $_SESSION["erro"] = 1;
        header("Location:form.php");
    }

?>