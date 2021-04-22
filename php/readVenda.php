<?php

include "conexao.php";

$sql = "SELECT * FROM venda, cliente, vendedor, veiculo WHERE venda.id_ven = vendedor.id_ven and venda.id_cli = cliente.id_cli and venda.id_vei = veiculo.id_vei ORDER BY id_venda ASC";

$sqlVendedores = mysqli_query($conn, "SELECT id_ven, nome FROM vendedor;");

$Vendedores = $sqlVendedores->fetch_all(MYSQLI_ASSOC);

$sqlClientes = "SELECT id_cli, nomeCli FROM cliente;";

$Clientes = mysqli_query($conn, $sqlClientes);

$sqlVeiculos = "SELECT id_vei, modelo FROM veiculo;";

$Veiculos = mysqli_query($conn, $sqlVeiculos);

$result = mysqli_query($conn, $sql);
