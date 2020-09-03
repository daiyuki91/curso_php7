<?php

    function ola($texto = "mundo", $periodo="Bom dia") {
        return "olá $texto! $periodo!<br>";
    }

    echo ola();
    echo ola("","Boa noite");
    echo ola("Fujiyoshi", "Boa tarde");
    echo ola("Maia", "");

?>