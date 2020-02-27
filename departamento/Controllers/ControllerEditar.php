<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud = new ClassCrud();

$Crud->updateDB(
	"departamento", 
	"nome=?, horas=?",
	"codigo_dpto=?",
	"sii",
	array($nome, $horas, $codigo_dpto)
);

echo "Cadastro editado com sucesso.";