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



<?php
include("Class/ClassCrud.php");
?>


<div class="Content">
	<table class="TabelaCrud">
		<tr>
			<td>Nome</td>
			<td>CPF do funcionário</td>
			<td>Vínculo</td>
		</tr>

		<!--Estrutura de loop-->
		<?php
			$Crud=new ClassCrud();
			$BFetch=$Crud->selectDB("*","dependente","","",array());
			while ($Result=$BFetch->fetch_all()) {
				foreach($Result as $Fetch){
		?>

			<tr>
				<td><?php echo $Fetch[0]; ?></td>
				<td><?php echo $Fetch[1]; ?></td>
				<td><?php echo $Fetch[2]; ?></td>
			</tr>
			<?php
			}
		}
	?>

	</table>
	</div>

		</body>    
    
</html>