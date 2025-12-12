<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor de Moedas v2.0</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <main>
    <pre>
    <?php  
        echo"<h1>Conversor de Moedas</h1>";
        $inicio = date("m-d-Y", strtotime("-7 days"));
        $fim = date("m-d-Y");

        $url ='https://olinda.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata/CotacaoDolarPeriodo(dataInicial=@dataInicial,dataFinalCotacao=@dataFinalCotacao)?@dataInicial=\''.$inicio.'\'&@dataFinalCotacao=\''.$fim.'\'&$top=1&$orderby=dataHoraCotacao%20desc&$format=json&$select=cotacaoCompra';

        $dados = json_decode(file_get_contents($url), true);
        $cotacao = $dados["value"][0]["cotacaoCompra"];
        $moeda = doubleval($_REQUEST["valor"] ?? 0);
        $conversao = $moeda / $cotacao;
 
        //Mostrar o resultado
        //echo "Seus R\$ ".number_format($moeda, 2, ",", ".")." equivalem a U\$".number_format($moeda, 2, ",", ".");

        //Formatação de moedas com internacionalização!
        //Biblioteca intl (Internacionalização PHP)

        $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);          
        echo "<p> Seus ".numfmt_format_currency($padrao, $moeda, "BRL")." equivalem <strong>".  numfmt_format_currency($padrao, $conversao, "USD")."</strong><p> ";
        echo "<p><strong>Cotação fixa de ".numfmt_format_currency($padrao, $cotacao, "BRL")."</strong> informada diretamente no site do <a href='https://dadosabertos.bcb.gov.br/dataset/dolar-americano-usd-todos-os-boletins-diarios/resource/43a16981-5a4b-47d9-b7bd-4c0c4093f994'>BC</a></p>";
        
    ?>
    </pre>
    <button onclick='javascript:history.go(-1)'>&#x2B05Voltar</button>
    </main>
</body>
</html>
