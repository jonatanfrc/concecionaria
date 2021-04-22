<?php 

if (isset($_POST['create'])) {
	include "conexao.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}


	$id_ven = validate($_POST['id_ven']);
	$id_cli = validate($_POST['id_cli']);
	$id_vei = validate($_POST['id_vei']);
	$anotacoes = validate($_POST['anotacoes']);

	$user_data = 'id_ven='.$id_ven. '&id_cli='.$id_cli. '&id_vei='.$id_vei. '&anotacoes='.$anotacoes;

	if (empty($id_ven)) {
		header("Location: ../listaVenda.php?error=Informar o vendedor é obrigatório&$user_data");
	}else if (empty($id_cli)) {
		header("Location: ../listaVenda.php?error=Informar o cliente é obrigatório&$user_data");
	}else if (empty($id_vei)) {
		header("Location: ../listaVenda.php?error=Informar o veículo é obrigatório&$user_data");
	}
	
	else {

       $sql = "INSERT INTO venda(id_ven, id_cli, id_vei, anotacoes) 
               VALUES('$id_ven', '$id_cli', '$id_vei', '$anotacoes')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../listaVenda.php");
       }else {
          header("Location: ../listaVenda.php?error&$user_data");
       }
	}

}