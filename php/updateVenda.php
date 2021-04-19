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

        $sql = "SELECT * FROM cliente WHERE id_cli = $id";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        } else {
                header("Location: readCliente.php");
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
		header("Location: ../editaCliente.php?error=Nome é obrigatório&$user_data");
	}else if (empty($cpf)) {
		header("Location: ../editaCliente.php?error=CPF é obrigatório&$user_data");
	}else if (empty($telefone)) {
		header("Location: ../editaCliente.php?error=Telefone é obrigatório&$user_data");
	}else if (empty($endereco)) {
		header("Location: ../editaCliente.php?error=Endereço é obrigatório&$user_data");
	} else{

                $sql = "UPDATE cliente
               SET nome ='$nome', cpf='$cpf', telefone='$telefone', endereco='$endereco'
               WHERE id_cli = $id ";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                        header("Location: ../listaCliente.php?success=Cliente editado com sucesso!");
                } else {
                        header("Location: ../updateCliente.php?id=$id&error=Oops! Alguem deu errado.&$user_data");
                }
        }
} else {
        header("Location: listaCliente.php");
}
