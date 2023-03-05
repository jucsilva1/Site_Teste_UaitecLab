<?php
	// Constant
	
	define("SERVER_DB","localhost");
	define("USER_DB","root");
	define("PASS_DB","");
	define("DATABASE_DB","db_lgerken");
	
	// Mensagens de Erro
	$msg[0] = "Conexão com o banco falhou!";
	$msg[1] = "Não foi possível selecionar o banco de dados!";

	// Fazendo a conexão com o servidor MySQL
	$conexao = mysqli_connect(SERVER_DB,USER_DB,PASS_DB) or die($msg[0]);
	
	// Selecionando Banco
	mysqli_select_db($conexao, DATABASE_DB) or die($msg[1]);
	
	// Setando Charset do banco
	mysqli_set_charset($conexao, "utf8mb4");
	//mysqli_set_charset('utf8mb4');
?>