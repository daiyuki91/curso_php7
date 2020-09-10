<form method="POST" enctype="multipart/form-data">

    <input type="file" name="fileUpload">

    <button type="submit">Send</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $file = $_FILES["fileUpload"];

    if($file["error"]) {
        throw new Exception("Error: ". $file["error"], 1);
        
    }
    
    //Observações sobre este diretório p/ receber os arquivos do upload
    //- precisa ter permissão de escrita
    //- não é bom ter arquivo .php, senão vai acabar sendo executado
    $dirUploads = "uploads";

    if ( !is_dir($dirUploads) ) {
        mkdir($dirUploads);
    }

    if ( move_uploaded_file($file["tmp_name"], $dirUploads . DIRECTORY_SEPARATOR . $file["name"]) ) {
        echo "Upload realizado com sucesso!";
    }
    else {
        throw new Exception("Não foi possível realizar o upload", 1);
        
    }

}

?>