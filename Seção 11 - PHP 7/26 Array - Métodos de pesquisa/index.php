<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Métodos de pesquisa</title>
</head>
<body>
    <?php 
        // in_array() -> Retorna true ou false para existência do que está sendo procurado
        // array_search() -> Retorna o índice do valor pesquisado, caso ele exista
        $lista_frutas = ['Banana', 'Maçã', 'Morango', 'Uva'];
        echo '<pre>';
        print_r($lista_frutas);
        echo '<pre>';

        $existe = in_array('Morango', $lista_frutas);
        //true -> texto = 1
        //false -> texto = vazio

        if($existe){
            echo 'Sim, o valor pesquisado existe no array';
        }else{
            echo 'Não, o valor pesquisado não existe no array';
        }
        echo '<br> <hr> <br>';
        $existe = array_search('Uva', $lista_frutas);

        // No array Search caso o número não exista retorna null oque é diferente de false

        if($existe != null){
            echo 'Sim, o valor pesquisado existe no array';
        }else{
            echo 'Não, o valor pesquisado não existe no array';
        }

        echo '<br> <hr>';
        // Pesquisa em Array multidimensional

        $lista_coisas = array(
            'frutas' => $lista_frutas,
            'pessoas' => ['João', 'Maria']);
        

        echo '<pre>';
        print_r($lista_coisas);
        echo '<pre>';
        
        echo in_array('Uva', $lista_coisas['frutas']);


    ?>
</body>
</html>