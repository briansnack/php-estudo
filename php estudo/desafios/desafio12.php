<!-- Calculadora de Tempo -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Tempo</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
       $segundos = isset($_GET['segundos']) && is_numeric($_GET['segundos']) ? (float)$_GET['segundos'] : 0;
    ?>  
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
            <label for="segundos">Qual é o total de segundos?</label>
            <input type="number" name="segundos" id="segundos" value="<?=$segundos?>">
            
            <input type="submit" value="Calcular">
        </form>
    </main>

    <section id="resultado">
        <h2>Totalizando tudo</h2>
        <?php
           if ($segundos > 0) {
            $total = $segundos;
            $sobra = $segundos;

            $semana = (int)($sobra / 604800);
            $sobra = $sobra % 604800;

            $dia = (int)($sobra / 86400);
            $sobra = $sobra % 86400;

            $hora = (int)($sobra / 3600);
            $sobra = $sobra % 3600;
            
            $minuto = (int)($sobra / 60);
            $sobra = $sobra % 60;

            $segundos = $sobra;

            $total = number_format($total, 2, ',', '.');

            echo "<p>Analisando o valor que você digitou, <strong>$total</strong> equivalem a um total de: </p>";

            echo "<li>$semana semanas</li>";
            echo "<li>$dia dias</li>";
            echo "<li>$hora horas</li>";
            echo "<li>$minuto minutos</li>";
            echo "<li>$segundos segundos</li>";
        } else {
            echo "<p>Por favor, insira um valor válido.</p>";
        }      
        ?>
    </section>
</body>
</html>