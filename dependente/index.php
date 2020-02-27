<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Dependentes</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

		<header>
			<p class="inicio"><a href="../index.html">Início</a></p>
			<p class="titulo">Dependentes</p>
		</header>

		<div class="Nav">
			<li><a href="cadastro">Cadastrar</a></li>
			<li><a href="pesquisadependente">Pesquisa</a></li>
			<li><a href="selecao">Exibir</a></li>
		</div>


		<div class="Content">
			<?php
				include("Class/ClassConexao.php");
				include("Class/ClassCrud.php");
			?>
		</div>

	</body>    
    
</html>