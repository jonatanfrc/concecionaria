<?php

if (isset($_POST['create'])) {
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

    $user_data = 'id_ven=' . $id_ven . '&id_cli=' . $id_cli . '&id_vei=' . $id_vei . '&anotacoes=' . $anotacoes;

    if (empty($id_ven)) {
        echo "<script>
		window.location.href='../criaVenda.php';
		alert('Ops, informar o vendedor é obrigatório!');
		</script>";
    } else if (empty($id_cli)) {
        echo "<script>
		window.location.href='../criaVenda.php';
		alert('Ops, informar o cliente é obrigatório!');
		</script>";
    } else if (empty($id_vei)) {
        echo "<script>
		window.location.href='../criaVenda.php';
		alert('Ops, informar o veículo é obrigatório!');
		</script>";
    } else {

        $sql = "INSERT INTO venda(id_ven, id_cli, id_vei, anotacoes) 
               VALUES('$id_ven', '$id_cli', '$id_vei', '$anotacoes')";
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo "<script>
            window.location.href='../listaVenda.php';
            alert('Cadastro de venda adicionado com sucesso!');
            </script>";
        } else {
            echo "<script>
			window.location.href='../listaVenda.php';
			alert('Ops, algo deu errado!');
			</script>";
        }
    }
}
