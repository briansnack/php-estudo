<!-- Salário Mínimo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário Mínimo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
        $salario = $_GET['salario'] ?? 0;
        $salarioMin = 1412;
    ?>
    <main>
        <h1>Somador de valores</h1>
        <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
            <label for="salario">Salário (R$)</label>
            <input type="number" name="salario" id="salario" value="<?=$salario?>">

            <p>Considerando o salário mínimo de <strong>R$1.412,00</strong></p>

            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado Final</h2>
        <?php 
            $tot = intdiv($salario, $salarioMin);
            $dif = $salario % $salarioMin;

            echo "<p>Quem recebe um salário de R$$salario ganha <strong> $tot salários mínimos </strong> + R$$dif</p>";
        ?>
    </section>

</body>
</html>