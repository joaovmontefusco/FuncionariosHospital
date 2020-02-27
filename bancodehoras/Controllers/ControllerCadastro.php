<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud = new ClassCrud();

$Crud->insertDB(
	"bancodehoras",
	"?, ?, ?, ?",
	"ssss",
	array($cpf_funcionario, $data, $horario_inicio, $horario_fim)
);

echo "Registro realizado com sucesso.";
