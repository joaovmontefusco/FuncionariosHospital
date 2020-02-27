<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Departamentos</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

		<header>
			<p class="inicio"><a href="../index.html">Início</a></p>
			<p class="titulo">Departamentos</p>
		</header>

		<div class="Nav">
            <li><a href="cadastro">Cadastrar</a></li>
			<li><a href="selecao">Exibir</a></li>
            <li><a href="pesquisadpto">Pesquisar</a></li>
			<li><a href="cargos">Cargos</a></li>
        </div>
        
        <?php
            $cod_dpto = 0;
        ?>

    
        <div class="Formulario">
            <h1 class="Center">Pesquisa por departamento</h1>
            <form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/pesquisadpto.php">
                <div class="FormularioInput">
                    Código do departamento:<br>
                    <input type="text" id="cod_dpto" name="cod_dpto" value="<?php echo $cod_dpto; ?>">

                    <div class="Formulario Input FormularioInput100 Center">
                        <input type="submit">
                    </div>
                </div>
            </form>
        </div>

	</body>    
    
</html>