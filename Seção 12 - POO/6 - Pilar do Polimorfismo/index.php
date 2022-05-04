<?php

    class Veiculo{
        public $placa = null;
        public $cor = null;

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }



        function acelerar(){
            echo"Veículo: $this->placa - Acelerando";
        }

        function freiar(){
            echo"Veículo: $this->placa - Freiando";
        }

        function trocarMarcha(){
            echo "$this->placa Desengatar embreagem com o pé e engatar marcha com a mão";
        }
    }


    class Carro extends Veiculo{
       
        public $tetoSolar = true;

        

        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        function __get($atributo)
        {
            return $this->$atributo;
        }


        function abrirTetoSolar(){
            $this->teto_solar = true;
            echo "Veículo: $this->placa - Abrindo Teto solar";
        }

        function alterarPosicaoVolante(){
            echo "Alterando Posição volante";
        }
    }

    class Moto extends Veiculo{
        public $contraPesoGuidao = true;


        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        function __get($atributo)
        {
            return $this->$atributo;
        }


        function empinar(){
            echo "Moto está empinando";
        }

        function trocarMarcha(){
            echo "$this->placa Desengatar embreagem com a mão e engatar marcha com o pé";
        }
    }

    class Caminhao extends Veiculo {
        
    }

    $carro = new Carro('ATFG-1551', 'Preta');
    $moto = new Moto('QWRT-7761', 'Cinza');
    $caminhao = new Caminhao('TFRX-4840', 'Branca');

    $carro->trocarMarcha();
    echo "<br>";
    $moto->trocarMarcha();
    echo "<br>";
    $caminhao->trocarMarcha();
    echo $caminhao->placa;
    
?>