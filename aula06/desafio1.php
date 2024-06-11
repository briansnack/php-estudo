<!-- Número sucessor e antecessor -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucessor e antecessor</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $num = $_REQUEST["numero"] ?? "sem número";
            $antecessor = $num - 1;
            $sucessor = $num + 1;

            echo "O número escolhido foi <strong>$num</strong><br>";
            echo "O seu <i>antecessor</i> é $antecessor<br>";
            echo "O seu <i>sucessor</i> é $sucessor";
        ?> 
       <a href="javascript:history.go(-1)">
            <button>Voltar</button>
        </a>

</body>
</html>
