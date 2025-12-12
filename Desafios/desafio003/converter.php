<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <?php 
        echo"<h1>Conversor de Moedas</h1>";
        $moeda = doubleval($_REQUEST["valor"] ?? 0);
        $cotacao = 5.22;
        $conversao = $moeda / $cotacao;
 
        //Mostrar o resultado
        //echo "Seus R\$ ".number_format($moeda, 2, ",", ".")." equivalem a U\$".number_format($moeda, 2, ",", ".");

        //Formatação de moedas com internacionalização!
        //Biblioteca intl (Internacionalização PHP)

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);          
        echo "<p> Seus ".numfmt_format_currency($padrao, $moeda, "BRL")." equivalem <strong>".  numfmt_format_currency($padrao, $conversao, "USD")."</strong><p> ";
        echo "<p><strong>Cotação fixa de R$5,22</strong> informada diretamente no código</p>";
        
    ?>
    <button onclick='javascript:history.go(-1)'>&#x2B05Voltar</button>
    </main>
</body>
</html>
