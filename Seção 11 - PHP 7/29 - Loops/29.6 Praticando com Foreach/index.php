<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Foreach Prática</title>
</head>
<body>
    <?php 

        // Pegando índices e valores do array com Foreach
        /*************************************************/
       /*  
        $funcionarios = array('João', 'Maria', 'Júlia');

        echo'<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach($funcionarios as $indice => $nome_funcionario){
            echo 'ID: '. $indice. ' Nome: ' . $nome_funcionario .'<br>';

        } */
        
        // Foreach com Arrays Multidimensionais 
         /*************************************************/
        $funcionarios = array(
            array('Nome' => 'Dhionathan',  'Salário' => 3000, 'Nascimento' => '17/04/2001'),
            array('Nome' => 'Maria', 'Salário' => 2500), 
            array('Nome' => 'Júlia', 'Salário' => 2300)
        );

        echo'<pre>';
        print_r($funcionarios);
        echo '</pre>';

        foreach($funcionarios as $indice => $funcionario){
            foreach($funcionario as $subindice =>$dado ){
                echo"$subindice : $dado <br>";
            }
            echo '<hr>';
        }


    ?>
</body>
</html>