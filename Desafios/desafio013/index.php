<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Caixa Eletrônico</title>
    <link rel="stylesheet" href="style.css">  
</head>
<body>
    <?php 
        $valor = $_GET["valor"] ??  0;
    ?>
    <main>
        <h1>Caixa Eletrônico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="valor">Qual valor você deseja sacar?R$*</label>
            <input type="number" name="valor" id="valor" value="<?=$valor?>" step="5" required >
            <p style="font-size:  0.7em"><sup>*</sup>Notas disponíveis: R$100,00,  R$50,00, R$10,00, R$5,00</p>
            <input type="submit" value="Sacar">
        </form>
        <?php 
        $saque = $valor;
        $resto = $saque;
        //Saque de 100
        $tot100 = floor($resto / 100);
        $resto = $resto % 100;
        //Saque de 50
        $tot50 = floor($resto / 50);
        $resto = $resto % 50;
        //Saque de 10
        $tot10 = floor($resto / 10);
        $resto =$resto % 10;
        //Saque de 5
        $tot5 = floor($resto / 5);
        ?>
        <section>
            <p>O caixa eletrônico vai ter que entregar as seguintes notas:</p>
            <ul>
                </ul>
                <li><img src="../desafio013/img/100-reais.jpg" alt="100_reais"><?=$tot100?>x</li>
                <li><img src="../desafio013/img//50-reais.jpg" alt="50_reais"><?=$tot50?>x</li>
                <li><img src="../desafio013/img//10-reais.jpg" alt="10_reais"><?=$tot10?>x</li>
                <li><img src="../desafio013/img/5-reais.jpg" alt="5_reais"><?=$tot5?>x</li>                
        </section>
    </main>
    
</body>
</html>