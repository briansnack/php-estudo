<?php 
// Encerrar a sessão sem precisar fechar o navegador
session_start();
session_unset();
session_destroy();
?>