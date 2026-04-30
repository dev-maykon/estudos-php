<!-- Login -->

<?php 
    setcookie("usuario", "Alguém", time() + 3600, "/");
    
    $usuario = $_COOKIE["usuario"] ?? "Visitante";
    
    echo "Olá" . htmlspecialchars( $usuario, ENT_QUOTES, "UTF-8");
?>

