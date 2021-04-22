<?php

if (isset($_POST['create'])) {
	include "conexao.php";
	function validate($data)
	{
		$data = trim($data);
		$data = stripslashes($data);
		$data = htmlspecialchars($data);
		return $data;
	}

	$nome = validate($_POST['nome']);
	$cpf = validate($_POST['cpf']);
	$telefone = validate($_POST['telefone']);
	$endereco = validate($_POST['endereco']);

	$user_data = 'nome=' . $nome . '&cpf=' . $cpf . '&telefone=' . $telefone . '&endereco=' . $endereco;

	if (empty($nome)) {
		echo "<script>
		window.location.href='../criaVendedor.php';
		alert('Ops, informar o nome é obrigatório!');
		</script>";
	} else if (empty($cpf)) {
		echo "<script>
		window.location.href='../criaVendedor.php';
		alert('Ops, informar o CPF é obrigatório!');
		</script>";
	} else if (empty($telefone)) {
		echo "<script>
		window.location.href='../criaVendedor.php';
		alert('Ops, informar o telefone é obrigatório!');
		</script>";
	} else if (empty($endereco)) {
		echo "<script>
		window.location.href='../criaVendedor.php';
		alert('Ops, informar o endereço é obrigatório!');
		</script>";
	} else {

		$sql = "INSERT INTO vendedor(nome, cpf, telefone, endereco) 
               VALUES('$nome', '$cpf', '$telefone', '$endereco')";
		$result = mysqli_query($conn, $sql);
		if ($result) {
			echo "<script>
		window.location.href='../listaVendedor.php';
		alert('Cadastro de vendedor adicionado com sucesso!');
		</script>";
		} else {
			echo "<script>
			window.location.href='../listaVendedor.php';
			alert('Ops, algo deu errado!');
			</script>";
		}
	}
}
