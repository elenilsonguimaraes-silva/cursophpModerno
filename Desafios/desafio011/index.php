<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reajustador de Preços</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <main>
        <?php 
            $precoProduto = $_GET['precoProduto'] ?? 0; 
            $porCento = $_GET['reaj'] ?? 0;
        ?>
        <h1>Reajustador de Preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="precoProduto">Preço do Produto R$</label>
            <input type="number" name="precoProduto" id="precoProduto" value="<?=$precoProduto?>" required min="0.10" step="0.01">

            <label for="reaj">Qual será o percentual de reajuste(<strong><span id="p" >?</span>%</strong>)</label>
            <input type="range" name="reaj" id="reaj" min="0" max="100" step="1" value="<?=$porCento?>"   oninput="mudaValor()">           
            <input type="submit" value="Reajustar">
        </form>
    </main>
    <?php 
            $aumento = $precoProduto * ($porCento / 100);
            $novoPreco = $precoProduto + $aumento;

    ?>
    <section>
        
        <h2>Resultado do Reajuste</h2>
        <p>o produto que custava R$<?=number_format($precoProduto, 2, ',','.')?>, com <strong><?=$porCento?>% de aumento (R$<?=number_format($aumento, 2,',', '.')?>)</strong> vai passar a custar <strong>R$<?=number_format($novoPreco, 2,',','.')?></strong> a partir de agora.</p>
    </section>
    /
    <script>
        //Declarações Automáticas
        mudaValor();
        function mudaValor(){
            p.innerText = reaj.value;
        }
    </script>

    
</body>
</html>