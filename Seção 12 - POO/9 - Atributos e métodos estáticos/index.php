<?php 
    class Exemplo{

        public static $atributo1 = 'Atributo estático';
        public $atributo2 = 'Atributo normal';

        public static function metodo1(){
            echo 'Método estático';
        }
        public function metodo2(){
            echo 'Método Normal';
        }
    }

    $x = new Exemplo();

    // Acessando atributo estático:
    echo Exemplo::$atributo1;
    echo '<br>';
    Exemplo::metodo1();
    echo '<br> <hr>';
    echo 'Testando não estático: <br>';

    //Exemplo::$atributo2;
    //Exemplo::metodo2();

    // ATENÇÃO NÃO É POSSÍVEL ACESSAR ATRIBUTOS ESTÁTICOS COM ' -> ' exemplo:
    //echo $x->atributo1;

    // OBS: Não é possível utilizar o this em métodos estáticos.


?>