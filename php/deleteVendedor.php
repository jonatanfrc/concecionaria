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
      echo "<script>
      window.location.href='../listaVendedor.php';
      alert('Cadastro de vendedor excluído com sucesso!');
      </script>";
   }else {
      echo "<script>
      window.location.href='../listaVendedor.php';
      alert('Ops, algo deu errado!');
      </script>";
   }

}else {
	header("Location: ../listaVendedor.php");
}