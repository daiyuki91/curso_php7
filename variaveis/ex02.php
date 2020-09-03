<?php
    $anoNascimento = 1990;
    $nome1 = "Daiyuki";


    //comentário de linha

    /*
        comentário de bloco
    */
    
    echo $nome1;
    echo "</br>";


    //concatenando variável
    $nome2 = "Fujiyoshi";    

    $nomeCompleto = $nome1 . " " . $nome2;

    echo $nomeCompleto;
    echo "</br>";

    //exit; //parar a execução neste ponto

    //apagando variável
    unset($nome1); 
    if (isset($nome1)){
        echo $nome1;
    }
    echo "</br>";
    

    /*
    var_dump($anoNascimento);
    var_dump($nome1);
    */
?>