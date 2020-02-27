<?php

if(isset($_POST['Acao'])){
	$Acao = filter_input(INPUT_POST, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['Acao'])){
	$Acao = filter_input(INPUT_GET, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$Acao ="";
}


if(isset($_POST['cpf_funcionario'])){
	$cpf_funcionario = filter_input(INPUT_POST, 'cpf_funcionario', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['cpf_funcionario'])){
	$cpf_funcionario = filter_input(INPUT_GET, 'cpf_funcionario', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$cpf_funcionario = "";
}


if(isset($_POST['nome'])){
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['nome'])){
	$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$nome = "";
}


if(isset($_POST['telefone'])){
	$telefone = filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['telefone'])){
	$telefone = filter_input(INPUT_GET, 'telefone', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$telefone ="";
}

if(isset($_POST['endereco'])){
	$endereco = filter_input(INPUT_POST, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['endereco'])){
	$endereco = filter_input(INPUT_GET, 'endereco', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$endereco ="";
}

if(isset($_POST['cargo'])){
	$cargo = filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['cargo'])){
	$cargo = filter_input(INPUT_GET, 'cargo', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$cargo ="";
}

if(isset($_POST['salario'])){
	$salario = filter_input(INPUT_POST, 'salario', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['salario'])){
	$salario = filter_input(INPUT_GET, 'salario', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$salario ="";
}

if(isset($_POST['status'])){
	$status = filter_input(INPUT_POST, 'status', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['status'])){
	$status = filter_input(INPUT_GET, 'status', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$status = "";
}


if(isset($_POST['codigo_dpto'])){
	$codigo_dpto = filter_input(INPUT_POST, 'codigo_dpto', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['codigo_dpto'])){
	$codigo_dpto = filter_input(INPUT_GET, 'codigo_dpto', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$codigo_dpto =0;
}

if(isset($_POST['cpf_procura'])){
	$cpf_procura = filter_input(INPUT_POST, 'cpf_procura', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['cpf_procura'])){
	$cpf_procura = filter_input(INPUT_GET, 'cpf_procura', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$cpf_procura = "";
}