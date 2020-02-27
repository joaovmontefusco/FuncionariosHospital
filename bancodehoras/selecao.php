<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Banco de Horas</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

		<header>
			<p class="inicio"><a href="../index.html">Início</a></p>
			<p class="titulo">Banco de Horas</p>
		</header>

		<div class="Nav">
			<li><a href="cadastro">Registrar</a></li>
			<li><a href="selecao">Banco de horas</a></li>
            <li><a href="pesquisabd">Pesquisa</a></li>
			<li><a href="hrsexigidas">Horas Exigidas</a></li>
			<li><a href="qtdhoras">Horas Trabalhadas</a></li>
            <li><a href="qtdhorasextras">Horas Extras</a></li>
            <li><a href="funcativos">Funcionários Ativos</a></li>
		</div>



<?php
include("Class/ClassCrud.php");
?>


<div class="Content">
	<table class="TabelaCrud">
		<tr>
			<td>CPF</td>
			<td>Data</td>
			<td>Horário de início</td>
			<td>Horário fim</td>
		</tr>

		<!--Estrutura de loop-->
		<?php
			$Crud=new ClassCrud();
			$BFetch=$Crud->selectDB("*","bancodehoras","","",array());
			while ($Result=$BFetch->fetch_all()) {
				foreach($Result as $Fetch){
		?>

			<tr>
				<td><?php echo $Fetch[0]; ?></td>
				<td><?php echo $Fetch[1]; ?></td>
				<td><?php echo $Fetch[2]; ?></td>
				<td><?php echo $Fetch[3]; ?></td>
				
			</tr>
			<?php
			}
		}
	?>

	</table>
	</div>

		</body>    
    
</html>