<?php  

if(isset($_GET['id_venda'])){
   include "conexao.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id_venda']);

	$sql = "DELETE FROM venda
	        WHERE id_venda = $id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../listaVenda.php?success=Venda excluído com sucesso!");
   }else {
      header("Location: ../listaVenda.php?error=Oops! Algo deu errado.&$user_data");
   }

}else {
	header("Location: ../listaVenda.php");
}