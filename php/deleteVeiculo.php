<?php  

if(isset($_GET['id_vei'])){
   include "conexao.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id_vei']);

	$sql = "DELETE FROM veiculo
	        WHERE id_vei = $id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../listaVeiculo.php?success=Veículo excluído com sucesso!");
   }else {
      header("Location: ../listaVeiculo.php?error=Oops! Algo deu errado.&$user_data");
   }

}else {
	header("Location: ../listaVeiculo.php");
}