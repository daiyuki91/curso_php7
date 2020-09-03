<?php

    //array superglobal - variáveis pré-definidas

    //variável _GET
    //- dados de entrada vem pela URL (separador "?")
    //- resposta sempre será do tipo string
    $nome = $_GET["a"];
    var_dump($nome);
    echo "</br>";
    
    //converter resposta para numérico:
    $b = (int)$_GET["b"];
    var_dump($b);
    echo "</br>";

    ///////////////////////////////////////////////////
    
    //variável _SERVER
    $ip = $_SERVER["REMOTE_ADDR"];//ip provedor de acesso do usuário
    $ip = $_SERVER["SCRIPT_NAME"];//nome do arquivo (pode ser usado para criar um log)
    
    echo $ip;

?>