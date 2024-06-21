<?php 
// Conexão
require_once 'db_connect.php';

// Inciando sessão
session_start();

// Verificação para não conseguir entrar pela URL
if(!isset($_SESSION['logado'])){
    header('Location: pagina-login.php');
}

// Pegar os dados do usuário
$id = $_SESSION['id_usuario'];
$sql = "SELECT * FROM usuarios WHERE id = '$id'";
$resultado = mysqli_query($connect, $sql);
$dados = mysqli_fetch_array($resultado);
// Fechar a consulta
mysqli_close($connect);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <!-- <h1>Olá <?php // echo $_SESSION['id_usuario'];?></h1> -->
    <h1>Olá <?php echo $dados['nome'];?></h1>

    <a href="logout.php">Sair</a>
    </main>
</body>
</html>