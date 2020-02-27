<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Funcionários</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

		<header>
			<p class="inicio"><a href="../index.html">Início</a></p>
			<p class="titulo">Funcionários</p>
		</header>

		<div class="Nav">
            <li><a href="cadastro">Cadastrar</a></li>
			<li><a href="selecao">Funcionários</a></li>
			<li><a href="pesquisafunc">Pesquisa</a></li>
			<li><a href="dependentes">Dependentes</a></li>
        </div>
        
        <?php
            $cpf_procura = "";
        ?>

    
        <div class="Formulario">
            <h1 class="Center">Pesquisa por funcionário</h1>
            <form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/pesquisafunc.php">
                <div class="FormularioInput">
                    CPF do funcionário:<br>
                    <input type="text" id="cpf_procura" name="cpf_procura" value="<?php echo $cpf_procura; ?>">

                    <div class="Formulario Input FormularioInput100 Center">
                        <input type="submit">
                    </div>
                </div>
            </form>
        </div>

	</body>    
    
</html>