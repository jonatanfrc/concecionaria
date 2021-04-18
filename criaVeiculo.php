<!DOCTYPE html>
<html>
<head>
	<title>Cadastrar Veículo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/createVeiculo.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Adicionar</h4><hr><br>
		   <?php if (isset($_GET['Erro!'])) { ?>
		   <div class="alert alert-danger" role="alert">
			  <?php echo $_GET['Erro']; ?>
		    </div>
		   <?php } ?>
		   <div class="form-group">
		     <label for="modelo">Modelo</label>
		     <input type="text" 
		           class="form-control" 
		           id="modelo" 
		           name="modelo" 
		           value="<?php if(isset($_GET['modelo']))
		                           echo($_GET['modelo']); ?>" 
		           placeholder="Digite o modelo do veículo">
		   </div>

		   <div class="form-group">
		     <label for="cor">Cor</label>
		     <input type="text" 
		           class="form-control" 
		           id="cor" 
		           name="cor" 
		           value="<?php if(isset($_GET['cor']))
		                           echo($_GET['cor']); ?>"
		           placeholder="Digite o cor do veículo">
		   </div>

		   <div class="form-group">
		     <label for="fabricante">Fabricante</label>
		     <input type="text" 
		           class="form-control" 
		           id="fabricante" 
		           name="fabricante" 
		           value="<?php if(isset($_GET['fabricante']))
		                           echo($_GET['fabricante']); ?>"
		           placeholder="Digite o fabricante do veículo">
		   </div>

		   <div class="form-group">
		     <label for="ano">Ano</label>
		     <input type="text" 
		           class="form-control" 
		           id="ano" 
		           name="ano" 
		           value="<?php if(isset($_GET['ano']))
		                           echo($_GET['ano']); ?>"
		           placeholder="Digite o ano do veículo">
		   </div>

		   <button type="submit" 
		          class="btn btn-primary"
		          name="create">Criar</button>
		    <a href="listaVeiculo.php" class="link-primary"> Ver lista de veículos</a>
	    </form>
	</div>
</body>
</html>