<?php
	include("header.php");
?>
		
		<div class="linha">
			<section>
				<div class="coluna col12">
					
					<?php
					
					$id_noticia=$_GET["id_noticia"];
					
					// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML

					$query = "	SELECT 
								noticia.*,
								DATE_FORMAT(noticia.data,'%d/%m/%Y') AS data_format 
								FROM noticia
								WHERE id_noticia='$id_noticia'";
								
					$resultado = mysqli_query($conexao, $query);

					$linha = mysqli_fetch_array($resultado);
					
					?>
					
					<h2>Notícia</h2>
					
					<h3><?php echo $linha['data_format']; ?> - <?php echo $linha['titulo']; ?></em></h3>
					
					<!--<div align='center'><img src="<?php echo $linha['img']; ?>" alt="" /></div>-->
					
					<p>
						<?php echo nl2br($linha['descricao']); ?>
					</p>
					
				</div>
			</section>
		</div>
		
		<div class="conteudo-extra">
			<div class="linha">
				<div class="coluna col7">
					<section>
						<h2>Como conquistar clientes na era digital</h2>
						<p>Sed laoreet nulla vel orci iaculis convallis. 
						Suspendisse auctor libero in tortor aliquam</p>
						<p>Sed laoreet nulla vel orci iaculis convallis. 
						Suspendisse auctor libero in tortor aliquam</p>
						<p>Sed laoreet nulla vel orci iaculis convallis. 
						Suspendisse auctor libero in tortor aliquam</p>
					</section>
				</div>
				<div class="coluna col5">
					<?php
						include("comp_noticia.php");
					?>
				</div>
			</div>
		</div>

<?php
	include("footer.php");
?>