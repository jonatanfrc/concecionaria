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

        $id = validate($_POST['id']);
        $id_ven = validate($_POST['id_ven']);
        $id_cli = validate($_POST['id_cli']);
        $id_vei = validate($_POST['id_vei']);
        $anotacoes = validate($_POST['anotacoes']);

        if (empty($id_ven)) {
                echo "<script>
		window.location.href='../editaVenda.php?id_venda=$id';
		alert('Ops, informar o vendedor é obrigatório!');
		</script>";
        } else if (empty($id_cli)) {
                echo "<script>
		window.location.href='../editaVenda.php?id_venda=$id';
		alert('Ops, informar o cliente é obrigatório!');
		</script>";
        } else if (empty($id_vei)) {
                echo "<script>
		window.location.href='../editaVenda.php?id_venda=$id';
		alert('Ops, informar o veículo é obrigatório!');
		</script>";
        } else {
                $salvaVenda = "UPDATE venda
                SET id_ven ='$id_ven', id_cli='$id_cli', id_vei='$id_vei', anotacoes='$anotacoes'
                WHERE id_venda = $id ";
                $result = mysqli_query($conn, $salvaVenda);
                var_dump($result);
                if ($result) {
                        echo "<script>
                        window.location.href='../listaVenda.php';
                        alert('Cadastro de venda editado com sucesso!');
                        </script>";
                } else {
                        echo "<script>
			window.location.href='../listaVenda.php';
			alert('Ops, algo deu errado!');
			</script>";
                }
        }
} else {
        header("Location: listaVenda.php");
}
