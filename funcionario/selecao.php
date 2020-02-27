<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Funcionários</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

		<header>
			<p class="inicio"><a href="../index.html">Início</a></p>
			<p class="titulo">Funcionários</p>
		</header>

		<div class="Nav">
			<li><a href="cadastro">Cadastrar</a></li>
			<li><a href="selecao">Funcionários</a></li>
			<li><a href="pesquisafunc">Pesquisa</a></li>
			<li><a href="dependentes">Dependentes</a></li>
		</div>



<?php
include("Class/ClassCrud.php");
?>


<div class="Content">
	<table class="TabelaCrud">
		<tr>
			<td>CPF</td>
			<td>Nome</td>
			<td>Telefone</td>
			<td>Endereço</td>
			<td>Cargo</td>
			<td>Salário</td>
			<td>Status</td>
			<td>Código do departamento</td>
			<td>Atualizar</td>
		</tr>

		<!--Estrutura de loop-->
		<?php
			$Crud=new ClassCrud();
			$BFetch=$Crud->selectDB("*","funcionario","","",array());
			while ($Result=$BFetch->fetch_all()) {
				foreach($Result as $Fetch){
		?>

			<tr>
				<td><?php echo $Fetch[0]; ?></td>
				<td><?php echo $Fetch[1]; ?></td>
				<td><?php echo $Fetch[2]; ?></td>
				<td><?php echo $Fetch[3]; ?></td>
				<td><?php echo $Fetch[4]; ?></td>
				<td><?php echo $Fetch[5]; ?></td>
				<td><?php echo $Fetch[6]; ?></td>
				<td><?php echo $Fetch[7]; ?></td>


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