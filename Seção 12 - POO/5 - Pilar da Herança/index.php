<?php 

    class Veiculo{
        public $placa = null;
        public $cor = null; 

        function acelerar(){
            echo"Veículo: $this->placa - Acelerando";
        }

        function freiar(){
            echo"Veículo: $this->placa - Freiando";
        }
    }


    class Carro extends Veiculo{
       
        public $tetoSolar = true;

        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }


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
        function __construct($placa, $cor)
        {
            $this->placa = $placa;
            $this->cor = $cor;
        }


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
    }


    $carro = new Carro('ATFG-1551', 'Preta');
    $moto = new Moto('QWRT-7761', 'Cinza');

    echo'<pre>';
    print_r($carro);
    echo '<br>';
    print_r($moto);
    echo'</pre>';
    echo '<br>';

    $carro->abrirTetoSolar();
    echo '<br>';
    $carro->acelerar();
    echo '<hr>';
    $moto->acelerar();

    echo '<hr>';
    $moto->freiar();
    echo '<br>';
    $carro->freiar();

?>