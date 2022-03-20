<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variáveis Constantes</title>
</head>
<body>
    <?php
        define('BD_URL', 'endereco_bd_dev');
        define('BD_USUARIO', 'usuario_dev');
        define('BD_SENHA', 'senha_dev');
        // testes:

        //Erro acontece pq não podemos modificar uma constante define('BD_URL', 'endereco_bd_prod');

        echo BD_URL . '<br>';
        echo BD_USUARIO. '<br>';
        echo BD_SENHA . '<br>';

    ?>
</body>
</html>