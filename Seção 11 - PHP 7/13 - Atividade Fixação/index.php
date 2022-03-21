<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Atividade Fixação</title>
</head>
<body>
    <?php 
        $idade = 20;
        $peso = 90;
        $pode_doar = false;

        if(($idade >= 16 and $idade <= 69) and $peso >= 50){
            echo 'Atende aos requisitos';
        }else{
            echo 'Não atendo aos requisitos';
        }
    ?>
</body>
</html>