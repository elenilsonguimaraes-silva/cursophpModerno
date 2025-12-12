<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Raízes</title>
    <link rel="stylesheet" href="style.css">    
</head>
<body>
    <main>
        <h1>Calculando Raízes</h1>
        <h2>Informe um número</h2>
        <?php 
            $numero = $_POST['numero'] ?? 1;
        ?>
        <form  action="<?=$_SERVER['PHP_SELF']?>" method="post" >
            <label for="numero">Número</label>
            <input type="number" name="numero" id="idnumero"   value="<?=$numero?>">
            <input type="submit" value="Calcular Raízes">
        </form>
    </main>
    <section>
        <?php 
            $raizQuadrada = sqrt($numero);
            $raizCubica = $numero ** (1/3);
        ?>
        <h2>Resultado Final</h2>
        <p>Analizando o número <strong><?=$numero?></strong> temos:
        <ul>
            <li>A sua raiz quadrada é <strong><?=number_format($raizQuadrada, 3, ",", ".")?></strong></li>
            <li>A sua raiz cúbica é <strong><?=number_format($raizCubica, 3, ",", ".")?></strong</li>
        </ul>
         
    </section>
    
</body>
</html>