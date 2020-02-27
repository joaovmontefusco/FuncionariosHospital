<?php
include("Class/ClassCrud.php");

	/*Cadastro novo*/
	$Acao="Cadastrar";
	$codigo_dpto = 0;
	$nome="";
	$horas=0;
?>



<div class="Resultado"></div>

			<div class="Formulario">
				<h1 class="Center">Cadastro</h1>

				<form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">

					<input type="hidden" id="Acao" value="<?php echo $Acao; ?>">
					

					<div class="FormularioInput">
						Código:<br>
						<input type="text" id="codigo_dpto" name="codigo_dpto" value="<?php echo $codigo_dpto; ?>">
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