﻿<?php
	include("header.php");
?>
		
		<div class="linha">
			<section>
				<div class="coluna col5 sidebar">
					<h3>Localização</h3>
					<img src="img/mapa.jpg" alt="" />
					<ul class="sem-padding sem-marcador">
						<li>Rua Centralina, 160</li>
						<li>Bairro Santa Ines</li>
						<li>Belo Horizonte - MG</li>
					</ul>
					<h3>Contato Direto</h3>
					<ul class="sem-padding sem-marcador">
						<li>Fone: <strong>(00) 9999-9999</strong></li>
						<li>Email: <strong>contato@lucasgerken.com</strong></li>
						<li>Skype: <strong>lucasgerken</strong></li>
					</ul>
				</div>
				<div class="coluna col7 contato">
					<h2>Envie sua mensagem</h2>
					<?php
						if (isset($_POST['nome'])) 
						{
							// Configura as variáveis do método POST para virarem variáveis

							$nome = $_POST['nome'];
							$email = $_POST['email'];
							$assunto = $_POST['assunto'];
							$mensagem = $_POST['mensagem'];

							// Testa se os campos foram preenchidos

							if ($nome and $email and $assunto and $mensagem) 
							{
								$query = "INSERT INTO contato VALUES('','$nome','$email','$assunto','$mensagem')";
								mysql_query($query,$conexao);

								$nome = "";
								$email = "";
								$assunto = "";
								$mensagem = "";

								echo "<script>alert('Mensagem enviada com sucesso!')</script>";
							} 
							else 
							{
								echo "<script>alert('Atenção, preencha todos os campos!')</script>";
							}
						}
					?>
					
					<form action="contato.php" method="post">
						<label for="nome">Seu nome:</label>
						<input type="text" name="nome" id="nome" value="<?php echo $nome; ?>" />
						<label for="email">Seu e-mail:</label>
						<input type="text" name="email" id="email" value="<?php echo $email; ?>" />
						<label for="Assunto">Assunto:</label>
						<input type="text" name="assunto" id="assunto" value="<?php echo $assunto; ?>" />
						<label for="mensagem">Mensagem:</label>
						<textarea name="mensagem" id="mensagem"><?php echo $mensagem; ?></textarea>
						<input type="submit" class="botao" name="enviar" value="Enviar Mensagem &raquo;" />
					</form>
				</div>
			</section>
		</div>
		
		<div class="conteudo-extra">
			<div class="linha">
				<div class="coluna col7">
					<section>
						<h2>Método alternativo de contatos</h2>
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