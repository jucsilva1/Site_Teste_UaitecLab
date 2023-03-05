<?php
	include("header.php");
?>
		
		<div class="linha">
			<section>
				<div class="coluna col3 sidebar">
					<h3>Clientes satisfeitos</h3>
					<ul class="sem-marcador sem-padding">

						<?php
							// Fazendo uma consulta SQL e retornando os resultados em uma tabela HTML
							
							$query = "SELECT * FROM cliente LIMIT 0,10";
							$resultado = mysqli_query($conexao, $query);
							
							while ($linha = mysqli_fetch_array($resultado))
							{
							   ?>
							   <li><a href="<?php echo $linha['url']; ?>"><?php echo $linha['nome']; ?></a></li>
							   <?php
							}
						?>
						
					</ul>
					<a href="clientes.html" class="botao">ver todos &raquo;</a>
				</div>
				<div class="coluna col9">
					<h2>Último trabalho: <em>Empresa ABC</em></h2>
					<img src="img/thumb-grande.jpg" alt="" />
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lacinia, dolor mollis tempor finibus, 
					neque diam maximus nisi, sit amet finibus dolor orci quis felis. Nunc arcu libero, viverra ut ante et, 
					imperdiet commodo velit. Nulla facilisi. Duis sed est pulvinar, tincidunt arcu sit amet, auctor velit.</p>
					<a href="clientes.html" class="botao">Ver outros trabalhos &raquo;</a>
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