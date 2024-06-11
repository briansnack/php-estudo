<!-- Sorteador de números -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sorteador de números</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Trabalhando com números aleatórios</h1>
        <?php 
            $num = rand(0, 100); // gera números aleatórios
 
            echo "Gerando um número aleatório entre 0 e 100...";
            echo "<br>";
            echo "O valor gerado foi <strong>$num</strong>";
        ?> 
     <form method="post">
        <button type="ubmit">Gerar Outro</button>
     </form>
</body>
</html>
