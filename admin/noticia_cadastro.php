<?php
	include("header.php");
?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>Cadastrar Notícia</h1>
			</div>
			
			<?php
				if (isset($_POST['data'])) 
				{
					// Configura as variáveis do método POST para virarem variáveis

					$data = $_POST['data'];
					$data_trans=explode("/",$data);
					$data_conv="$data_trans[2]-$data_trans[1]-$data_trans[0]";
					
					$titulo = $_POST['titulo'];
					$descricao = $_POST['descricao'];
					$img = $_POST['img'];

					// Testa se os campos foram preenchidos

					if ($data and $titulo and $descricao and $img) 
					{
						$query = "INSERT INTO noticia VALUES('','$data_conv','$titulo','$descricao','$img')";
						mysqli_query($conexao, $query);

						$data = "";
						$titulo = "";
						$descricao = "";
						$img = "";

						echo "<script>alert('Cadastrado com sucesso!')</script>";
					} 
					else 
					{
						echo "<script>alert('Atenção, preencha todos os campos!')</script>";
					}
				}
			?>
			
			<form action="noticia_cadastro.php" method="post">
				<div class="form-group">
					<label for="data">Data</label>
					<input type="text" class="form-control" id="data" name="data" placeholder="00/00/0000" value="<?php echo $data;?>">
				</div>
				
				<div class="form-group">
					<label for="titulo">Título</label>
					<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Título" value="<?php echo $titulo;?>">
				</div>
				
				<div class="form-group">
					<label for="descricao">Descrição</label>
					<textarea class="form-control" id="descricao" name="descricao" rows="10" ><?php echo $descricao;?></textarea>
				</div>
				
				<div class="form-group">
					<label for="img">URL Imagem</label>
					<input type="text" class="form-control" id="img" name="img" placeholder="http://" value="<?php echo $img;?>">
				</div>
				
				<button type="submit" class="btn btn-primary btn-md">Cadastrar Notícia</button>
			</form>
			
		</div>

<?php
	include("footer.php");
?>