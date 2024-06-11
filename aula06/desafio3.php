<!-- Conversor de Moedas -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor moedas v1.0</h1>
        <?php 
            $reais = $_REQUEST["reais"] ?? "carteira vazia";
            $dolar = 5.29;
            $dolares = $reais / $dolar;

            $dolar = number_format($dolar, 2, ',','.');
            $dolares= number_format($dolares, 2, ',','.');
            
            echo "Seus R$ $reais equivalem a <strong>US$ $dolares</strong>";
            echo "<br><br>";
            echo "<strong>Cotação fixa de R$ $dolar</strong> informada diretamente no código";
        ?> 
       <a href="javascript:history.go(-1)">
            <button>Voltar</button>
        </a>

</body>
</html>
