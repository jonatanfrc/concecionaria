<?php include 'php/updateVeiculo.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>Editar veículo</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
	<div class="container">
		<form action="php/updateVeiculo.php" 
		      method="post">
            
		   <h4 class="display-4 text-center">Editar</h4><hr><br>
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
		           value="<?=$row['modelo'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="cor">Cor</label>
		     <input type="text" 
		           class="form-control" 
		           id="cor" 
		           name="cor" 
		           value="<?=$row['cor'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="fabricante">Fabricante</label>
		     <input type="text" 
		           class="form-control" 
		           id="fabricante" 
		           name="fabricante" 
		           value="<?=$row['fabricante'] ?>" >
		   </div>

		   <div class="form-group">
		     <label for="ano">Ano</label>
		     <input type="text" 
		           class="form-control" 
		           id="ano" 
		           name="ano" 
		           value="<?=$row['ano'] ?>" >
		   </div>
		   <input type="text" 
		          name="id"
		          value="<?=$row['id_vei']?>"
		          hidden >

		   <button type="submit" 
		           class="btn btn-primary"
		           name="update">Editar</button>
		    <a href="listaVeiculo.php" class="link-primary">Voltar</a>
	    </form>
	</div>
</body>
</html>