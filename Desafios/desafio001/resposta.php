<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio PHP 01</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        
    </header>
    <main>
        <h1>Resultado Final</h1>
        <?php 
            $numero=$_GET["numero"] ?? 0;
            $antecessor = $numero - 1;
            $sucessor = $numero + 1;
            echo "<p>O número escolhido foi: <strong>$numero</strong></p>";    
            echo "<p>O seu <em>antecessor</em> é: <strong>$antecessor</strong></p>";  
            echo "<p>O seu <em>sucessor</em> é: <strong>$sucessor</strong></p>";               
        ?>
        <button onclick='javascript:history.go(-1)'>&#x2B05Voltar</button>
    </main>
    
</body>
</html>