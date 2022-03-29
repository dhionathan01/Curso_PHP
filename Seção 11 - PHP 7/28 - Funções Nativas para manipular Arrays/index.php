<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Nativas para Manipular Arrays</title>
</head>
<body>
    <?php 
        echo 'Função is_array() retorna true ou false se é ou não um array: <br> ';
        $array = ['Notebook', 'Teclado'];
        //$array = 'String';
        $retorno = is_array($array);

        if($retorno){
            echo 'Sim, é um array';
        }else {
            echo 'Não, não é um array';
        }

        /* *********************************************************** */
        echo '<br> <hr>';

        $array = [1 => 'a', 7 => 'b', 18 => 'c',];
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        echo 'Função array_keys() cria um array com valor dos índices do array';

        $chaves_array = array_keys($array);

        echo '<pre>';
            print_r($chaves_array);
        echo '</pre>';

        /* *********************************************************** */
        echo '<br> <hr>';
        $array =  array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx');
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        echo 'Função sort() ordenada em ordem alfabética o próprio array passado e não cria um novo';
        sort($array); //A função sort retorna true ou false para tentativa de ordenação do array

        echo '<pre>';
            print_r($array);
        echo '</pre>';

        /* *********************************************************** */
        echo '<br> <hr>';
        $array =  array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx');
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        echo 'Função asort() semelhante ao sort() porém conserva os índices';
        asort($array); //A função asort faz a mesma coisa que a sort() porém conserva os índices

        echo '<pre>';
            print_r($array);
        echo '</pre>';

        /* *********************************************************** */
        echo '<br> <hr>';
        echo 'Função count() conta quantidade de elementos o array possui ';
        $array =  array('teclado', 'mouse', 'cabo hdmi', 'gabinete', 'fonte atx');
        echo '<pre>';
            print_r($array);
        echo '</pre>';
        echo count($array);

        /* *********************************************************** */
        echo '<br> <hr>';
        echo 'Função array_merge() unifica todos os arrays passados';
        
        $array1 = ['osx', 'windows'];
        $array2 = array('linux');
        $array3 = ['solaris'];

        $novo_array = array_merge($array1, $array2, $array3);
        echo '<pre>';
            print_r($novo_array);
        echo '</pre>';

        /* *********************************************************** */
        echo '<br> <hr>';
        echo 'Função explode() Divide uma string baseada em um delimitador';

        $string = '26/04/2018';
        echo 'string exemplo : '.$string;
        $array_retorno = explode('/', $string);
        echo '<br> Resultado:';
        echo '<pre>';
            print_r($array_retorno);
        echo '</pre>';

        echo '<br> Deixando a data em padrão americado: <br>';
        echo $array_retorno[2].'-'.$array_retorno[1].'-'.$array_retorno[0];
        
        /* *********************************************************** */
        echo '<br> <hr>';
        echo 'Função implode() junta um array em uma string criando um delimitador';

        $array = ['a', 'b', 'x', 'y']; // a,b,x,y
        echo '<pre>';
            print_r($array);
        echo '</pre>';

        echo 'Resultado: ';
        $string_retorno = implode('-', $array);
        echo $string_retorno;
        ?>
</body>
</html>