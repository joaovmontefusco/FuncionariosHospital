<?php

if(isset($_POST['Acao'])){
	$Acao = filter_input(INPUT_POST, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['Acao'])){
	$Acao = filter_input(INPUT_GET, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$Acao ="";
}


if(isset($_POST['nome_dependente'])){
	$nome_dependente = filter_input(INPUT_POST, 'nome_dependente', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['nome_dependente'])){
	$nome_dependente = filter_input(INPUT_GET, 'nome_dependente', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$nome_dependente = "";
}


if(isset($_POST['cpf_funcionario'])){
	$cpf_funcionario = filter_input(INPUT_POST, 'cpf_funcionario', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['cpf_funcionario'])){
	$cpf_funcionario = filter_input(INPUT_GET, 'cpf_funcionario', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$cpf_funcionario = "";
}


if(isset($_POST['vinculo'])){
	$vinculo = filter_input(INPUT_POST, 'vinculo', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['vinculo'])){
	$vinculo = filter_input(INPUT_GET, 'vinculo', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$vinculo = "";
}

if(isset($_POST['cpf_procura'])){
	$cpf_procura = filter_input(INPUT_POST, 'cpf_procura', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['cpf_procura'])){
	$cpf_procura = filter_input(INPUT_GET, 'cpf_procura', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$cpf_procura = "";
}

if(isset($_POST['nome_dep'])){
	$nome_dep = filter_input(INPUT_POST, 'nome_dep', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['nome_dep'])){
	$nome_dep = filter_input(INPUT_GET, 'nome_dep', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$nome_dep = "";
}