<?php

$filename = "usuarios.csv";

if ( file_exists($filename) ) {

    $file = fopen($filename,"r");

    $headers = explode(",",fgets($file)); //string para array (reconhecendo a separação por ",")

    //var_dump($headers);

    $data = array();

    while( $row = fgets($file) ) {

        $row = explode(",",$row);
        $linha = array();

        for ($i=0; $i<count($headers);$i++) {
            $linha[$headers[$i]] = $row[$i];
        }

        array_push($data, $linha);

    }

    fclose($file);

    echo json_encode($data);

}
else {
    echo "Não existe o arquivo $filename";
}

?>