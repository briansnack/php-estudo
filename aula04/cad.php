<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Resultado do processamento</h1>
    </header>
    <main>
        <?php 
            // var_dump($_REQUEST); // $_REQUEST é a junção de $_GET, $_POST e $_COOKIES
        
            $nome = $_REQUEST["nome"] ?? "sem nome"; // se tiver nome vai funcionar normal, se nao tiver nome vai aparecer "sem
            $sobrenome = $_REQUEST["sobrenome"] ?? "desconhecido";  // se tiver sobrenome vai funcionar normal, se nao tiver sobrenome vai aparecer "desconhecido"
            echo "<p>É um prazer te conhecer, <strong>$nome $sobrenome</strong>!";
        ?>
        <p><a href="javascript:history.go(-1)">Voltar para a página anterior</a></p>
    </main>
</body>
</html>