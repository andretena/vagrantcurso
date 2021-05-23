<?php
echo "Teste de conexão<br /> <br />";
$servername = "192.168.15.21";
$username = "phpuser"
$password "pass"


$conn = new mysqli($servername, $username, $password);


if($conn->connect_error) {
    die("Conexão falhou: ". $conn->connect_error);
}
echo "Conectado com sucesso";
?>