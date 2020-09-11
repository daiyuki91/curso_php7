<?php

$image = imagecreatefromjpeg("certificado.jpg");

$titleColor = imagecolorallocate($image, 0, 0, 0);
$gray = imagecolorallocate($image, 100, 100, 100);

/*
    Mais estilos de fontes em google.com/fonts
*/


imagettftext($image, 32, 0, 320, 250, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Bevan".DIRECTORY_SEPARATOR."Bevan-Regular.ttf", "CERTIFICADO");
imagettftext($image, 32, 0, 355, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts".DIRECTORY_SEPARATOR."Playball".DIRECTORY_SEPARATOR."Playball-Regular.ttf", "Daiyuki Fujiyoshi");
imagestring($image, 3, 400, 370, utf8_decode("Concluído em: ") . date("d/m/Y"), $titleColor);

header("Content-type: image/jpeg");
imagejpeg($image, "certificado-".date("Y-m-d").".jpg", 80); //alterando a resolução da imagem

imagedestroy($image);

?>