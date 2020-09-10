<?php

//tentar os seguintes comandos
try {
    throw new Exception("Houve um erro", 400);
    
}

//capturar informações
catch (Exception $e) {
    echo json_encode(array(
        "message"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));
}

?>