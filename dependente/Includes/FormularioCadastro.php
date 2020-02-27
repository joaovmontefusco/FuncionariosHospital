<?php
include("Class/ClassCrud.php");

	/*Cadastro novo*/
	$Acao="Cadastrar";
	$nome_dependente = "";
	$cpf_funcionario = "";
	$vinculo="";
?>

<div class="Formulario">
	<h1 class="Center">Cadastro</h1>

	<form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">

		<input type="hidden" id="Acao" value="<?php echo $Acao; ?>">
		

		<div class="FormularioInput">
			Nome:<br>
			<input type="text" id="nome_dependente" name="nome_dependente" value="<?php echo $nome_dependente; ?>">
		</div>


		<div class="FormularioInput">
			CPF do funcionário:<br>
			<input type="text" id="cpf_funcionario" name="cpf_funcionario" value="<?php echo $cpf_funcionario; ?>">
		</div>

		<div class="FormularioInput">
			Vínculo:<br>
			<select name="vinculo" id="vinculo">
				<option value="<?php echo $vinculo; ?>"><?php echo $vinculo; ?></option>
				<option value="Filho">Filho(a)</option>
				<option value="Conjuge">Conjuge</option>
			</select>
		</div>

		<div class="Formulario Input FormularioInput100 Center">
			<input type="submit" value="<?php echo $Acao; ?>">
		</div>
	</form>
</div>