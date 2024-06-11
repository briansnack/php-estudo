<!-- Reajustando Preços -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustando Preços</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php 
       $preco = isset($_GET['preco']) && is_numeric($_GET['preco']) ? (float)$_GET['preco'] : 0;
       $reajuste = isset($_GET['reajuste']) && is_numeric($_GET['reajuste']) ? (float)$_GET['reajuste'] : 0;
    ?>  
    <main>
        <h1>Reajustador de Preços</h1>
        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="get">
            <label for="preco">Preço do Produto (R$)?</label>
            <input type="number" name="preco" id="preco" value="<?=$preco?>">

            <label for="reajuste">Qual será o percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
            <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="1" oninput="mudaValor()" value="<?=$reajuste?>">

            <input type="submit" value="Reajustar">
        </form>
    </main>

    <section id="resultado">
        <h2>Resultado do reajuste</h2>
        <?php
           if ($preco > 0 && $reajuste != 0) {
            $precoReajustado = $preco + ($preco * ($reajuste / 100));
            $precoFormatted = number_format($preco, 2, ',', '.');
            $precoReajustadoFormatted = number_format($precoReajustado, 2, ',', '.');

            echo "<p>O produto que custava R$$precoFormatted, com <strong>$reajuste% de aumento</strong> vai passar a custar <strong>R$$precoReajustadoFormatted</strong> a partir de agora.</p>";       
        } else {
            echo "<p>Por favor, insira um valor válido para o preço e o percentual de reajuste.</p>";
        }      
        ?>
    </section>
        <script>
            // Declarações automáticas 
            mudaValor();
            function mudaValor(){
                p.innerText = reajuste.value;
            }
        </script>
</body>
</html>