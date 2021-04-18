<?php  

include "conexao.php";

$sql = "SELECT * FROM veiculo ORDER BY id_vei DESC";
$result = mysqli_query($conn, $sql);