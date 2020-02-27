<?php

if(isset($_POST['Acao'])){
	$Acao = filter_input(INPUT_POST, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['Acao'])){
	$Acao = filter_input(INPUT_GET, 'Acao', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$Acao ="";
}


if(isset($_POST['codigo_dpto'])){
	$codigo_dpto = filter_input(INPUT_POST, 'codigo_dpto', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['codigo_dpto'])){
	$codigo_dpto = filter_input(INPUT_GET, 'codigo_dpto', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$codigo_dpto =0;
}


if(isset($_POST['nome'])){
	$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['nome'])){
	$nome = filter_input(INPUT_GET, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$nome = "";
}


if(isset($_POST['horas'])){
	$horas = filter_input(INPUT_POST, 'horas', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['horas'])){
	$horas = filter_input(INPUT_GET, 'horas', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$horas =0;
}

if(isset($_POST['cod_dpto'])){
	$cod_dpto = filter_input(INPUT_POST, 'cod_dpto', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif(isset($_GET['cod_dpto'])){
	$cod_dpto = filter_input(INPUT_GET, 'cod_dpto', FILTER_SANITIZE_SPECIAL_CHARS);
} else{
	$cod_dpto =0;
}