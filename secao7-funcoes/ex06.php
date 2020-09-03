<?php

    $pessoa = array(
        'nome'=>'Daiyuki',
        'idade'=>29
    );

    //passagem por cópia
    foreach ($pessoa as $value) {

        if (gettype($value) === 'integer') $value +=10;

        echo $value."<br>";
    }

    print_r($pessoa);

    //////////////////////////////////
    echo "<br><br>";
    //////////////////////////////////
    
    //passagem por referência
    foreach ($pessoa as &$value) {

        if (gettype($value) === 'integer') $value +=10;

        echo $value."<br>";
    }

    print_r($pessoa);

?>