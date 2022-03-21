<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores de incremento e decremento</title>
</head>
<body>
    <h3>Pós-incremento</h3>
    <?php
        $a = 7;

        echo "O valor contido em  a é $a <br>";
        echo 'O valor '. $a++.' foi pós incrementado <br>';
        echo "O valor Atualizado de  a é $a <br>";
    ?>

    <h3>pré-incremento</h3>
    <?php
        $a = 7;

        echo "O valor contido em  a é $a <br>";
        echo 'O valor '. ++$a.' foi pré-incrementado <br>';
        echo "O valor Atualizado de  a é $a <br>";
    ?>

<h3>Pós-decremento</h3>
    <?php
        $a = 7;

        echo "O valor contido em  a é $a <br>";
        echo 'O valor '. $a--.' foi pós-decremento <br>';
        echo "O valor Atualizado de  a é $a <br>";
    ?>

    <h3>pré-decremento</h3>
    <?php
        $a = 7;

        echo "O valor contido em  a é $a <br>";
        echo 'O valor '. --$a.' foi pré-decremento <br>';
        echo "O valor Atualizado de  a é $a <br>";
    ?>

</body>
</html>