<!-- Conversor de Moedas 2 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor Moedas 2</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor moedas v2.0</h1>
        <?php 
            // PEGAR COTAÇÃO ATUALIZADA NO DIA DE HOJE
            $inicio = date("m-d-Y", strtotime("-7 days"));
            $fim = date("m-d-Y");

            $url = 'https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''. $inicio . '\'&@dataFinalCotacao=\''. $fim . '\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra,dataHoraCotacao';
            
            $dados = json_decode(file_get_contents($url), true);

            $cotacao = $dados["value"][0]["cotacaoCompra"]; 
    
            $reais = $_REQUEST["reais"] ?? "carteira vazia";
            $dolares = $reais / $cotacao;

            $cotacao = number_format($cotacao, 2, ',','.');
            $dolares = number_format($dolares, 2, ',','.');
            
            echo "Seus R$ $reais equivalem a <strong>US$ $dolares</strong>";
            echo "<br><br>";
            echo "Cotação R$ $cotacao do dia de acordo com dados do <strong>Banco Central</>";
        ?> 
       <a href="javascript:history.go(-1)">
            <button>Voltar</button>
        </a>

</body>
</html>
