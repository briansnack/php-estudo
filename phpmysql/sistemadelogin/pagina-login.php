<?php 
// Conexão com o BD
require_once 'db_connect.php';

// Iniciando a sessão
session_start();

// Botão enviar
if(isset($_POST['btn-entrar'])):

    $erros = array();
    $login = mysqli_escape_string($connect, $_POST['login']);
    $senha = mysqli_escape_string($connect, $_POST['senha']);

    if (empty($login) or empty($senha)) {

        $erros[] = "<li>O campo login/senha precisa ser preenchido</li>";
    } else{ 

        $sql = "SELECT login FROM usuarios WHERE login = '$login'";
        $resultado = mysqli_query($connect, $sql);

        if(mysqli_num_rows($resultado) > 0){
        
        $senha = md5($senha);
        $sql = "SELECT * FROM usuarios WHERE login = '$login' AND senha = '$senha'";
        $resultado = mysqli_query($connect, $sql);

            if(mysqli_num_rows($resultado) == 1){
                // mysqli_fetch_array Vai converter o resultado em um array para pdoer ser utilizado
                $dados = mysqli_fetch_array($resultado);
                // Fechar a consulta
                mysqli_close($connect);
                $_SESSION['logado'] = true;
                $_SESSION['id_usuario'] = $dados['id'];
                header('Location: home.php');
        } else {
            echo "<li>Usuário e senha não conferem</li>";
        }
        } else {
            $erros[] = "<li>Usuário inexistente</li>";
        }
    }
endif;
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
    <h1>Login</h1>
<main>
    
    <?php 
    if(!empty($erros)){
        foreach($erros as $erro){
            echo $erro;
        }
    }
    ?>

    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="login">Login:</label>
        <input type="text" name="login">

        <label for="senha">Senha:</label>
        <input type="password" name="senha">

        <button type="submit" name="btn-entrar">Entrar</button> 
    </form>
</main>
</body>
</html>