<?php

if (isset($_GET['id_ven'])) {
        include "conexao.php";

        function validate($data)
        {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }

        $id = validate($_GET['id_ven']);

        $sql = "SELECT * FROM vendedor WHERE id_ven = $id";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        } else {
                header("Location: readVendedor.php");
        }
} else if (isset($_POST['update'])) {
        include "conexao.php";
        function validate($data)
        {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }

        $nome = validate($_POST['nome']);
	$cpf = validate($_POST['cpf']);
	$telefone = validate($_POST['telefone']);
	$endereco = validate($_POST['endereco']);
        $id = validate($_POST['id']);

        if (empty($nome)) {
		header("Location: ../editaVendedor.php?error=Nome é obrigatório&$user_data");
	}else if (empty($cpf)) {
		header("Location: ../editaVendedor.php?error=CPF é obrigatório&$user_data");
	}else if (empty($telefone)) {
		header("Location: ../editaVendedor.php?error=Telefone é obrigatório&$user_data");
	}else if (empty($endereco)) {
		header("Location: ../editaVendedor.php?error=Endereço é obrigatório&$user_data");
	} else{

                $sql = "UPDATE vendedor
               SET nome ='$nome', cpf='$cpf', telefone='$telefone', endereco='$endereco'
               WHERE id_ven = $id ";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                        header("Location: ../listaVendedor.php?success=Vendedor editado com sucesso!");
                } else {
                        header("Location: ../updateVendedor.php?id=$id&error=Oops! Algo deu errado.&$user_data");
                }
        }
} else {
        header("Location: listaVendedor.php");
}
