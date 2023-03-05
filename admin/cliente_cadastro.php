<?
	include("header.php");
?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>Cadastrar Cliente</h1>
			</div>
			
			<?
				if (isset($_POST['nome'])) 
				{
					// Configura as variáveis do método POST para virarem variáveis
					
					$nome = $_POST['nome'];
					$url = $_POST['url'];

					// Testa se os campos foram preenchidos

					if ($nome and $url) 
					{
						$query = "INSERT INTO cliente VALUES('','$nome','$url')";
						mysqli_query($conexao, $query);

						$nome = "";
						$url = "";

						echo "<script>alert('Cadastrado com sucesso!')</script>";
					} 
					else 
					{
						echo "<script>alert('Atenção, preencha todos os campos!')</script>";
					}
				}
			?>
			
			<form action="cliente_cadastro.php" method="post">
				<div class="form-group">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" id="nome" name="nome" placeholder="nome">
				</div>
				
				<div class="form-group">
					<label for="url">URL</label>
					<input type="text" class="form-control" id="url" name="url" placeholder="http://">
				</div>
				
				<button type="submit" class="btn btn-primary btn-md">Cadastrar Cliente</button>
			</form>
			
		</div>

<?
	include("footer.php");
?>