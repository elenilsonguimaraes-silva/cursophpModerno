<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Analizador de Número Real</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <?php 
        echo"<h1>Analizador de Número Real</h1>";
        $numero = doubleval($_POST["numero"] ?? 0);
        $inteira = (int)$numero;
        $fracionaria = ($numero) - $inteira;
        echo"<p>Analizando o número <strong>".number_format($numero, 3, "," , ".")."</strong> informado pelo usuário</p>";
        echo "<ul><li>A parte inteira do número é: <strong>".number_format($inteira, 0, "," , ".")."</strong></li><br />";
        echo "<li>A parte inteira do número é: <strong>".number_format($fracionaria, 3, "," , ".")."</strong></li>";
        echo"</ul>";
        
    ?>
    <button onclick='javascript:history.go(-1)'>&#x2B05Voltar</button>
    </main>
</body>
</html>
