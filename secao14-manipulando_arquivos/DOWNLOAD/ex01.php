<?php

$link = "https://www.google.com/images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";

//buscando o conteúdo bruto
$content = file_get_contents($link);

//interpretando o contrúdo bruto
$parse = parse_url($link);

//var_dump($parse); //informações completas
//var_dump(basename($parse["path"])); //só o nome do arquivo
$basename = basename($parse["path"]);

$file = fopen($basename, "w+");
fwrite($file, $content); //escrevendo o conteúdo bruto no arquivo $basename
fclose($file);

?>

<img src="<?=$basename?>">