<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos Php</title>
</head>
<body>
    <h1></h1>
    <?php 
        date_default_timezone_set("America/Sao_paulo");
        echo "Hoje é dia ".date("d/m/Y");
        echo nl2br(" e a hora atual é ".date("G:i:s")."\n Time Zone: ".date("T"));    
    ?>
</body>
</html>