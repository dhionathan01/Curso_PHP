<?php

use Funcionario as GlobalFuncionario;

      class Funcionario{
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;
        public $cargo = null;
        public $salario = null;

        // overloading/ sobrecarga
        function __set($atributo, $valor){
            $this->$atributo = $valor;
        }
        function __get($atributo){
            return $this->$atributo;
        }

        // Métodos
        function resumeCadFunc(){
            return $this->__get('nome') . ' possui ' . $this->__get('numFilhos') .  ' filho(s)';
       }

       function modificarNumFilhos($numFilhos){
        $this->numFilhos = $numFilhos;
    }

    }

    $funcionario1 = new GlobalFuncionario();
    $funcionario1->__set("nome", "Dhionathan");
    $funcionario1->__set("telefone", 155123);
    $funcionario1->__set("numFilhos", 2);
    $funcionario1->__set("cargo", "Desenvolvedor");
    $funcionario1->__set("salario", 5000);
    echo $funcionario1->resumeCadFunc();
    
    echo'<br>';

    $funcionario2 = new GlobalFuncionario();
    $funcionario2->__set("nome", "Jorge");
    $funcionario2->__set("telefone", 3121);
    $funcionario2->__set("numFilhos", 4);
    $funcionario2->__set("cargo", "Sênior Desenvolvedor");
    $funcionario2->__set("salario", 15000);
    echo $funcionario2->resumeCadFunc();

    
?>