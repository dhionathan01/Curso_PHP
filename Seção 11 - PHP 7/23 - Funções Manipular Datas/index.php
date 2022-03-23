<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manipular Datas</title>
</head>
<body>
    <?php 
        // Recoperação da data atual ou data corrente
        echo date('D');

        echo'<br>';
        //Exibir dia/mes/ano horas:minuto
        echo date('d/m/Y H:i');

        echo '<br>';

        echo date_default_timezone_get();
        // Mudando timezone para ajustar a hora e a data

        date_default_timezone_set('America/Sao_Paulo');
        echo'<br>';
        echo date_default_timezone_get();
        echo'<br><br><hr>';

/*******  OBS: PARA CÁLCULOS É OBRIGATÓRIO O USO DE DATAS PADRÃO AMERICANO , ANO MES E DIA  *********/
        
        //Calculando datas:

        $data_inicial = '2022-03-22';
        $data_final = '2022-04-17';

        //Convertendo a string em timestamp (uma representação de tempo)
        
        /* 
        o strtotime faz o calculo de segundos tendo como base 01/01/1970
        timestamp 
        01/01/1970 -- 2018-04-24  (No js -> convertemos para milissegundos / no PHP -> em segundos)
        */

        $time_inicial = strtotime($data_inicial);
        $time_final = strtotime($data_final);
        echo $data_inicial . ' - ' . $time_inicial;
        echo '<br>';
        echo $data_final . ' - ' . $time_final;

        // calculando a diferença dos segundos das datas:
        $difenca_times = $time_final - $time_inicial;
        echo '<br>';
        echo "Diferença de segundos entre $data_final e $data_inicial equivale: ". $difenca_times;
        
       // Para calcular quantos dias faltam precisamos calcular quantos segundos tem por dia:
       $segundos_existem_dia = 24 * 60  * 60;
       echo'<br>';
       echo "Um dia possui $segundos_existem_dia segundos <br>";

       // Para descobrirmos quantos dias passaram dividimos o valor total de segundos com  a quantidade de segundos tem em um dia:

       $diferenca_de_dias_entre_as_datas = $difenca_times / $segundos_existem_dia;
       echo "Faltam $diferenca_de_dias_entre_as_datas dias, para do dia $data_inicial chegar a $data_final";
    ?>
</body>
</html>