<?php

$conn = new PDO("mysql:dbname=dbphp7;host=localhost","root","dai140891");

$stmt = $conn->prepare("SELECT * FROM tb_usuarios ORDER BY deslogin");

$stmt->execute();

//$results = $stmt->fetchAll();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC); //trazer só o associativo

foreach ($results as $row) {
    foreach ($row as $key => $value) { //key é o nome da coluna (campo na tabela)
        echo "<strong>".$key.":</strong>".$value."<br/>";
    }

    echo "=================================<br>";
}

//var_dump($results);

echo "<br>";

phpinfo();

?>