<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Departamentos</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

		<header>
			<p class="inicio"><a href="../index.html">Início</a></p>
			<p class="titulo">Departamentos</p>
		</header>

		<div class="Nav">
			<li><a href="cadastro">Cadastrar</a></li>
			<li><a href="selecao">Exibir</a></li>
            <li><a href="pesquisadpto">Pesquisar</a></li>
			<li><a href="cargos">Cargos</a></li>
		</div>



<?php
include("Class/ClassCrud.php");
?>


<div class="Content">
	<table class="TabelaCrud">
		<tr>
			<td>Código</td>
			<td>Nome</td>
			<td>Horas</td>
			<td>Atualizar</td>
		</tr>

		<!--Estrutura de loop-->
		<?php
			$Crud=new ClassCrud();
			$BFetch=$Crud->selectDB("*","departamento","","",array());
			while ($Result=$BFetch->fetch_all()) {
				foreach($Result as $Fetch){
		?>

			<tr>
				<td><?php echo $Fetch[0]; ?></td>
				<td><?php echo $Fetch[1]; ?></td>
				<td><?php echo $Fetch[2]; ?></td>

				<td>
					<a href="<?php echo "editar.php?id={$Fetch[0]}"; ?>">Editar</a>
				</td>
			</tr>
			<?php
			}
		}
	?>

	</table>
	</div>

		</body>    
    
</html>