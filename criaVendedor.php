<?php include('php/verifica_login.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Vendedor</title>
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
	<section class="grade">
	<div class="container">
		<form action="php/createVendedor.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Adicionar</h4><hr><br>
		   <?php if (isset($_GET['Erro!'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['Erro']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="nome">Nome</label>
		     <input type="text" 
		           class="form-control" 
		           id="nome" 
		           name="nome" 
		           value="<?php if(isset($_GET['nome']))
		                           echo($_GET['nome']); ?>" 
		           placeholder="Digite o nome do vendedor">
		   </div>

		   <div class="form-group">
		     <label for="cpf">CPF</label>
		     <input type="text" 
		           class="form-control" 
		           id="cpf" 
		           name="cpf" 
		           value="<?php if(isset($_GET['cpf']))
		                           echo($_GET['cpf']); ?>"
		           placeholder="Digite o CPF do vendedor">
		   </div>

		   <div class="form-group">
		     <label for="telefone">Telefone</label>
		     <input type="text" 
		           class="form-control" 
		           id="telefone" 
		           name="telefone" 
		           value="<?php if(isset($_GET['telefone']))
		                           echo($_GET['telefone']); ?>"
		           placeholder="Digite o telefone do vendedor">
		   </div>

		   <div class="form-group">
		     <label for="endereco">Endereço</label>
		     <input type="text" 
		           class="form-control" 
		           id="endereco" 
		           name="endereco" 
		           value="<?php if(isset($_GET['endereco']))
		                           echo($_GET['endereco']); ?>"
		           placeholder="Digite o Endereço do vendedor">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Adicionar</button>
		    <a href="listaVendedor.php" class="retornar"> Voltar</a>
	    </form>
	</div>
	</section>
</body>
</html>