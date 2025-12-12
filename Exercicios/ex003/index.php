<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exemplos de manipulação de Strings\!</title>
</head>
<body>
    <?php 
    //const CANAL = "Curso em Vídeo \u{1F499}";
    //echo "Eu adoro o ".CANAL;
    //echo "Estamos no ano de ".date('Y');

    /*$nom ="Rodrigo";
    $snom = "Nogueira";
    echo "$nom \"Minotauro\" $snom";
    */

    #$nome ="Gustavo";
    #$sobrenome = "Guanabara";
    #$apelido = "Gafanhoto";
    #echo " $nome  \"$apelido\"  $sobrenome ";

    $curso = "PHP";
    $ano = date('Y');
    echo <<< FRASE
        Estou estudando 
                $curso em $ano
    FRASE;    

    $canal = "Curso em Video";
    $ano = date('Y');
    echo <<< TESTE
        Olá galera do $canal!
                    Tudo bem com vocês?
                Como esta sendo esse ano de $ano?
            Abraços! \u{1F596};
        TESTE;
    ?>


</body>
</html>