<?php  

include "conexao.php";

$sql = "SELECT * FROM vendedor ORDER BY id_ven ASC";
$result = mysqli_query($conn, $sql);