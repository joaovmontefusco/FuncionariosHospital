<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Banco de Horas</title>
		<link rel="stylesheet" href="css/style.css">
	</head>
	<body>

		<header>
			<p class="inicio"><a href="../index.html">Início</a></p>
			<p class="titulo">Banco de Horas</p>
		</header>

		<div class="Nav">
            <li><a href="cadastro">Registrar</a></li>
			<li><a href="selecao">Banco de horas</a></li>
            <li><a href="pesquisabd">Pesquisa</a></li>
			<li><a href="hrsexigidas">Horas Exigidas</a></li>
			<li><a href="qtdhoras">Horas Trabalhadas</a></li>
            <li><a href="qtdhorasextras">Horas Extras</a></li>
            <li><a href="funcativos">Funcionários Ativos</a></li>
        </div>
        
        <?php
            $cpf_procura = "";
            $data_procura = "Y-m-d";
        ?>

    
        <div class="Formulario">
            <h1 class="Center">Pesquisa no banco de horas</h1>
            <form name="FormCadastro" id="FormCadastro" method="post" action="Controllers/pesquisabd.php">
                <div class="FormularioInput">
                    CPF do funcionário:<br>
                    <input type="text" id="cpf_procura" name="cpf_procura" value="<?php echo $cpf_procura; ?>">

                    Data:<br>
                    <input type="date" id="data_procura" name="data_procura" value="<?php echo $data_procura; ?>">

                    <div class="Formulario Input FormularioInput100 Center">
                        <input type="submit">
                    </div>
                </div>
            </form>
        </div>

	</body>    
    
</html>