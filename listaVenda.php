<?php include "php/readVenda.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<title>Lista de vendas</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header>
		<div class="caixa">
			<h1><img height="250" class="logoempresa" src="img/logoempresa.png"></h1>

			<nav>
				<ul>	
					<li><a href="index.php">Home</a></li>
					<li><a href="listaCliente.php">Clientes</a></li>
					<li><a href="listaVendedor.php">Vendedores</a></li>
					<li><a href="listaVeiculo.php">Veículos</a></li>
					<li><a href="listaVenda.php">Vendas</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Vendas</h4><br>
			<?php if (isset($_GET['Sucesso!'])) { ?>
				<div class="alert alert-success" role="alert">
					<?php echo $_GET['Sucesso!']; ?>
				</div>
			<?php } ?>
			<?php if (mysqli_num_rows($result)) { ?>
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Nome vendedor</th>
							<th scope="col">Nome cliente</th>
							<th scope="col">Nome veículo</th>
							<th scope="col">Anotações</th>
						</tr>
					</thead>
					<tbody>
						<?php
						$i = 0;
						while ($rows = mysqli_fetch_assoc($result)) {
							$i++;
						?>
							<tr>
								<th scope="row"><?= $i ?></th>
								<td><?= $rows['nome'] ?></td>
								<td><?php echo $rows['nomeCli']; ?></td>
								<td><?php echo $rows['modelo']; ?></td>
								<td><?php echo $rows['anotacoes']; ?></td>
								<td><a href="editaVenda.php?id_venda=<?= $rows['id_venda'] ?>" class="btn btn-success">Atualizar</a>

									<a href="php/deleteVenda.php?id_venda=<?= $rows['id_venda'] ?>" class="btn btn-danger">Deletar</a>
								</td>
							</tr>
						<?php } ?>
					</tbody>
				</table>
			<?php } ?>
			<div class="link-right">
				<a href="criaVenda.php" class="link-primary">Adicionar novo +</a>
			</div>
		</div>
	</div>
</body>

</html>