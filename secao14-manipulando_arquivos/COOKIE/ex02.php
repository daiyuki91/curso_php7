<?php

if (isset($_COOKIE["NOME_DO_COOKIE"])) {
    //var_dump($_COOKIE["NOME_DO_COOKIE"]);
    //var_dump(json_decode($_COOKIE["NOME_DO_COOKIE"]));

    $obj = json_decode($_COOKIE["NOME_DO_COOKIE"]);

    echo $obj->empresa; //atributo é o nome que está no objeto criado
}

?>