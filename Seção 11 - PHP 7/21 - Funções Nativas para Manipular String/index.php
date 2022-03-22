<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas para Manipular String</title>
</head>
<body>
    <?php 
        $texto = 'Curso completo de PHP';

        //string to lower
        echo 'Deixando caracter minusculo: <br>';
        echo $texto .'<br>';
        echo strtolower($texto);
        echo '<br><br><hr>';

        //string to upper
        echo 'Deixando caracter MAIÚSCULO: <br>';
        echo $texto .'<br>';
        echo strtoupper($texto);
        echo '<br><br><hr>';

        //string ucfirst
        echo 'Deixando o Primeiro Caracter Maiúsculo: <br>';
        $texto = 'curso completo php';
        echo 'Exemplo :'.$texto .'<br>';
        echo 'Resultado:'.ucfirst($texto);
        echo '<br><br><hr>';

        // strlen conta o número de caracteres 
        echo 'Conta o número de caracters incluíndo espaços em branco';
        echo 'Exemplo :'.$texto .'<br>';
        echo 'Total caracters:'.strlen($texto);
        echo '<br><br><hr>';

        // string replace - substitui o uma cadeia de caracters por outra
        echo 'Substitui o uma cadeia de caracters por outra <br>';
        echo 'Exemplo :'.$texto .'<br>';
        $cadeiaUm = 'php';
        $cadeiaDois = 'js';
        echo "Substitui $cadeiaUm por $cadeiaDois <br>";
        echo 'Resultado: '.str_replace($cadeiaUm, $cadeiaDois, $texto) ;
        echo '<br><br><hr>';

        // substr - Retornar uma parte da string
        echo 'Pega da posição inicial informada até a final e apresenta <br>';
        echo 'Exemplo :'.$texto .'<br>';
        $posicaoInicial = 1;
        $quantidadeCaracteres = 4;
        echo "Pegando do índice $posicaoInicial e as próximas $quantidadeCaracteres posições da string <br>";
        echo 'Resultado: '. substr($texto, $posicaoInicial, $quantidadeCaracteres) ;
        echo '<br><br><hr>';
    ?>
</body>
</html>