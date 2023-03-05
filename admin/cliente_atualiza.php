<?
	include("header.php");
?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>Atualiza Cliente</h1>
			</div>
			
			<?
			
				if (isset($_GET['id_cliente'])) 
				{				
				
					$id_cliente=$_GET["id_cliente"];

					$query = "	SELECT * 
								FROM cliente
								WHERE id_cliente='$id_cliente'";
								
					$resultado = mysqli_query($conexao, $query);

					$linha = mysqli_fetch_array($resultado);
					
					$nome=$linha["nome"];
					$url=$linha["url"];
				}
				
				//
			
				if (isset($_POST['nome'])) 
				{
					// Configura as variáveis do método POST para virarem variáveis
					
					$nome = $_POST['nome'];
					$url = $_POST['url'];

					// Testa se os campos foram preenchidos

					if ($nome and $url) 
					{
						$query = "	UPDATE cliente SET
									nome='$nome',
									url='$url'
									WHERE (id_cliente='$id_cliente')";
									
						mysqli_query($conexao, $query);
						
						echo "<script>alert('Atualizado com sucesso!')</script>";
					} 
					else 
					{
						echo "<script>alert('Atenção, preencha todos os campos!')</script>";
					}
				}
			?>
			
			<form action="cliente_atualiza.php?id_cliente=<? echo $id_cliente; ?>" method="post">
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" id="nome" name="nome" placeholder="nome" value="<? echo $nome; ?>">
				</div>
				
				<div class="form-group">
					<label for="url">URL</label>
					<input type="text" class="form-control" id="url" name="url" placeholder="http://" value="<? echo $url; ?>">
				</div>
				
				<button type="submit" class="btn btn-primary btn-md">Salvar Cliente</button>
			</form>
			
		</div>

<?
	include("footer.php");
?>