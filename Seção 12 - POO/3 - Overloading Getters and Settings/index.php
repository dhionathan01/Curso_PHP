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
    }

    $funcionario1 = new GlobalFuncionario();
    $funcionario1->__set("nome", "Dhionathan");
    $funcionario1->__set("telefone", 155123);
    $funcionario1->__set("numFilhos", 2);
    $funcionario1->__set("cargo", "Desenvolvedor");
    $funcionario1->__set("salario", 5000);

    echo $funcionario1->__get("nome") . ' Possui ' . $funcionario1->__get("numFilhos") . ' filhos ' . " Salário: " . $funcionario1->__get("salario");
?>