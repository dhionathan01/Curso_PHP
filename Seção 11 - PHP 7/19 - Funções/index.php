<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funções</title>
</head>
<body>
    <?php 
        //void (sem retorno)
        function exibirBoasVindas(){
            echo 'Bem-Vindo ao curso de PHP!<br>';
        }

        exibirBoasVindas();
        
        // return (com retorno)  
        function calcularAreaTerreno($largura, $comprimento){
            $area = $largura * $comprimento;
            return $area;
        }
        $resultado = calcularAreaTerreno(10, 100);
        echo $resultado
    ?>
</body>
</html>