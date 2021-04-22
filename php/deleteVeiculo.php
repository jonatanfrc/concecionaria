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
      echo "<script>
      window.location.href='../listaVeiculo.php';
      alert('Cadastro de veículo excluído com sucesso!');
      </script>";
   }else {
      echo "<script>
      window.location.href='../listaVeiculo.php';
      alert('Ops, algo deu errado!');
      </script>";
   }

}else {
   echo "<script>
   window.location.href='../listaVeiculo.php';
   alert('Ops, algo deu errado!');
   </script>";
}