<?php include "php/readVenda.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<title>Realizar venda</title>
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
		<form action="php/createVenda.php" method="post">

			<h4 class="display-4 text-center">Adicionar</h4>
			<hr><br>
			<?php if (mysqli_num_rows($result)) { ?>
				<?php if (isset($_GET['Erro!'])) { ?>
					<div class="alert alert-danger" role="alert">
						<?php echo $_GET['Erro']; ?>
					</div>
				<?php } ?>
					<label>Vendedores</label>
					<select name="id_ven">
						<option selected disabled>Selecione</option>
						<?php
						foreach ($Vendedores as $vendedor) { ?>
							<option id="nome" name="nome" value="<?php echo $vendedor['id_ven'] ?>">
								<?php echo $vendedor['nome']; ?></option>
						<?php } ?>
					</select>
					
					<label>Clientes</label>
					<select name="id_cli">
						<option selected disabled>Selecione</option>
						<?php
						foreach ($Clientes as $cliente) { ?>
							<option id="nomeCli" name="nomeCli" value="<?php echo $cliente['id_cli'] ?>">
								<?php echo $cliente['nomeCli']; ?></option>
						<?php } ?>
					</select>

					<label>Veículos</label>
					<select name="id_vei">
						<option selected disabled>Selecione</option>
						<?php
						foreach ($Veiculos as $veiculo) { ?>
							<option id="modelo" name="modelo" value="<?php echo $veiculo['id_vei'] ?>">
								<?php echo $veiculo['modelo']; ?></option>
						<?php } ?>
					</select>

					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label">Anotações: </label>
						<textarea id="anotacoes" name="anotacoes" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
				<?php } ?>
				<button type="submit" class="btn btn-primary" name="create">Finalizar venda</button>
				<a href="listaVenda.php" class="link-primary"> Voltar</a>
		</form>
	</div>
</body>

</html>