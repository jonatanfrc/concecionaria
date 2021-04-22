<?php 

if (isset($_POST['create'])) {
	include "conexao.php";
	function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
	}

	$modelo = validate($_POST['modelo']);
	$cor = validate($_POST['cor']);
	$fabricante = validate($_POST['fabricante']);
	$ano = validate($_POST['ano']);

	$user_data = 'modelo='.$modelo. '&cor='.$cor. '&fabricante='.$fabricante. '&ano='.$ano;

	if (empty($modelo)) {
		echo "<script>
		window.location.href='../criaVeiculo.php';
		alert('Ops, informar o modelo é obrigatório!');
		</script>";
	}else if (empty($cor)) {
		echo "<script>
		window.location.href='../criaVeiculo.php';
		alert('Ops, informar a cor é obrigatório!');
		</script>";
	}else if (empty($fabricante)) {
		echo "<script>
		window.location.href='../criaVeiculo.php';
		alert('Ops, informar o fabricante é obrigatório!');
		</script>";
	}else if (empty($ano)) {
		echo "<script>
		window.location.href='../criaVeiculo.php';
		alert('Ops, informar o ano é obrigatório!');
		</script>";
	}
	
	else {

       $sql = "INSERT INTO veiculo(modelo, cor, fabricante, ano) 
               VALUES('$modelo', '$cor', '$fabricante', '$ano')";
       $result = mysqli_query($conn, $sql);
       if ($result) {
		echo "<script>
		window.location.href='../listaVeiculo.php';
		alert('Cadastro de veículo adicionado com sucesso!');
		</script>";
       }else {
		echo "<script>
		window.location.href='../listaVeiculo.php';
		alert('Ops, algo deu errado!');
		</script>";
       }
	}

}