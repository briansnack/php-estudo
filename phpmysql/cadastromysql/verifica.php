<?php 
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$bancoDados = 'curso_php';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDados) or die(mysqli_error($conexao)) ;

mysqli_select_db($conexao, 'curso_php');

if (mysqli_connect_errno()) {
    echo "Problemas para conectar no banco. Verifique os dados!";
} else{
    echo "Conexão realizada com sucesso!";
}

$login = $_POST["login"];
$senha = $_POST["senha"];

$selecao = mysqli_query($conexao, "SELECT * FROM cadastro WHERE login = '$login' AND senha = '$senha' ");

$row = mysqli_fetch_array($selecao);

if ($row == "") {
    echo "<br>login e/ou senha inválidos";
    echo "<br>";
    echo "Volte e tente novamente";
} else {
    echo "<br>Bem vindo(a) <b>$login</b>";
}
?>