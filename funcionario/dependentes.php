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


		<div class="Content">
			<?php
				include("Class/ClassConexao.php");
				include("Class/ClassCrud.php");
			?>
		</div>

		<div class="Content">
            <table class="TabelaCrud">
                <tr>
					<td>CPF</td>
                    <td>Nome do funcionário</td>
                    <td>Quantidade de dependentes</td>
                </tr>

                <?php
                    include("Includes/Variaveis.php");
                    $Con = new mysqli("localhost", "root", "", "funcionarios");
                    $sql = mysqli_query($Con, " SELECT f.cpf_funcionario, f.nome, COUNT(nome_dependente) as qtddepend
												FROM funcionario f, dependente d 
												WHERE f.cpf_funcionario= d.cpf_funcionario 
												GROUP BY f.cpf_funcionario");

                    while($exibe = mysqli_fetch_assoc($sql)):
                    ?>        
                        <tr>
							<td><?php echo $exibe["cpf_funcionario"]; ?></td>
                            <td><?php echo $exibe["nome"]; ?></td>
                            <td><?php echo $exibe["qtddepend"]; ?></td>
                        </tr>
                    <?php
                    endwhile;

                ?>

            </table>
	    </div>

	</body>    
    
</html>