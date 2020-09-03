<?php

session_id('5p9d1oev022j3n9b4tbgevgrpe');    

require_once("config.php");

    session_regenerate_id();

    echo session_id();

    var_dump($_SESSION)

?>