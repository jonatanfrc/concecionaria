<?php  

include "conexao.php";

$sql = "SELECT * FROM cliente ORDER BY id_cli ASC";
$result = mysqli_query($conn, $sql);