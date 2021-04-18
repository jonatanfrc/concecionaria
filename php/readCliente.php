<?php  

include "conexao.php";

$sql = "SELECT * FROM cliente ORDER BY id_cli DESC";
$result = mysqli_query($conn, $sql);