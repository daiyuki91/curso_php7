<?php

//$file = fopen("log.txt","w+"); //variável do tipo resource
$file = fopen("log.txt","a+"); //variável do tipo resource

fwrite($file, date("Y-m-d H:i:s"). "\r\n");

fclose($file);

echo "Arquivo criado com sucesso!";

?>