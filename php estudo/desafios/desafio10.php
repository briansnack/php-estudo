<!-- Cálculo de idade -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de idade</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
       $anoNascimento= $_GET['anoNascimento'] ?? 0;
       $anoAtual = date("Y");
       $anoIdade = $_GET['anoIdade'] ?? $anoAtual;
    ?>  
    <main>
        <h1>Calculando a sua idade</h1>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNascimento" id="anoNascimento" value="<?=$anoNascimento?>">

            <label for="anoIdade">Quer saber sua idade em que ano? (atualmente estamos em <strong><?= $anoAtual ?></strong>)</label>
            <input type="number" name="anoIdade" id="anoIdade" value="<?=$anoIdade?>">

            <input type="submit" value="Qual será minha idade?">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado</h2>
        <?php
            $idade = $anoIdade - $anoNascimento;
           
            echo "<p>Quem nasceu em $anoNascimento vai ter <strong>$idade anos</strong> em $anoIdade!</p>";       
        ?>
    </section>
</body>
</html>