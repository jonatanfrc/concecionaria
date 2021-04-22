<?php
if (isset($_GET['id_venda'])) {
        include "conexao.php";

        $sqlVendedores = mysqli_query($conn, "SELECT id_ven, nome FROM vendedor;");

        $Vendedores = $sqlVendedores->fetch_all(MYSQLI_ASSOC);

        $sqlClientes = "SELECT id_cli, nomeCli FROM cliente;";

        $Clientes = mysqli_query($conn, $sqlClientes);

        $sqlVeiculos = "SELECT id_vei, modelo FROM veiculo;";

        $Veiculos = mysqli_query($conn, $sqlVeiculos);

        function validate($data)
        {
                $data = trim($data);
                $data = stripslashes($data);
                $data = htmlspecialchars($data);
                return $data;
        }

        $id = validate($_GET['id_venda']);

        $sql = "SELECT * FROM venda WHERE id_venda = $id";

        $result = mysqli_query($conn, $sql);

        $resultado = mysqli_fetch_array($result);

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

        $id_ven = validate($_POST['id_ven']);
        $id_cli = validate($_POST['id_cli']);
        $id_vei = validate($_POST['id_vei']);
        $anotacoes = validate($_POST['anotacoes']);

        if (empty($id_ven)) {
                header("Location: ../listaVenda.php?error=Informar o vendedor é obrigatório&$user_data");
        } else if (empty($id_cli)) {
                header("Location: ../listaVenda.php?error=Informar o cliente é obrigatório&$user_data");
        } else if (empty($id_vei)) {
                header("Location: ../listaVenda.php?error=Informar o veículo é obrigatório&$user_data");
        } else {
                $salvaVenda = "UPDATE venda
                SET id_ven ='$id_ven', id_cli='$id_cli', id_vei='$id_vei', anotacoes='$anotacoes'
                WHERE id_venda = $id ";
                $result = mysqli_query($conn, $salvaVenda);
                var_dump($result);
                if ($result) {
                        header("Location: ../listaVenda.php?success=Venda editada com sucesso!");
                } else {
                        header("Location: ../editaVenda.php?id=$id&error=Oops! Algo deu errado.&$user_data");
                }
        }
} else {
        header("Location: listaVenda.php?success=teste!");
}