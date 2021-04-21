<?php include "php/readVenda.php"; ?>
<!DOCTYPE html>
<html>

<head>
	<title>Realizar venda</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>

<body class="scroll">
	<header>
		<div class="caixa">
			<h1><img height="220" class="logoempresa" src="img/logoempresa.png"></h1>

			<nav>
				<ul>
					<li><a href="index.php">Início</a></li>
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
		<form action="php/createVenda.php" method="post">

			<h4 class="display-4 text-center">Adicionar</h4>
			<hr><br>
			<?php if (mysqli_num_rows($result)) { ?>
			<?php if (isset($_GET['Erro!'])) { ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $_GET['Erro']; ?>
				</div>
			<?php } ?>
			<div>
				<?php
				$i = 0;
				while ($rows = mysqli_fetch_assoc($result)) {
					var_dump(json_encode($rows));
					$i++;
				?>
					<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
						<option selected>Vendedores</option>
						<option value="$id_ven"><?= $rows['nome'] ?></option>
					</select>
			</div>
		<?php } ?>
		<?php } ?>



		<button type="submit" class="btn btn-primary" name="create">Adicionar</button>
		<a href="listaVenda.php" class="retornar"> Voltar</a>
		</form>
	</div>
	</section>
</body>
</html>