<?php

    $dt = new DateTime();

    echo $dt->format("d/m/Y H:i:s")."<br><br>"; //a variável dt é um objeto da classe DateTime

    //////////////////////////////////////////////////////////////////////////////////

    $periodo = new DateInterval("P15D"); //15 dias

    $dt->add($periodo); //somar $periodo
    echo $dt->format("d/m/Y H:i:s")."<br><br>"; //a variável dt é um objeto da classe DateTime

?>