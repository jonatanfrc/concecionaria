<?php include "php/conexao.php"; ?>
<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width">

		<title>Concessionária Razor</title>
		<link rel="stylesheet" href="css/reset.css">
		<link rel="stylesheet" href="css/style.css">
		<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
	</head>

	<body>
		<header>
			<div class="caixa">
				<h1><img height="250" class="logoempresa" src="img/logoempresa.png"></h1>

				<nav>
					<ul>
						<li><a href="index.php">Início</a></li>
						<li><a href="listaCliente.php">Clientes</a></li>
						<li><a href="listaVendedor.php">Vendedores</a></li>
						<li><a href="listaVeiculo.php">Veículos</a></li>
						<li><a href="listaVenda.php">Vendas</a></li>
						<li><a href="contato.html"></a></li>
					</ul>
				</nav>
			</div>
		</header>

		<section class="mapace">
		<center>
		<img class="banner" src="img/dentroConcessionaria.jpg">
		</center>
		</section>

	<main>
		<section class="principal">
			<h2 class="titulo-principal">Informações</h2>
	 
			<p>Página designada para a empresa-cliente Razor, conforme o pedido realizado, uma página para controlar e organizar os dados de forma fácil e eficiente.</p>
			<p>Com isso pode-se realizar a consulta, edição, adição e exclusão daquilo que for desejado, sendo clientes, vendedores, veículos e vendas.</p>
			<p>Proteção realizada pelo processo necessário de log-in para a utilização do domínio.</p>
			<p id="missao"> <strong>Para mais informações/ajuda contate um superior.</strong></p>

		</section>

		<section class="mapa">
            <h3 class="titulo-principal">Localização</h3>
            <p> Nosso estabelecimento está localizado no seguinte endereço </p>

            <div class="mapa-conteudo">
				<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d923.4034696269206!2d-49.973866834599804!3d-22.21677559577686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94bfd706627c6987%3A0x4beb72b551a2b8c!2zQ29uZG9tw61uaW8gVMOibmdlcg!5e0!3m2!1spt-BR!2sbr!4v1618794114180!5m2!1spt-BR!2sbr" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>
            </div>
        </section>

	</main>

		<footer class="footerEnd">
			<img src="img/logoempresa.png" height="200">
			<p class="copyright">&copy; Copyright Concessionária Razor - 2021</p>
		</footer>
		
	</body>
</html>
