<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array - PHP</title>
</head>
<body>
    <?php 
    /* 
        //Arrays sequenciais (numéricos)
        $lista_frutas = array('Banana','Maçã' ,'Morango','Uva', 'Abacate');

        // Adicionando um novo item a uma lista:
        $lista_frutas[] = 'Abacaxi';

        echo '<pre>';
        var_dump($lista_frutas);

        echo '<hr>';

        print_r($lista_frutas);
        echo '<pre>';

        echo '<hr> <br>';

        // Acessando item no array de acordo com seu índice:
        echo $lista_frutas[4];
     */

        // Arrays associativos:
        $lista_frutas = array(
            'a' => 'Banana',
            'b' =>'Maçã',
            'x' =>'Morango',
            'z' =>'Uva',
            '2' =>'Abacate');
        
        //Adicionando um Array associativo:
        $lista_frutas['w'] =  'Abacaxi';

        echo '<pre>';
        var_dump($lista_frutas);
        echo '<pre>';

        echo $lista_frutas['x'];
        ?>
</body>
</html>