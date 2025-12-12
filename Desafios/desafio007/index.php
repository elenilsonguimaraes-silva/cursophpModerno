<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Salário</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
        <h1>Informe seu salário</h1>
        <?php 
            $salario = $_GET['salario'] ?? 0;
            $minimo = 1_380.60;
        ?>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="salario">Salário(R$)</label>
            <input type="number" name="salario" id="idsalario" min="1" step="0.01" value="<?=$minimo?>">
            <labe>Considerando um salário de R$ <strong><?=number_format($minimo, 2, ",", ".")?></strong></labe>
            <input type="submit" value="Calcular">
        </form>        
    </main>
    <section>
        <?php 
            $qtdeSalario = intdiv($salario, 1380);
            $restoSalario = $salario % 1380;
        ?>
        <h2>Resultado Final</h2>
        <p>Quem recebe um salário de R$<?=number_format($salario, 2 , ",", ".")?> ganha <strong><?=$qtdeSalario?> salários minímos</strong> + R$ <?=number_format($restoSalario, 2, ",", ".")?></p>
    </section>
    
</body>
</html>