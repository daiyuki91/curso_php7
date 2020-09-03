<?php

    //"..." aceita quantos valores vierem => Nome do recurso: declaração de tipos escalares
    //alterando o tipo de retorno usando ":"
    function soma(float ...$valores):string {
        return array_sum($valores);     //soma os valores contidos no array
    }

    echo var_dump(soma(2,2));
    echo "<br>";
    echo soma(25,33);
    echo "<br>";
    echo soma(1.5,3.2); //o programa vai ignorar as casas decimais
    echo "<br>";

?>