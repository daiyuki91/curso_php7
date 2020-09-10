<?php

$cep = "66640110";
$link = "http://viacep.com.br/ws/$cep/json/";


$ch = curl_init($link);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); //sem verificar certificado de segurança

$response = curl_exec($ch); //neste exemplo, o retorno do viacep é um JSON

curl_close($ch); //fecha a conexão

$data = json_decode($response, true);

print_r($data);

echo "<br>"; echo "<br>";

print_r($data["bairro"]);


?>