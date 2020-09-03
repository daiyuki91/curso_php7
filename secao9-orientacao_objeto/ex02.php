<?php

    class Carro {
        //Atributos -------------------------
        private $modelo;
        private $motor;
        private $ano;

        //Métodos ---------------------------
        public function getModelo(){
            return $this->modelo;
        }
        public function setModelo($modelo){
            $this->modelo = $modelo;
        }

        public function getMotor():float{ //retorno do motor será um "float"
            return $this->motor;
        }
        public function setMotor($motor){
            $this->motor = $motor;
        }

        public function getAno():int{ //retorno do ano será um "int"
            return $this->ano;
        }
        public function setAno($ano){
            $this->ano = $ano;
        }

        public function exibir(){
            return array(
                "modelo"=>$this->getModelo(),
                "motor"=>$this->getMotor(),
                "ano"=>$this->getAno()
            );
        }
        
    }

    $gol = new Carro();
    $gol->setModelo("Gol GT");
    $gol->setMotor("1.6");
    $gol->setAno("2017");

    print_r($gol->exibir());
    echo "<br>";

    var_dump($gol->exibir());


?>