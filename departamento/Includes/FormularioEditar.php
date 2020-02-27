<?php
include("Variaveis.php");
include("Class/ClassCrud.php");
	/*Edição de dados*/
	$Acao="Editar";
	$Crud = new ClassCrud();
	$BFetch=$Crud->selectDB("*", "departamento", "where codigo_dpto=?","i", array($_GET['id']));
	$Fetch=$BFetch->fetch_all();
	foreach($Fetch as $Fetchs){
		$codigo_dpto = $Fetchs[0];
		$nome = $Fetchs[1];
		$horas = $Fetchs[2];
	}

?>


<div class="Resultado"></div>	

			<div class="Formulario">
				<h1 class="Center">Edição</h1>

				<form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerEditar.php">

					<input type="hidden" id="Acao" value="<?php echo $Acao; ?>">
					
					<div class="FormularioInput">
						<input type="hidden" id="codigo_dpto" name="codigo_dpto" value="<?php echo $codigo_dpto; ?>">
					</div>	

					<div class="FormularioInput">
						Nome:<br>
						<input type="text" id="nome" name="nome" value="<?php echo $nome; ?>">
					</div>

					<div class="FormularioInput">
						Horas mensais:<br>
						<input type="text" id="horas" name="horas" value="<?php echo $horas; ?>">
					</div>

					<div class="Formulario Input FormularioInput100 Center">
						<input type="submit" value="<?php echo $Acao; ?>">

					</div>
				</form>
			</div>

