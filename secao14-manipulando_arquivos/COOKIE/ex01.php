<?php

$data = array(
    "empresa"=>"Hcode Treinamentos"
);

setcookie("NOME_DO_COOKIE", json_encode($data), time() + 3600); //último de parâmetro em segundos

?>