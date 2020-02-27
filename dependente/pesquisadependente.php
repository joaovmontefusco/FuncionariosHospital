<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Dependentes</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

		<header>
			<p class="inicio"><a href="../index.html">Início</a></p>
			<p class="titulo">Dependentes</p>
		</header>

		<div class="Nav">
            <li><a href="cadastro">Cadastrar</a></li>
			<li><a href="pesquisadependente">Pesquisa</a></li>
			<li><a href="selecao">Exibir</a></li>
        </div>
        
        <?php
            $cpf_procura = "";
            $nome_dep = "";
        ?>

    
        <div class="Formulario">
            <h1 class="Center">Pesquisa de dependentes</h1>
            <form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/pesquisadependente.php">
                <div class="FormularioInput">
                    CPF do funcionário:<br>
                    <input type="text" id="cpf_procura" name="cpf_procura" value="<?php echo $cpf_procura; ?>">

                    Nome do dependente:<br>
                    <input type="text" id="nome_dep" name="nome_dep" value="<?php echo $nome_dep; ?>">

                    <div class="Formulario Input FormularioInput100 Center">
                        <input type="submit">
                    </div>
                </div>
            </form>
        </div>

	</body>    
    
</html>