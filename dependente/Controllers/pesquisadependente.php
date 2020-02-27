<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Dependentes</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>

		<header>
			<p class="inicio"><a href="../../index.html">Início</a></p>
			<p class="titulo">Dependentes</p>
		</header>

		<div class="Nav">
            <li><a href="../cadastro">Cadastrar</a></li>
			<li><a href="../pesquisadependente">Pesquisa</a></li>
			<li><a href="../selecao">Exibir</a></li>
        </div>
        
        <div class="Content">
            <table class="TabelaCrud">
                <tr>
                    <td>Nome do dependente</td>
                    <td>Vínculo</td>
                </tr>
                

                <?php
                    include("../Includes/Variaveis.php");
                    $Con = new mysqli("localhost", "root", "", "funcionarios");
                    $sql = mysqli_query($Con, " SELECT nome_dependente, vinculo
                                                FROM dependente 
                                                WHERE cpf_funcionario = '$cpf_procura' 
                                                AND nome_dependente = '$nome_dep'");

                    while($exibe = mysqli_fetch_assoc($sql)):
                    ?>        
                        <tr>
                            <td><?php echo $exibe["nome_dependente"]; ?></td>
                            <td><?php echo $exibe["vinculo"]; ?></td>
                        </tr>
                    <?php
                    endwhile;

                ?>
	    </div>
    </body>
</html>