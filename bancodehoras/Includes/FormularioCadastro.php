<?php
include("Class/ClassCrud.php");

	/*Cadastro novo*/
	$Acao="Cadastrar";
	$cpf_funcionario = "";
	$data = "Y-m-d";
	$horario_inicio = "h:m";
	$horario_fim = "h:m";
?>



<div class="Resultado"></div>
			<div class="Formulario">
				<h1 class="Center">Registro</h1>

				<form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">

					<input type="hidden" id="Acao" value="<?php echo $Acao; ?>">
					

					<div class="FormularioInput">
						CPF:<br>
						<input type="text" id="cpf_funcionario" name="cpf_funcionario" value="<?php echo $cpf_funcionario; ?>">
					</div>


					<div class="FormularioInput">
						Data:<br>
						<input type="date" id="data" name="data" value="<?php echo $data; ?>">
					</div>

					<div class="FormularioInput">
						Horário de início:<br>
						<input type="time" id="horario_inicio" name="horario_inicio" value="<?php echo $horario_inicio; ?>">
					</div>

					<div class="FormularioInput">
						Horário de fim:<br>
						<input type="time" id="horario_fim" name="horario_fim" value="<?php echo $horario_fim; ?>">
					</div>


					<div class="Formulario Input FormularioInput100 Center">
						<input type="submit" value="Registrar">
					</div>
				</form>
			</div>