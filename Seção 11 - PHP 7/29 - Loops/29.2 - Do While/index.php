<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP - Do While</title>
</head>
<body>
    <?php 

        $x = 10;
        // No do while é executada a primeira ação e só depois é feita a verificação logo concluimos que no do  while o bloco é executado obrigatoriamente pelo menos uma vez: 
        do {
            echo 'Entrou no "do while"';
        } while($x < 9);

        echo "<br> <hr> <br>";
        
        while($x < 9){
            echo 'Entrou no While';
        }
    
    ?>
    
</body>
</html>