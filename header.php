<!doctype html>
<?php
	// Report simple running errors
	error_reporting(E_ERROR | E_PARSE);
	include("lib/conexao.php");
?>
<html>
	<head>
		<title>LGerken - Desenvolvimento Web</title>
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="css/estilo.css" />
		<meta charset='utf-8' />
	</head>
	<body>
	
		<div class="header">
			<div class="linha">
				<header>
					<div class="coluna col4">
						<h1 class="logo">LGerken</h1>
					</div>
					<div class="coluna col8">
						<nav>
							<ul class="menu inline sem-marcador">
								<li><a href="index.php">home</a></li>
								<li><a href="clientes.php">clientes</a></li>
								<li><a href="servicos.php">serviços</a></li>
								<li><a href="sobre.php">sobre</a></li>
								<li><a href="contato.php">contato</a></li>
							</ul>
						</nav>
					</div>
				</header>
			</div>
		</div>
