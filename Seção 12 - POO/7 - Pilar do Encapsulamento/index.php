<?php
    class Pai {
        private $nome = 'Dhionathan';
        protected $sobrenome = 'Jobim';
        public $humor = 'Feliz';

        function getNome(){
            return $this->nome;
        }
        function setNome($valor){
            $this->nome = $valor;
        }


        function __get($name)
        {
            return $this->$name;
        }

        function __set($name, $value)
        {
            $this->$name = $value;
        }

        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'Oi';
        }

        public function executarAcao(){
            
        }
    }

    //É possível acessar e modificar atributos públicos:

    $pai = new Pai;
    echo $pai->humor;
    $pai->humor = 'Triste';
    echo '<br>';
    echo $pai->humor;
    echo '<br>';

    // Não é possível fazer o mesmo com atributos protegidos e privados gera erro,Comente os métodos mágicos __set e __get para e descomente para testar.

    //echo $pai->nome;
    //echo $pai->sobrenome;
    
    // Porém com o uso dos getters and setters isso é possivel:
    echo $pai->getNome();
    echo '<br>';
    $pai->setNome('Cleber');
    echo $pai->getNome('nome');
    echo '<br><hr>';

    // Com os métodos mágicos __set e __get criados:
    echo 'Métodos mágicos : <br>';
    echo $pai->__get('nome');
    echo '<br>';
    $pai->__set('nome', 'Dhionathan');
    echo $pai->__get('nome');

    echo '<br><hr>';
    echo 'Observe que com os métodos mágicos criados não é necessário a específicação do método para acessar ou modificar: <br>';
    echo $pai->nome;
    echo '<br>';
    $pai->nome = 'Cleber';
    echo $pai->nome;

?>