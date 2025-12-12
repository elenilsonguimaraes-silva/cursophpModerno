<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Médias Aritméticas</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <main>
        <?php 
            $valor1 = $_GET['v1'] ?? '';
            $peso1 = $_GET['p1'] ?? '';
            $valor2 = $_GET['v2'] ?? '';
            $peso2 = $_GET['p2'] ?? '';

        ?>
        <h1>Médias Aritméticas</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="v1"><strong>1º Valor</strong></label>
            <input type="number"  name="v1" id="idv1" value="<?=$valor1?>" required>
            <label for="p1">1º Peso</label>
            <input type="number" name="p1" id="idp1" value="<?=$peso1?>" min="1" required>
            <label for="v2">2º Valor</label>
            <input type="number"  name="v2" id="idv2" value="<?=$valor2?>" required>
            <label for="p2">2º Peso</label>
            <input type="number" name="p2" id="idp2" value="<?=$peso2?>" min="1" required>
            <input type="submit" value="Calcular Médias">
        </form>
        <section>
            <?php 
            $mediaSimples = ($valor1 + $valor2) / 2;
            $mediaPonderada = (($valor1 * $peso1) + ($valor2 * $peso2)) / ($peso1 + $peso2)
            ?>
            <ul>
                <li>A <strong>Média Aritmética simples</strong> entre os valores <?=number_format($valor1, 2, ",", ".")?> e <?=number_format($valor2, 2, ",", ".")?> é igual a <?=number_format($mediaSimples, 2, ",", ".")?></li>
                <li>A <strong>Média Aritmética Ponderada</strong> com pesos <?=number_format($peso1, 2, ",", ".")?> e <?=number_format($peso2, 2, ",", ".")?>  é igual a  <?=number_format($mediaPonderada, 2, ",", ".")?></li>

            </ul>

        </section>
    </main>
    
</body>
</html>