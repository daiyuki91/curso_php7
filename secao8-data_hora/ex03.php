<?php

    //LC_ALL -> mude toda a configuação de tempo para o seguinte padrão
    // - pt_BR -> código para LINUX
    // - pt_BR.utf-8 -> código para LINUX considerando UTF-8
    // - portuguese -> código para WINDOWS
    setlocale(LC_ALL,"pt_BR","pt_BR.utf-8","portuguese");

    echo ucwords(strftime("%A %B"));

?>