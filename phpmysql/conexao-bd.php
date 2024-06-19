<?php 
$servidor = 'localhost';
$usuario = 'root';
$senha - 1234;
$bancoDados = 'curso_php';

$conexao = mysqli_connect($servidor, $usuario, $senha, $bancoDados);

if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
} else{
    echo "Conexão realizada com sucesso!";
}

?>