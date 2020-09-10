<?php

$images = scandir("images"); //retorna um array
//var_dump($images); //ver o formato do array

$data = array();

foreach ($images as $img) {
    if ( !in_array($img,array(".","..")) ) { //pulando "." e ".."

        $filename = "images" . DIRECTORY_SEPARATOR . $img;

        $info = pathinfo($filename);
        //var_dump($info);

        $info["size"] = filesize($filename);
        $info["modified"] = date("d/m/Y H:i:s", filemtime($filename));
        $info["url"] = "http://localhost/secao14-manipulando_arquivos/DIR/" .str_replace("\\","/",$filename);

        array_push($data, $info);

    }
}

echo json_encode($data);

?>