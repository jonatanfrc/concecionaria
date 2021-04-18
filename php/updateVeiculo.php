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
                header("Location: readVeiuclo.php");
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
                header("Location: ../editaVeiculo.php?error=Modelo é obrigatório&$user_data");
        } else if (empty($cor)) {
                header("Location: ../editaVeiculo.php?error=Cor é obrigatório&$user_data");
        } else if (empty($fabricante)) {
                header("Location: ../editaVeiculo.php?error=Fabricante é obrigatório&$user_data");
        } else if (empty($ano)) {
                header("Location: ../editaVeiculo.php?error=Ano é obrigatório&$user_data");
        } else {

                $sql = "UPDATE veiculo
               SET modelo ='$modelo', cor='$cor', fabricante='$fabricante', ano='$ano'
               WHERE id_vei = $id ";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                        header("Location: ../listaVeiculo.php?success=Veículo editado com sucesso!");
                } else {
                        header("Location: ../updateVeiculo.php?id=$id&error=Oops! Alguem deu errado.&$user_data");
                }
        }
} else {
        header("Location: listaVeiculo.php");
}
