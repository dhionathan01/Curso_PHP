<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Variáveis</title>
    
</head>
<body>
    <?php 

        //string
        $nome = 'Dhionathan Jobim';

        //int
        $idade = 20;

        //float
        $peso = 90.7;

        //boolean
        $fumante_sn = false;  // true = 1 ou false = vazio

    ?>

    <h1>Ficha Cadastral</h1>
    <br>
    <p>Nome: <?= $nome ?></p>   <!-- Exemplo de tag de imprenssão = <?php print($nome) ?> -->
    <p>Idade: <?= $idade ?></p>
    <p>Peso: <?= $peso ?></p>
    <p>Fumante: <?= $fumante_sn ?></p>
</body>
</html>