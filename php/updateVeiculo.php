<?php

if (isset($_GET['id_vei'])) {
        include "conexao.php";

        function validate($data)
        {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }

        $id = validate($_GET['id_vei']);

        $sql = "SELECT * FROM veiculo WHERE id_vei = $id";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
                $row = mysqli_fetch_assoc($result);
        } else {
                header("Location: readVeiculo.php");
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

        $modelo = validate($_POST['modelo']);
        $cor = validate($_POST['cor']);
        $fabricante = validate($_POST['fabricante']);
        $ano = validate($_POST['ano']);
        $id = validate($_POST['id']);

        if (empty($modelo)) {
                echo "<script>
		window.location.href='../editaVeiculo.php?id_vei=$id';
		alert('Ops, informar o modelo é obrigatório!');
		</script>";
        } else if (empty($cor)) {
                echo "<script>
		window.location.href='../editaVeiculo.php?id_vei=$id';
		alert('Ops, informar a cor é obrigatório!');
		</script>";
        } else if (empty($fabricante)) {
                echo "<script>
		window.location.href='../editaVeiculo.php?id_vei=$id';
		alert('Ops, informar o fabricante é obrigatório!');
		</script>";
        } else if (empty($ano)) {
                echo "<script>
		window.location.href='../editaVeiculo.php?id_vei=$id';
		alert('Ops, informar o ano é obrigatório!');
		</script>";
        } else {

                $sql = "UPDATE veiculo
               SET modelo ='$modelo', cor='$cor', fabricante='$fabricante', ano='$ano'
               WHERE id_vei = $id ";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                        echo "<script>
                        window.location.href='../listaVeiculo.php';
                        alert('Cadastro de veículo editado com sucesso!');
                        </script>";
                } else {
                        echo "<script>
			window.location.href='../listaVeiculo.php';
			alert('Ops, algo deu errado!');
			</script>";
                }
        }
} else {
        header("Location: listaVeiculo.php");
}
