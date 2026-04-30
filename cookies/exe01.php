<?php 
    setcookie("usuario", "Jack", time() + 3600, "/"); // "/" para manter  o cookie em todos os sites
    
    $usuario = $_COOKIE["usuario"] ?? "Cookie não encontrado!";
    
    echo $usuario;

?>