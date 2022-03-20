<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If e Else Prática</title>
</head>
<body>
    <?php
    // Deve ser fornecido frete grátis se o cliente tiver o cartão da loja e a compra for superior a 100 reais
    $usuario_possui_cartao_loja = true;
    $valor_compra = 225;
    $valor_frete = 50;
    $recebeu_desconto_frete = false;

    if($usuario_possui_cartao_loja and $valor_compra >= 100){
        $valor_frete = 0;
        $recebeu_desconto_frete = true;
    }
    ?>

        <h1>Detalhes do pedido</h1>
        <p> Possui cartão da loja?
            <?php
                if($usuario_possui_cartao_loja){
                    echo 'SIM';
                }else{
                    echo 'NÃO';
                }
            ?>
        </p>

        <p>Valor da compra: <?= $valor_compra?></p>

        <p>Recebeu desconto no frete?
            <?php 
                if($recebeu_desconto_frete){
                echo 'SIM';
                }else{
                    echo 'NÃO';
                }
            ?>
        </p>
        
        <p>Valor do Frete: <?= $valor_frete?></p>

</body>
</html>