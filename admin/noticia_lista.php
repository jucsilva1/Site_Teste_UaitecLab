<?php
	include("header.php");
?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>Notícias</h1>
			</div>
			
			<table class="table">
				<thead>
					<tr>
						<th>ID</td>
						<th>Data</td>
						<th>Titulo</td>
						<th width="160">Opções</td>
					</tr>
				</thead>
				<tbody>
					
					<?php
					
					if (isset($_GET["id_excluir"]))
					{
						$id_noticia=$_GET["id_excluir"];
						
						$query = "	DELETE FROM noticia 
									WHERE id_noticia='$id_noticia'";
						
						mysqli_query($conexao, $query);
					}
					
					
					// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML

					$query = "	SELECT 
								noticia.*,
								DATE_FORMAT(noticia.data,'%d/%m/%Y') AS data_format 
								FROM noticia";
					
					$resultado = mysqli_query($conexao, $query);

					while ($linha = mysqli_fetch_array($resultado))
					{
					   ?>
						<tr>
							<td><?php echo $linha['id_noticia']; ?></td>
							<td><?php echo $linha['data_format']; ?></td>
							<td><?php echo $linha['titulo']; ?></td>
							<td width="160">
								<a href="noticia_atualiza.php?id_noticia=<?php echo $linha['id_noticia']; ?>" class="btn btn-info btn-md" role="button">Editar</a>
								<a href="noticia_lista.php?id_excluir=<?php echo $linha['id_noticia']; ?>" class="btn btn-danger btn-md" role="button">Excluir</a>
							</td>
						</tr>
						
					   <?php
					}
					?>
					
				</tbody>
			</table>
			
			<a href="noticia_cadastro.php" class="btn btn-primary btn-md" role="button">Cadastrar Notícia</a>
			
		</div>

<?php
	include("footer.php");
?>