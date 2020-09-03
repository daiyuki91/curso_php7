<?php
    
    //tipos básicos ---------
    $nome = "Hcode";
    $site = 'www.hcode.com.br';

    $ano = 1990;
    $salario = 5500.99;
    $bloqueado = false;

    //////////////////////////////////////////////

    //tipos compostos ----------

    //arrays (vetores)
    $frutas = array("açaí","cupuaçu","abacate");

    echo $frutas[0];
    echo "</br>";

    //orientação a objeto
    $nascimento = new DateTime(); //classe DateTime

    //var_dump($nascimento); //mostrar detalhes do objeto

    //////////////////////////////////////////////

    //tipos especiais ----------

    $arquivo = fopen("ex03.php","r");

    //var_dump($arquivo);

    $nulo = NULL;   //ausência de valores (não preenche quant de memória)
    $vazio = "";    //a variável foi inicializada mas está sem conteúdo (preenche quant de memória)

    var_dump($nulo);
    var_dump($vazio);

?>