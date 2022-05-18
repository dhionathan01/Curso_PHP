<?php


    class Pai {
        private $nome = 'Dhionathan';
        protected $sobrenome = 'Jobim';
        public $humor = 'Feliz';



        public function __get($name)
        {
            return $this->$name;
        }

        public function __set($name, $value)
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
            $valorRandom = rand(1, 10);
            if($valorRandom >= 1 && $valorRandom <= 8){
                $this->responder();
            }else{
                $this->executarMania();
            }
            
        }
    }

    class Filho extends Pai {
        public function __construct()
        {   //Exibi os métodos do objeto
            echo '<pre>';
            print_r(get_class_methods($this));
            echo '</pre>';
        }

        public function executarMania(){
            echo "Cantar";
        }

        public function chamarMetodoTest(){
            $this->executarMania();
        }

        protected function responder(){
            echo 'Salve';
        }

        /*      
        public function getAtributo($atributo){
            return $this->$atributo;
        }
        
        public function setAtributo($atributo, $valor){
            $this->$atributo = $valor;
        }
        */    
    }

    // Embora possa ser referênciado, atributos privados não podem ser acessados por meio de herânça a classes filhas:

    /* echo "<pre>";
    $filho = new Filho();
    print_r($filho);
    echo "</pre>";
 */
    /* echo $filho->getAtributo('humor');
    $filho->setAtributo('humor', 'Triste');
    echo '<br>';
    echo $filho->getAtributo('humor');

    // Criando um atributo com o set:
    $filho->setAtributo('nome', 'Jorge');
    echo "<pre>";
    print_r($filho);
    echo "</pre>";
    echo $filho->getAtributo('nome');
    
    // Criando outro novo atributo teste: 

    $filho->setAtributo('teste', 'Testando 123');
    echo "<pre>";
    print_r($filho);
    echo "</pre>";
    echo $filho->getAtributo('teste'); */

    //Exibir métodos:
/*     echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>'; */

    echo "<pre>";
    $filho = new Filho();
    print_r($filho);
    echo "</pre>";
    
    // A função continua e executar o método executar mania do pai visto que o método executar ação que faz a referência foi herdada de pai
    $filho->executarAcao();
    echo "<br>";
    // Nesse contexto a mania filho é executada:
    // No caso do protected o valor é sobrescrito:
    $filho->chamarMetodoTest();
    
    

?>