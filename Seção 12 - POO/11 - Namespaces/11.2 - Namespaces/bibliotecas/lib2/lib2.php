<?php 
    namespace B;
    class Cliente implements CadastroInterface{
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
?>