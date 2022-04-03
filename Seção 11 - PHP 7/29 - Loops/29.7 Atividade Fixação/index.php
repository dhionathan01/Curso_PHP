<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade</title>
</head>
<body>
    <?php 
        $numeros = array();
        for($i=0; count($numeros)<6; $i++){
            
            $valor = random_int(1, 60);

            if(in_array($valor, $numeros) == false){
                $numeros[$i] = $valor;
            }
        }
        echo 'Números sorteados: <br>';
       foreach($numeros as $numero){
           echo "$numero<br>";
       }
    ?>
</body>
</html>