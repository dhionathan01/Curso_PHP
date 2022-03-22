<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções Matemáticas</title>
</head>
<body>
    <?php 
        $num = 9.31;
        $num2 = -9.31;

        // A função ceil arredonda para cima
        echo 'Função "ceil" arredonda o valor para cima : <br>';
        echo "Valor base: $num <br> Resultado: ". ceil($num).'<br><br>';
        echo 'Arredondando números negativos: <br>';
        echo "Valor base: $num2 <br> Resultado: ". ceil($num2).'<br><hr>';

        // A função floor arredonda para baixo
        echo 'Função "floor" arredonda o valor para baixo : <br>';
        echo "Valor base: $num <br> Resultado: ". floor($num).'<br><br>';
        echo 'Arredondando números negativos: <br>';
        echo "Valor base: $num2 <br> Resultado: ". floor($num2).'<br><hr>';


        /*  A função round arredonda com base na casa decima. 
        Se 0 < casa_decimal < 5 => Para baixo
        Se casa_decimal > 5 => Para cima */
        $num = 7.3;
        $num2 = 8.6;

        echo 'Função "round" arredonda o valor com base na casa decimal : <br>';
        echo 'Casa decimal menor que 5: <br>';
        echo "Valor base: $num <br> Resultado: ". round($num).'<br><br>';
        echo 'Casa decimal maior que 5: <br>';
        echo "Valor base: $num2 <br> Resultado: ". round($num2).'<br><hr>';


        /*  A função rand cria um valor aleatório de 0 até randmax (para checar use o comando getrandmax())
        */
        echo 'Função "rand" Cria um valor aleatório : <br>';
        echo 'Randmax: <br>'. getrandmax() . '<br>';
        echo 'Valor aleatório: <br>'.rand() . '<br>';
        
        echo 'Definindo um parametros no rand para gerar valalores de 10 a 20:<br>';
        echo rand(10,20);
        echo '<br><hr>';
        

        // Função sqrt - Raiz Quadrada
        $valor = 121;
        echo 'Função raiz quadrada: <br>';
        echo "raiz quadrada de $valor equivale: " .sqrt($valor)
    
    ?>
</body>
</html>