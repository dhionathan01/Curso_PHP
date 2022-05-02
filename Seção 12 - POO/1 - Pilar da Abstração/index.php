<?php 
    // Criar o modelo de um funcionário:
    class Funcionario{
        // Atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        // Métodos
        function resumeCadFunc(){
             return "$this->nome Possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

    }

    $funcionario1  = new Funcionario();
    $funcionario1->nome = 'Dhionathan';
    $funcionario1->telefone = 3315512;
    $funcionario1->numFilhos = 2;

    echo $funcionario1->resumeCadFunc();
    echo '<br>';
    $funcionario1->modificarNumFilhos(1);
    echo $funcionario1->resumeCadFunc();


    $funcionario2  = new Funcionario();
    $funcionario2->nome = 'Jorge';
    $funcionario2->telefone = 123512;
    $funcionario2->numFilhos = 4;

    echo "<br>";
    echo $funcionario2->resumeCadFunc();


?>