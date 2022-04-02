<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Arrays</title>
</head>
<body>
    <?php 
        /* $registros = [
            'Titulo Notícia 1',
            'Titulo Notícia 2',
             'Titulo Notícia 3'
            ]; */
        /* 
            // Percorrendo com While:
            $idx = 0;
            while($idx < 3){

                echo"$registros[$idx]";
                echo "<hr>";
                $idx++;
            };
        */

        // Array multidimensional while
            $registros = [
                
                    ['titulo' => 'Titulo Notícia 1', 'conteudo' => 'Conteudo 1'], 
                    ['titulo' => 'Titulo Notícia 2', 'conteudo' => 'Conteudo 2'],
                    ['titulo' => 'Titulo Notícia 3', 'conteudo' => 'Conteudo 3'],
                    ['titulo' => 'Titulo Notícia 4', 'conteudo' => 'Conteudo 4']
            ];

            /* echo '<pre>';
            print_r($registros);
            echo'<pre>';

            $idx = 0;
            echo'O array possui: '. count($registros).'<br>';
            while($idx < count($registros)){
                echo '<h3>'. $registros[$idx]['titulo'].'</h3>';
                echo'<p>'. $registros[$idx]['conteudo'].'</p>';
                echo "<hr>";
                $idx++;
            }; */


            // Lógica com do while

/*             
            $idx = 0;
            do {

                echo '<h3>'. $registros[$idx]['titulo'].'</h3>';
                echo'<p>'. $registros[$idx]['conteudo'].'</p>';
                echo "<hr>";
                $idx++;

            }while($idx < count($registros));
 */

 
            // Lógica com FOR
            for($idx = 0; $idx < count($registros); $idx++){
                echo '<h3>'. $registros[$idx]['titulo'].'</h3>';
                echo'<p>'. $registros[$idx]['conteudo'].'</p>';
                echo "<hr>";
            }
    ?>
</body>
</html>