<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casting de tipos</title>
</head>
<body>
    <?php 
        //gettype() => Retorna o tipo da variável
        $valor = 10;
        $valor2 = (float) $valor;

        $stringteste = '15.341';
        $stringteste2 = (float) $stringteste;

        $boolfalse = false;
        $boolfalse2 = (string)$boolfalse;
        $boolfalse3 = (int)$boolfalse;

        $booltrue = true;
        $booltrue2 = (string)$booltrue;
        $booltrue3 = (int)$booltrue;

        echo $valor . ' ' . gettype($valor);
        echo '<br>';
        echo $valor2 . ' ' . gettype($valor2);
        echo '<br>';
        echo $stringteste .' '. gettype($stringteste);
        echo '<br>';
        echo $stringteste2 .' '. gettype($stringteste2);
        echo '<br><br>';

        echo 'Teste com bool false:';
        echo '<br>';
        echo $boolfalse2 .' '. gettype($boolfalse2);
        echo '<br>';
        echo $boolfalse3 .' '. gettype($boolfalse3);
        echo '<br><br>';

        echo 'Teste com bool true:';
        echo '<br>';
        echo $booltrue2 .' '. gettype($booltrue2);
        echo '<br>';
        echo $booltrue3 .' '. gettype($booltrue3);

    ?>
</body>
</html>