<?php
    
    /* Funções anônimas */
    //não tem nome
    //não tem return

    function test($callback) {
        //Pocesso lento

        $callback();
    }

    test(function(){
        echo "Terminou!";
    });

?>