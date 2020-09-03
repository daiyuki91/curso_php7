<?php

    /* Métodos Mágicos */

    class Endereco {
        private $logradouro;
        private $numero;
        private $cidade;

        //Métodos Mágicos - construtor e destrutor
        public function __construct($a, $b, $c){
            $this->logradouro = $a;
            $this->numero = $b;
            $this->cidade = $c;
        }

        public function __destruct(){
            var_dump("destrutor!");
        }

        public function __toString(){
            return $this->logradouro.", ".$this->numero.", ".$this->cidade;
        }

    };

    $meuEndereco = new Endereco("Tv. Apinagés", 808, "Belém");

    var_dump($meuEndereco);

    echo "<br><br>";

    echo $meuEndereco;

    echo "<br><br>";

?>