<?php 

// Forma 1 de logout

session_start();

   $_SESSION["logado"] = false;
    $_SESSION["nome"] = "";
    $_SESSION["erro"] = 0;

    session_destroy();
    // echo "Sessão encerrada!";

    header("Location:form.php");

?>