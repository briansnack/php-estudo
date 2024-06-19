<!-- Medidas Aritméticas -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medidas Aritméticas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
       $num1 = $_GET['num1'] ?? 0;
       $num2 = $_GET['num2'] ?? 0;

       $peso1 = $_GET['peso1'] ?? 0;
       $peso2 = $_GET['peso2'] ?? 0;
    ?>  
    <main>
        <h1>Informe um número</h1>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
            <label for="num1">1º valor</label>
            <input type="number" name="num1" id="num1" value="<?=$num1?>">

            <label for="peso1">1º peso</label>
            <input type="number" name="peso1" id="peso1" value="<?=$peso1?>">

            <label for="num2">2º valor</label>
            <input type="number" name="num2" id="num2" value="<?=$num2?>">

            <label for="peso2">2º peso</label>
            <input type="number" name="peso2" id="peso2" value="<?=$peso2?>">

            <input type="submit" value="Calcular Médias">
        </form>
    </main>

    <section id="resultado">
        <h2>Cálculo das Médias</h2>
        <?php
            $media = ($num1 + $num2) / 2;
            $mediaP = (($num1 * $peso1) + ($num2 * $peso2)) / ($peso1 + $peso2);
            

            $media = number_format($media, 2, ',','.');
            $mediaP = number_format($mediaP, 2, ',','.');
            
            echo "<p>Analisando os valores $num1 e $num2: </p>";
            echo "<li>A <strong>Média Aritmética Simples</strong> entre os valores é igual a $media.</li>";
            echo "<li>A <strong>Média Aritmética Ponderada</strong> com pesos $peso1 e $peso2 é igual a $mediaP.</li>";
        ?>
    </section>
</body>
</html>