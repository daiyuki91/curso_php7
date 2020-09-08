<?php

interface Veiculo {
    public function acelerar($velocidade);
    public function frenar($velocidade);
    public function trocarMarcha($marcha);
};

abstract class Automovel implements Veiculo {

    //devido ao comando "implements", esta classe deve ser implementada conforme a interface Veiculo

    public function acelerar($velocidade){
        echo "O veículo acelerou até ".$velocidade."km/h<br>";
    }

    public function frenar($velocidade){
        echo "O veículo frenou até ".$velocidade."km/h<br>";
    }

    public function trocarMarcha($marcha){
        echo "O veículo engatou a marcha".$marcha."<br>";
    }

};

?>