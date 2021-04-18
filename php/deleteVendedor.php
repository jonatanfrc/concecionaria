<?php  

if(isset($_GET['id_ven'])){
   include "conexao.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id_ven']);

	$sql = "DELETE FROM vendedor
	        WHERE id_ven = $id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../listaVendedor.php?success=Cliente excluído com sucesso!");
   }else {
      header("Location: ../listaVendedor.php?error=Oops! Algo deu errado.&$user_data");
   }

}else {
	header("Location: ../listaVendedor.php");
}