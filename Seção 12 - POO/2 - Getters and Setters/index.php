<?php 
    // Criar o modelo de um funcionário:

use Funcionario as GlobalFuncionario;

    class Funcionario{
        // Atributos
        public $nome = null;
        public $telefone = null;
        public $numFilhos = null;

        // getters setters

        // nome
        function getNome(){
            return $this->nome;
        }

        function setNome($nome){
            $this->nome = $nome;
        }

        // telefone
        function getTelefone(){
            return $this->telefone;
        }

        function setTelefone($telefone){
            $this->telefone = $telefone;
        }

        // numfilhos
        function getNumFilhos(){
            return $this->numFilhos;
        }

        function setNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }


        // Métodos
        function resumeCadFunc(){
             return "$this->nome Possui $this->numFilhos filho(s)";
        }

        function modificarNumFilhos($numFilhos){
            $this->numFilhos = $numFilhos;
        }

    }

    $funcionario1  = new Funcionario();
    $funcionario1->setNome('Dhionathan');
    $funcionario1->setNumFilhos(2);
    //echo $funcionario1->resumeCadFunc();
    echo $funcionario1->getNome() . ' Possui ' . $funcionario1->getNumFilhos() .  ' filho(s)';
    
    echo '<br>';

    $funcionario2 = new Funcionario();
    $funcionario2->setNome('Jorge');
    $funcionario2->setNumFilhos(5);
    //echo $funcionario1->resumeCadFunc();
    echo $funcionario2->getNome() . ' Possui ' . $funcionario2->getNumFilhos() .  ' filho(s)';

?>