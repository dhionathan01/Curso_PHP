<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concatenação</title>
</head>
<body>
    
    <?php
        $nome = 'Dhionathan';
        $cor = 'Azul';
        $idade = 20;
        $atividade_preferida = 'assistir séries';

        //Operador de concatenação é o ponto " . "

        echo 'Olá ' . $nome .', vi que sua cor preferida é '.$cor.', estou vendo que você possui '.$idade.'  anos e que gosta de '.$atividade_preferida;
        echo '<br>';
        // Não é necessário operador de concatenação se utilizar aspas duplas OBS: Consome mais processamento
        echo "Olá $nome, vi que sua cor preferida é $cor, estou vendo que você possui $idade anos e que gosta de $atividade_preferida";
    ?>

</body>
</html>