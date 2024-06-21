<?php 
// Encerrando a sessão
session_start();
session_unset();
session_destroy();

header('Location: pagina-login.php');
?>