<!-- ANALISANDO UM NÚMERO REAL -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analisando um número real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Conversor moedas v2.0</h1>
        <?php 
            $num = $_REQUEST["num"] ?? "sem números";

            $int = (int) $num;
            $fra = $num - $int;
            
            $num = number_format($num, 3, ",", ".");
            $int = number_format($int, 0, ",", ".");
            $fra = number_format($fra, 3, ",", ".");

            echo "<ul><li>A parte inteira do número é <strong>$int</strong></li>";
            echo "<li>A parte fracionária do número é <strong>$fra</strong></li></ul>";
            echo "<strong>$num</strong>";

        ?> 
       <a href="javascript:history.go(-1)">
            <button>Voltar</button>
        </a>
</body>
</html>