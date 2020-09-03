<?php
    /* JSON (part2) */


    $json = '[{"nome":"Daiyuki","idade":29},{"nome":"Hideyuki","idade":25}]';

    $data = json_decode($json,true); //parâmetro true -> considera como array

    var_dump($data);

?>