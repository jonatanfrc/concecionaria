<?php  

if(isset($_GET['id_cli'])){
   include "conexao.php";
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$id = validate($_GET['id_cli']);

	$sql = "DELETE FROM cliente
	        WHERE id_cli = $id";
   $result = mysqli_query($conn, $sql);
   if ($result) {
   	  header("Location: ../listaCliente.php?success=Cliente excluído com sucesso!");
   }else {
      header("Location: ../listaCliente.php?error=Oops! Algo deu errado.&$user_data");
   }

}else {
	header("Location: ../listaCliente.php");
}