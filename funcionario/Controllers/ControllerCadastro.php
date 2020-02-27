<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud = new ClassCrud();

$Crud->insertDB(
	"funcionario",
	"?, ?, ?, ?, ?, ?, ?, ?",
	"sssssssi",
	array($cpf_funcionario, $nome, $telefone, $endereco, $cargo, $salario, $status, $codigo_dpto)
);

echo "Cadastro realizado com sucesso.";
