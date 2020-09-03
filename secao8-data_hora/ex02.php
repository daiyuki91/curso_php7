<?php

    //$ts = strtotime("1991-08-14");
    $ts = strtotime("now");
    echo date("l, d/m/Y",$ts)."<br>";
    
    $ts = strtotime("+1 day");
    echo date("l, d/m/Y",$ts)."<br>";

    $ts = strtotime("+1 week"); //é possível colocar +1 hour +1 second, etc
    echo date("l, d/m/Y",$ts)."<br>";


?>