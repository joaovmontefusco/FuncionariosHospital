<?php
include("Variaveis.php");
include("Class/ClassCrud.php");
	/*Edição de dados*/
	$Acao="Editar";
	$Crud = new ClassCrud();
	$BFetch=$Crud->selectDB("*", "funcionario", "where cpf_funcionario=?","i", array($_GET['id']));
	$Fetch=$BFetch->fetch_all();
	foreach($Fetch as $Fetchs){
		$cpf_funcionario = $Fetchs[0];
		$nome = $Fetchs[1];
		$telefone = $Fetchs[2];
		$endereco = $Fetchs[3];
		$cargo = $Fetchs[4];
		$salario = $Fetchs[5];
		$status = $Fetchs[6];
		$codigo_dpto = $Fetchs[7];
	}

?>


<div class="Resultado"></div>	

			<div class="Formulario">
				<h1 class="Center">Edição</h1>

				<form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/ControllerEditar.php">

					<input type="hidden" id="Acao" value="<?php echo $Acao; ?>">
					
					<div class="FormularioInput">
						<input type="hidden" id="cpf_funcionario" name="cpf_funcionario" value="<?php echo $cpf_funcionario; ?>">
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
						Código do Departamento:<br>
						<input type="text" id="codigo_dpto" name="codigo_dpto" value="<?php echo $codigo_dpto; ?>">
					</div>

					<div class="Formulario Input FormularioInput100 Center">
						<input type="submit" value="<?php echo $Acao; ?>">

					</div>
				</form>
			</div>

