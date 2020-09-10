<?php

require_once("config.php");

$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios ORDER BY deslogin");

//print_r($usuarios); //visualizar o array

////////////////////////////////////////////////////////////////////////

$headers = array();

foreach ($usuarios[0] as $key => $value) {
    array_push($headers,ucfirst($key));
}

//print_r($headers); //verificar $headers

$file = fopen("usuarios.csv","w+");

fwrite($file, implode(",",$headers) . "\r\n"); //inserir o separador ","

foreach ($usuarios as $row) { //foreach das linhas
    
    $data = array();

    foreach ($row as $key => $value) { //foreach das colunas
        
        array_push($data,$value);

    }//end foreach de coluna

    fwrite($file, implode(",",$data) . "\r\n");

}//end foreach de linha

fclose($file);

?>