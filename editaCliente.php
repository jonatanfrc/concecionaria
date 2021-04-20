<?php include 'php/updateCliente.php'; ?>
<!DOCTYPE html>
<html>

<head>
	<title>Editar cliente</title>
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
	<section class="grade">
	<div class="container">
		<form action="php/updateCliente.php" method="post">

			<h4 class="display-4 text-center">Editar</h4>
			<hr><br>
			<?php if (isset($_GET['Erro!'])) { ?>
				<div class="alert alert-danger" role="alert">
					<?php echo $_GET['Erro']; ?>
				</div>
			<?php } ?>
			<div class="form-group">
				<label for="nome">Nome</label>
				<input type="text" class="form-control" id="nome" name="nome" value="<?= $row['nomeCli'] ?>">
			</div>

			<div class="form-group">
				<label for="cpf">CPF</label>
				<input type="text" class="form-control" id="cpf" name="cpf" value="<?= $row['cpf'] ?>">
			</div>

			<div class="form-group">
				<label for="telefone">Telefone</label>
				<input type="text" class="form-control" id="telefone" name="telefone" value="<?= $row['telefone'] ?>">
			</div>

			<div class="form-group">
				<label for="endereco">Endereço</label>
				<input type="text" class="form-control" id="endereco" name="endereco" value="<?= $row['endereco'] ?>">
			</div>
			<input type="text" name="id" value="<?= $row['id_cli'] ?>" hidden>

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Editar</button>
		    <a href="listaCliente.php" class="retornar">Voltar</a>
	    </form>
	</div>
	</section>
</body>

</html>