<!-- Raízes de um número -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raízes de um número</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
       $num = $_GET['num'] ?? 0;
    ?>  
    <main>
        <h1>Informe um número</h1>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
            <label for="num">Número</label>
            <input type="number" name="num" id="num" value="<?=$num?>">

            <input type="submit" value="Dividir">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado final</h2>
        <?php 
            $raizQ = sqrt($num);
            $raizC = $num ** (1/3);

            $raizQ = number_format($raizQ, 3, ',','.');
            $raizC = number_format($raizC, 3, ',','.');
            
            echo "<p>Analisando o <strong>número $num</strong>, temos: </p>";
            echo "<li>A sua raiz quadrada é <strong>$raizQ</strong></li>";
            echo "<li>A sua raiz cúbica é <strong>$raizC</strong></li>";
        ?>
    </section>
</body>
</html>