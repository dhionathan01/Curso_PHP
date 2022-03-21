<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch</title>
</head>
<body>
    <?php 
        $parametro = 4;
            # Diferente do JS o switch faz um comparação por meio de igualdade e não por identidade
        switch($parametro){
            case 1:
                echo 'Entrou no case 1';
                break;
            case 2:
                echo 'Entrou no case 2';
                break;
            case 3:
                echo 'Entrou no case 3';
                break;

            default:
                echo 'Entrou no default ';
                break;
        }
    ?>
</body>
</html>