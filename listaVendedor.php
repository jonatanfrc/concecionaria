<?php include "php/readVendedor.php"; ?>
<?php include "php/conexao.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Lista de vendedores</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
</head>
<body class="scroll">	
<header>
<h3 class="logout"><a href="php/logout.php">LOGOUT</a></h3>
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
	<section class="mapa">
	<div class="container">
		<div class="box">
			<h4 class="display-4 text-center">Vendedores</h4><br>
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
			      <th scope="col">Nome</th>
			      <th scope="col">CPF</th>
			      <th scope="col">Telefone</th>
			      <th scope="col">Endereço</th>
			    </tr>
			  </thead>
			  <tbody>
			  	<?php 
			  	   $i = 0;
			  	   while($rows = mysqli_fetch_assoc($result)){
			  	   $i++;
			  	 ?>
			    <tr>
			      <th scope="row"><?=$i?></th>
			      <td><?=$rows['nome']?></td>
			      <td><?php echo $rows['cpf']; ?></td>
			      <td><?php echo $rows['telefone']; ?></td>
			      <td><?php echo $rows['endereco']; ?></td>
			      <td><a href="editaVendedor.php?id_ven=<?=$rows['id_ven']?>" 
			      	     class="btn btn-success">Editar</a>

			      	  <a href="php/deleteVendedor.php?id_ven=<?=$rows['id_ven']?>" 
			      	     class="btn btn-danger">Excluir</a>
			      </td>
			    </tr>
			    <?php } ?>
			  </tbody>
			</table>
			<?php } ?>
			<div class="link-right">
				<a href="criaVendedor.php" class="link-primary">Adicionar novo +</a>
			</div>
		</div>
	</div>
	</section>
</body>
</html>