<?php

    /* Polimorfismo */
    

    abstract class Animal {
        public function falar(){
            return "Som";
        }

        public function mover(){
            return "Andar";
        }
    }

    class Cachorro extends Animal {
        public function falar(){ //polimorfismo
            return "Late";
        }
    }

    class Gato extends Animal {
        public function falar(){//polimorfismo
            return "Mia";
        }
    }

    class Passaro extends Animal{
        public function falar(){//polimorfismo
            return "Canta";
        }
        public function mover(){
            return "Voar e ".parent::mover(); //polimorfismo e usa o método da classe pai
        }
    }

    $pluto = new Cachorro();
    echo $pluto->falar()."<br>";
    echo $pluto->mover()."<br>";

    echo "---------------------------<br>";

    $garfield = new Gato();
    echo $garfield->falar()."<br>";
    echo $garfield->mover()."<br>";

    echo "---------------------------<br>";

    $ave = new Passaro();
    echo $ave->falar()."<br>";
    echo $ave->mover()."<br>";

    

?>