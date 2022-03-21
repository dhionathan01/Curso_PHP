<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operador ternário</title>
</head>
<body>
<?php
    // Deve ser fornecido frete grátis se o cliente tiver o cartão da loja e a compra for superior a 100 reais
    $usuario_possui_cartao_loja = true;
    $valor_compra = 500;
    $valor_frete = 50;
    $recebeu_desconto_frete = false;

    /* Não é recomendável utilizar operadores ternários encadeados, pois fica confuso seu entedimento como vemos abaixo:  */

    $valor_frete_aux = $usuario_possui_cartao_loja && $valor_compra >= 400 ? 0 : ($usuario_possui_cartao_loja && $valor_compra >= 300 ? 10 : ($usuario_possui_cartao_loja && $valor_compra >= 100 ? 25 : $valor_frete));

    $recebeu_desconto_frete = $valor_frete != $valor_frete_aux ? true : false;

    $valor_frete = $valor_frete_aux;
   /*  
    if($usuario_possui_cartao_loja and $valor_compra >= 400){
        $valor_frete = 0;
        
    }else if($usuario_possui_cartao_loja && $valor_compra >= 300){
        $valor_frete = 10;

    }else if($usuario_possui_cartao_loja && $valor_compra >= 100){
        $valor_frete = 25;
        
    }else{
        $recebeu_desconto_frete = false;
    } */
    ?>

        <h1>Detalhes do pedido</h1>
         <!-- 
        operador ternário:
        <condição> ? true : false  
        -->
        <p> Possui cartão da loja? <?= $usuario_possui_cartao_loja ? 'SIM' : 'NÃO'; ?>
            <?php
            ?>
        </p>

        <p>Valor da compra: <?= $valor_compra?></p>

        <p>Recebeu desconto no frete?
            <?php
                $teste = $recebeu_desconto_frete ? 'SIM' : 'NÃO';
                echo "$teste" ;
            ?>
        </p>
        
        <p>Valor do Frete: <?= $valor_frete?></p>
</body>
</html>