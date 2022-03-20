<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores Lógicos</title>
</head>
<body>
    <?php 

    // operadores lógicos
    // E: && ou AND -> retorna verdadeiro se todos os resultados da expressão forem verdadeiros
    // OU: || ou OR -> retorna verdadeiro se pelo menos uma das expressões forem verdadeiros
    // XOR -> retorna verdadeiro se uma das expressões for verdadeiras e a outra falsa
    // ! -> inverte o resultado retornado pela expressão

    // () estabelece precedência  -  Aula 313 - 14m:20s
        echo 'Exemplo 1: <br> ';
        if(5 == 3 and 10 > 3){
            echo ' Verdadeiro';
        }else{
            echo 'Falso';
        }

        echo '<br> <br>';

        echo 'Exemplo 2: <br> ';
        if(5 == 3 or 10 > 3){
            echo ' Verdadeiro';
        }else{
            echo 'Falso';
        }

        echo '<br> <br>';

        echo 'Exemplo 3: <br> ';
        if(5 == 3 xor 10 > 3 ){
            echo ' Verdadeiro';
        }else{
            echo 'Falso';
        }

        echo '<br> <br>';

        echo 'Exemplo 4: <br> ';
        if(!(5 == 3)){
            echo ' Verdadeiro';
        }else{
            echo 'Falso';
        }

        echo '<br> <br>';

        echo 'Exemplo 5: <br> ';
        if(5 == 3 xor 10 > 3 ){
            echo ' Verdadeiro';
        }else{
            echo 'Falso';
        }

        echo '<br> <br>';

        echo 'Exemplo 6: <br> ';
        if((22 == 22 and 3 ==3) or 5 != 5) {
            echo ' Verdadeiro';
        }else{
            echo 'Falso';
        }

    ?>
</body>
</html>