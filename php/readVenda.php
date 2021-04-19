<?php  

include "conexao.php";

$sql = "SELECT * FROM venda, cliente, vendedor, veiculo WHERE venda.id_ven = vendedor.id_ven and venda.id_cli = cliente.id_cli and venda.id_vei = veiculo.id_vei ORDER BY id_venda ASC";

$nomeVendedores = "SELECT * FROM venda, vendedor WHERE venda.nome = vendedor.nome";

$result = mysqli_query($conn, $sql);
