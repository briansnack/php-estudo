<?php 
// Conexão com banco de dados
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'sistema_login';

$connect = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_error()){
    echo "Falha na conexão: " . mysqli_connect_error($connect);
}

?>