<?php 

    namespace A;
    class Cliente implements CadastroInterface, \B\CadastroInterface {
        public $nome = 'Dhionathan A';

        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }
        public function __get($name)
        {
            return $this->$name;
        }

        public function salvar()
        {
            echo 'Salvando';
        }

        public function remover()
        {
            echo 'Remover';
        }
    }

    interface CadastroInterface{
        public function salvar();
    }

    namespace B;
    class Cliente implements CadastroInterface, \A\CadastroInterface{
        public $nome = 'Dhionathan B';

        public function __construct()
        {
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function __get($name)
        {
            return $this->$name;
        }

        public function remover()
        {
            echo 'Removendo';
        }
        
        public function salvar()
        {
            echo 'Salvando';
        }
    }
    interface CadastroInterface{
        public function remover();
    }
    //-------------

    $c = new \B\Cliente();
    print_r($c);
    print('<br>');
    print($c->__get('nome'));

?>