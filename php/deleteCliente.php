<?php

if (isset($_GET['id_cli'])) {
   include "conexao.php";
   function validate($data)
   {
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
      echo "<script>
      window.location.href='../listaCliente.php';
      alert('Cadastro de cliente excluído com sucesso!');
      </script>";
   } else {
      echo "<script>
      window.location.href='../listaCliente.php';
      alert('Ops, algo deu errado!');
      </script>";
   }
} else {
   echo "<script>
   window.location.href='../listaCliente.php';
   alert('Ops, algo deu errado!');
   </script>";
}
