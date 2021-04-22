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

        $nome = validate($_POST['nomeCli']);
        $cpf = validate($_POST['cpf']);
        $telefone = validate($_POST['telefone']);
        $endereco = validate($_POST['endereco']);
        $id = validate($_POST['id']);

        if (empty($nome)) {
                echo "<script>
		window.location.href='../editaCliente.php?id_cli=$id';
		alert('Ops, informar o nome é obrigatório!');
		</script>";
        } else if (empty($cpf)) {
                echo "<script>
		window.location.href='../editaCliente.php?id_cli=$id';
		alert('Ops, informar o CPF é obrigatório!');
		</script>";
        } else if (empty($telefone)) {
                echo "<script>
		window.location.href='../editaCliente.php?id_cli=$id';
		alert('Ops, informar o telefone é obrigatório!');
		</script>";
        } else if (empty($endereco)) {
                echo "<script>
		window.location.href='../editaCliente.php?id_cli=$id';
		alert('Ops, informar o endereço é obrigatório!');
		</script>";
        } else {

                $sql = "UPDATE cliente
               SET nomeCli ='$nome', cpf='$cpf', telefone='$telefone', endereco='$endereco'
               WHERE id_cli = $id ";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                        echo "<script>
                        window.location.href='../listaCliente.php';
                        alert('Cadastro de cliente editado com sucesso!');
                        </script>";
                } else {
                        echo "<script>
			window.location.href='../listaCliente.php';
			alert('Ops, algo deu errado!');
			</script>";
                }
        }
} else {
        header("Location: listaCliente.php");
}
