<?php

    /* Orientação objeto */

    //instância: chamar uma classe
    //objeto: representa ou tira uma cópia da classe
    //atributo: variável dentro de uma classe
    //método: funções aplicáveis a uma classe

    class Pessoa {
        public $nome; //atributo

        //método
        public function falar(){
            return "O meu nome é ".$this->nome;
        }
    };

    $daiyuki = new Pessoa();

    $daiyuki->nome = "Daiyuki Maia Fujiyoshi"; //é possível acessar desta forma porque o atributo é público
    echo $daiyuki->falar();

?>