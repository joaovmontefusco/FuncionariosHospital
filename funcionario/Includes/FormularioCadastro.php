<?php
include("Class/ClassCrud.php");

	/*Cadastro novo*/
	$Acao="Cadastrar";
	$cpf_funcionario = "";
	$nome = "";
	$telefone = "";
	$endereco = "";
	$cargo = "";
	$salario = "";
	$status = "";
	$codigo_dpto = 0;
?>



<div class="Resultado"></div>
			<div class="Formulario">
				<h1 class="Center">Cadastro</h1>

				<form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerCadastro.php">

					<input type="hidden" id="Acao" value="<?php echo $Acao; ?>">
					

					<div class="FormularioInput">
						CPF:<br>
						<input type="text" id="cpf_funcionario" name="cpf_funcionario" value="<?php echo $cpf_funcionario; ?>">
					</div>


					<div class="FormularioInput">
						Nome:<br>
						<input type="text" id="nome" name="nome" value="<?php echo $nome; ?>">
					</div>

					<div class="FormularioInput">
						Telefone:<br>
						<input type="text" id="telefone" name="telefone" value="<?php echo $telefone; ?>">
					</div>

					<div class="FormularioInput">
						Endereço:<br>
						<input type="text" id="endereco" name="endereco" value="<?php echo $endereco; ?>">
					</div>

					<div class="FormularioInput">
						Cargo:<br>
						<input type="text" id="cargo" name="cargo" value="<?php echo $cargo; ?>">
					</div>

					<div class="FormularioInput">
						Salário:<br>
						<input type="text" id="salario" name="salario" value="<?php echo $salario; ?>">
					</div>

					<div class="FormularioInput">
						Status:<br>
						<select name="status" id="status">
							<option value="<?php echo $status; ?>"><?php echo $status; ?></option>
							<option value="Trabalhando">Trabalhando</option>
							<option value="Desligado">Desligado</option>
						</select>
					</div>

					<div class="FormularioInput">
						Código do DPTO:<br>
						<input type="text" id="codigo_dpto" name="codigo_dpto" value="<?php echo $codigo_dpto; ?>">
					</div>

					<div class="Formulario Input FormularioInput100 Center">
						<input type="submit" value="<?php echo $Acao; ?>">
					</div>
				</form>
			</div>