<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - WHile</title>
</head>
<body>
    <?php 

        $num = 1;
        echo "Exemplo com critério de parada com um iterável: <br>";
        // Operadores comparaçãoo ou lógico
        echo "-- Início do Loop -- <br>";
        while($num < 10){
            echo "$num <br>";

            $num+=3; // Critério de parada

        }
        echo "-- Fim do Loop -- <br> <hr>";

        $num = 1;
        echo "<br> Exemplo Com critério de parada no break <br>";

        echo "-- Início do Loop -- <br>";

        while(true){
            echo "$num <br>";

            $num +=15 ; // Critério de parada

            if($num > 100){ 
                break;
            }
        }
        echo "-- Fim do Loop -- <br>";

        $num = 1;

        echo "<br> Exemplo Com critério de parada no break <br>";

        echo "-- Início do Loop -- <br>";

        while(true){
            $num +=1 ; // Critério de parada

            if($num == 2 || $num == 6){
                continue; // O continue ignora todo o restando do código e executa dnv desde o ínício
            }

            if($num > 10){ 
                break;
            }

            echo "$num <br>";
        }

    ?>
</body>
</html>