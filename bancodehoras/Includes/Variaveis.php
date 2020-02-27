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


if(isset($_POST['data'])){
	$data = filter_input(INPUT_POST, 'data', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['data'])){
	$data = filter_input(INPUT_GET, 'data', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$data = "Y-m-d";
}


if(isset($_POST['horario_inicio'])){
	$horario_inicio = filter_input(INPUT_POST, 'horario_inicio', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['horario_inicio'])){
	$horario_inicio = filter_input(INPUT_GET, 'horario_inicio', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$horario_inicio ="h:m";
}

if(isset($_POST['horario_fim'])){
	$horario_fim = filter_input(INPUT_POST, 'horario_fim', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['horario_fim'])){
	$horario_fim = filter_input(INPUT_GET, 'horario_fim', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$horario_fim ="h:m";
}

if(isset($_POST['mes'])){
	$mes = filter_input(INPUT_POST, 'mes', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['mes'])){
	$mes = filter_input(INPUT_GET, 'mes', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$mes =0;
}

if(isset($_POST['datapesquisa'])){
	$datapesquisa = filter_input(INPUT_POST, 'datapesquisa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['datapesquisa'])){
	$datapesquisa = filter_input(INPUT_GET, 'datapesquisa', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$datapesquisa = "Y-m-d";
}

if(isset($_POST['horario'])){
	$horario = filter_input(INPUT_POST, 'horario', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['horario'])){
	$horario = filter_input(INPUT_GET, 'horario', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$horario =0;
}

if(isset($_POST['cpf_procura'])){
	$cpf_procura = filter_input(INPUT_POST, 'cpf_procura', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['cpf_procura'])){
	$cpf_procura = filter_input(INPUT_GET, 'cpf_procura', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$cpf_procura = "";
}

if(isset($_POST['data_procura'])){
	$data_procura = filter_input(INPUT_POST, 'data_procura', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['data_procura'])){
	$data_procura = filter_input(INPUT_GET, 'data_procura', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$data_procura = "Y-m-d";
}