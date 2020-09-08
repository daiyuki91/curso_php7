<?php

//conectando ao banco de dados "dbphp7" que está no localhost

//endereço IP do banco de dados,
//usuário,
//senha,
//nome do banco de dados
$conn = new mysqli("localhost","root","dai140891","dbphp7");

if ($conn->connect_error) {
    echo "Error: " . $conn->connect_error;
}

///////////////////////////////////////////////////////////////

//consultando dados no banco de dados "dbphp7"

$result = $conn->query("SELECT * FROM tb_usuarios ORDER BY deslogin"); //result será uma resource

$data = array();

while ($row = $result->fetch_assoc()){ //enquanto tiver algum resultado, trás e armazena em row (até chegar no EOF)
    
    //var_dump($row);
    array_push($data,$row); //concatena oss dados do array $row no array $data
}

//transforma no formato de JSON
//- depois os dados podem ser consumidos através de JavaScript e outros
echo json_encode($data);

?>