<?php
	include("header.php");
?>

		<!-- Begin page content -->
		
		<div class="container">
			<div class="page-header">
				<h1>Contatos do Site</h1>
			</div>
			
			<!-- Painel -->
			
			<div class="row">
			
				<?php
					
				if (isset($_GET["id_excluir"]))
				{
					$id_contato=$_GET["id_excluir"];
					
					$query = "	DELETE FROM contato 
								WHERE id_contato='$id_contato'";
					
					mysqli_query($conexao, $query);
				}
				
				// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML

				$query = "	SELECT * FROM contato";
				
				$resultado = mysqli_query($conexao, $query);

				while ($linha = mysqli_fetch_array($resultado))
				{
				   ?>
					
					<div class="col-md-12">
						<div class="panel panel-default">
							<div class="panel-heading"><strong><?php echo $linha['nome']; ?></strong><span class="badge pull-right"><? echo $linha['id_cliente']; ?></span></div>
							<div class="panel-body">
							
								<p>
									<strong>Assunto:</strong><br>
									<?php echo $linha['assunto']; ?>
								</p>
								
								<p>
									<strong>E-mail:</strong><br>
									<?php echo $linha['email']; ?>
								</p>
								
								<p>
									<strong>Mensagem:</strong><br>
									<?php echo nl2br($linha['mensagem']); ?>
								</p>
								
								<a href="contato_lista.php?id_excluir=<?php echo $linha['id_contato']; ?>" class="btn btn-danger btn-md" role="button">Excluir</a>
								
							</div>
						</div>
					</div>
					
					
				   <?php
				}
				?>
			
				
				
				
			</div>
			
			
			
		</div>

<?php
	include("footer.php");
?>