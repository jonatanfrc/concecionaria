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
      echo "<script>
      window.location.href='../listaVenda.php';
      alert('Cadastro de venda excluído com sucesso!');
      </script>";
   }else {
      echo "<script>
      window.location.href='../listaVenda.php';
      alert('Ops, algo deu errado!');
      </script>";
   }

}else {
	header("Location: ../listaVenda.php");
}