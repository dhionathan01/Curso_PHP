<?php 
    namespace A;
    class Cliente implements CadastroInterface {
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
?>