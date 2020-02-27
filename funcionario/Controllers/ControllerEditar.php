<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud = new ClassCrud();

$Crud->updateDB(
	"funcionario", 
	"nome=?, telefone=?, endereco=?, cargo=?, salario=?, status=?, codigo_dpto=?",
	"cpf_funcionario=?",
	"ssssssis",
	array($nome, $telefone, $endereco, $cargo, $salario, $status, $codigo_dpto, $cpf_funcionario)
);

echo "Cadastro editado com sucesso.";