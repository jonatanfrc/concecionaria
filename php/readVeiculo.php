<?php  

include "conexao.php";

$sql = "SELECT * FROM veiculo ORDER BY id_vei ASC";
$result = mysqli_query($conn, $sql);