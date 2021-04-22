<?php include 'php/updateVenda.php'; ?>
<?php include('php/verifica_login.php'); ?>
<!DOCTYPE html>
<html>

<head>
	<title>Editar venda</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
</head>

<body>
	<header>
	<h3 class="logout"><a href="php/logout.php">LOGOUT</a></h3>
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
	<section class="grade">
	<div class="container">
		<form action="php/updateVenda.php" method="post">

			<h4 class="display-4 text-center">Editar</h4>
			<hr><br>
			<?php if (isset($_GET['Erro!'])) { ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $_GET['Erro']; ?>
				</div>
			<?php } ?>


			<label>Vendedores</label>
			<select name="id_ven">
				<option disabled>Selecione</option>
				<?php foreach ($Vendedores as $vendedores) : ?>
					<option value="<?php echo $vendedores['id_ven']; ?>" <?php if ($vendedores['id_ven'] == $resultado['id_ven']) echo 'selected="selected"'; ?>><?php echo $vendedores['nome']; ?></option>
				<?php endforeach; ?>
			</select>

			<label>Clientes</label>
			<select name="id_cli">
				<option disabled>Selecione</option>
				<?php foreach ($Clientes as $cliente) : ?>
					<option value="<?php echo $cliente['id_cli']; ?>" <?php if ($cliente['id_cli'] == $resultado['id_cli']) echo 'selected="selected"'; ?>><?php echo $cliente['nomeCli']; ?></option>
				<?php endforeach; ?>
			</select>

			<label>Veículos</label>
			<select name="id_vei">
				<option disabled>Selecione</option>
				<?php foreach ($Veiculos as $veiculo) : ?>
					<option value="<?php echo $veiculo['id_vei']; ?>" <?php if ($veiculo['id_vei'] == $resultado['id_vei']) echo 'selected="selected"'; ?>><?php echo $veiculo['modelo']; ?></option>
				<?php endforeach; ?>
			</select>

			<div class="mb-3">
				<label for="exampleFormControlTextarea1" class="form-label">Anotações: </label>
				<textarea id="anotacoes" value="<?=$resultado['anotacoes'] ?>" class="form-control" id="anotacoes" rows="3"><?php echo $resultado['anotacoes']; ?></textarea>
			</div>

			<button type="submit" class="btn btn-primary" name="update">Editar</button>
			<a href="listaVenda.php" class="retornar">Voltar</a>
		</form>
	</div>
	</section>
</body>

</html>