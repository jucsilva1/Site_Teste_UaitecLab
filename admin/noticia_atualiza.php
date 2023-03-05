<?php
	include("header.php");
?>

		<!-- Begin page content -->
		<div class="container">
			<div class="page-header">
				<h1>Atualizar Notícia</h1>
			</div>
			
			<?php
				
				if (isset($_GET['id_noticia'])) 
				{				
				
					$id_noticia=$_GET["id_noticia"];

					$query = "	SELECT 
								noticia.*,
								DATE_FORMAT(noticia.data,'%d/%m/%Y') AS data_format 
								FROM noticia
								WHERE id_noticia='$id_noticia'";
								
					$resultado = mysqli_query($conexao, $query);

					$linha = mysqli_fetch_array($resultado);
					
					$data=$linha["data"];
					$data_conv=$linha["data_format"];
					$titulo=$linha["titulo"];
					$descricao=$linha["descricao"];
					$img=$linha["img"];
				}
				
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
						$query = "	UPDATE noticia 
									data='$data_conv',
									titulo='$titulo',
									descricao='$descricao',
									img='$img'
									WHERE (id_noticia='$id_noticia')";
									
						mysqli_query($conexao, $query);

						echo "<script>alert('Atualizado com sucesso!')</script>";
					} 
					else 
					{
						echo "<script>alert('Atenção, preencha todos os campos!')</script>";
					}
					
					$data_conv=$data;
				}
			?>
			
			<form action="noticia_atualiza.php?id_noticia=<? echo $id_noticia; ?>" method="post">
				<div class="form-group">
					<label for="data">Data</label>
					<input type="text" class="form-control" id="data" name="data" placeholder="00/00/0000" value="<?php echo $data_conv;?>">
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
				
				<button type="submit" class="btn btn-primary btn-md">Salvar Notícia</button>
			</form>
			
		</div>

<?php
	include("footer.php");
?>