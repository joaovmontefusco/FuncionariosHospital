<?php
include("../Includes/Variaveis.php");
include("../Class/ClassCrud.php");

$Crud = new ClassCrud();


$Crud->insertDB(
	"dependente",
	"?, ?, ?",
	"sss",
	array($nome_dependente, $cpf_funcionario, $vinculo)
);

echo "Cadastro realizado com sucesso.";
