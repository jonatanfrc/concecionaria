<?php 

if (isset($_POST['create'])) {
	include "conexao.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$nome = validate($_POST['nome']);
	$cpf = validate($_POST['cpf']);
	$telefone = validate($_POST['telefone']);
	$endereco = validate($_POST['endereco']);

	$user_data = 'nome='.$nome. '&cpf='.$cpf. '&telefone='.$telefone. '&endereco='.$endereco;

	if (empty($nome)) {
		header("Location: ../ListaCliente.php?error=Nome é obrigatório&$user_data");
	}else if (empty($cpf)) {
		header("Location: ../ListaCliente.php?error=CPF é obrigatório&$user_data");
	}else if (empty($telefone)) {
		header("Location: ../ListaCliente.php?error=Telefone é obrigatório&$user_data");
	}else if (empty($endereco)) {
		header("Location: ../ListaCliente.php?error=Endereço é obrigatório&$user_data");
	}
	
	else {

       $sql = "INSERT INTO cliente(nome, cpf, telefone, endereco) 
               VALUES('$nome', '$cpf', '$telefone', '$endereco')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../listaCliente.php");
       }else {
          header("Location: ../listaCliente.php?error&$user_data");
       }
	}

}