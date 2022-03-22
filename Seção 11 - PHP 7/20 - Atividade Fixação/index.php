<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Fixação</title>
</head>
<body>
    <?php 
    
        function calcularImpostoRenda($salario){
            if ($salario <= 1903.98) {
                $valorImposto = 0;
            }else if($salario >= 1903.99 and $salario <= 2826.65){
                $valorImposto = $salario * 0.07;
            }else if($salario >= 2826.66 and $salario <= 3751.05){
                $valorImposto = $salario * 0.15;
            }else if($salario >= 3751.06 and $salario <= 4664.68){
                $valorImposto = $salario * 0.225;
            }else if($salario > 4664.68){
                $valorImposto = $salario * 0.275;
            }
            echo "Valor do imposto: $valorImposto";
        }

        calcularImpostoRenda(2826.65);
    ?>
</body>
</html>