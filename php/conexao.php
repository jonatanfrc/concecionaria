<?php  

$name = "localhost";
$user = "root";
$password = "";

$db_name = "concessionaria";

$conn  = mysqli_connect($name, $user, $password, $db_name);

if (!$conn) {
	echo "Conexão falhou!";
}