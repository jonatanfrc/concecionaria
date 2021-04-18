<?php 

if (isset($_POST['create'])) {
	include "conexao.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$modelo = validate($_POST['modelo']);
	$cor = validate($_POST['cor']);
	$fabricante = validate($_POST['fabricante']);
	$ano = validate($_POST['ano']);

	$user_data = 'modelo='.$modelo. '&cor='.$cor. '&fabricante='.$fabricante. '&ano='.$ano;

	if (empty($modelo)) {
		header("Location: ../listaVeiculo.php?error=Modelo é obrigatório&$user_data");
	}else if (empty($cor)) {
		header("Location: ../listaVeiculo.php?error=Cor é obrigatório&$user_data");
	}else if (empty($fabricante)) {
		header("Location: ../listaVeiculo.php?error=Fabricante é obrigatório&$user_data");
	}else if (empty($ano)) {
		header("Location: ../listaVeiculo.php?error=Ano é obrigatório&$user_data");
	}
	
	else {

       $sql = "INSERT INTO veiculo(modelo, cor, fabricante, ano) 
               VALUES('$modelo', '$cor', '$fabricante', '$ano')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
       	  header("Location: ../listaVeiculo.php");
       }else {
          header("Location: ../listaVeiculo.php?error&$user_data");
       }
	}

}