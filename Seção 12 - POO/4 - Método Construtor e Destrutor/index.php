<?php 
    class Pessoa {
        public $nome = null;

        function __construct($nome){ // É chamado automaticamente ao instanciar um objeto
            echo 'Objeto Iniciado';
            $this->nome = $nome;
        }

        function __destruct() // É chamado automaticamente assim que um objeto é removido da memória seja de forma intencional ou até que o script termine a sua execução
        {
            echo 'Objeto removido';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            return $this->nome . ' está correndo';
        }
    }

    $pessoa = new Pessoa('Dhionathan');
    echo '<br>';
    echo 'Nome: ' . $pessoa->__get('nome');
    echo '<br>' . $pessoa->correr();

    echo '<br>';
    unset($pessoa);
?>