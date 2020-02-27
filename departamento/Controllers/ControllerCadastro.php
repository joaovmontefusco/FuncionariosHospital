<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud = new ClassCrud();


$Crud->insertDB(
	"departamento",
	"?, ?, ?",
	"iss",
	array($codigo_dpto, $nome, $horas)
);

echo "Cadastro realizado com sucesso.";
