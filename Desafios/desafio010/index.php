<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculando Idade</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <main>
        <?php 
        $atual = date('Y');
        $anoNascimento = $_GET['anoNascimento'] ?? '2024';
        $anoDeCalculo =$_GET['anoDeCalculo'] ?? $atual;
        ?>
        <h1>CAlculando a sua Idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="anoNascimento">Em que ano você nasceu?</label>
            <input type="number" name="anoNascimento" id="anoNascimento" required value="<?=$anoNascimento?>" min="1900" max="<?=date('Y') - 1?>">
            <label for="anoDeCalculo">Quer saber sua idade em que ano?(atualemente estamos em <strong><?=$atual?></strong>) </label>
            <input type="number" name="anoDeCalculo" id="anoDeCalculo" required value="<?=$anoDeCalculo?>" min="1900">
            <input type="submit" value="Qual será minha idade">
        </form>
        <section>
            <h2>Resultado</h2>
            <?php 
                $idade = $anoDeCalculo - $anoNascimento;
                echo"Quem nasceu em $anoNascimento vai ter <strong>$idade anos</strong>  em $anoDeCalculo";
            ?>

        </section>
    </main>
</body>
</html>