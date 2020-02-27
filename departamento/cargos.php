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


		<div class="Content">
			<?php
				include("Class/ClassConexao.php");
				include("Class/ClassCrud.php");
			?>
		</div>

		<div class="Content">
            <table class="TabelaCrud">
                <tr>
                    <td>Cargo</td>
                    <td>Quantidade de funcionários</td>
                </tr>

                <?php
                    include("Includes/Variaveis.php");
                    $Con = new mysqli("localhost", "root", "", "funcionarios");
                    $sql = mysqli_query($Con, " SELECT f.cargo as cargo , COUNT(f.cpf_funcionario) as qtdfunc
												FROM funcionario f 
												GROUP BY f.cargo");

                    while($exibe = mysqli_fetch_assoc($sql)):
                    ?>        
                        <tr>
                            <td><?php echo $exibe["cargo"]; ?></td>
                            <td><?php echo $exibe["qtdfunc"]; ?></td>
                        </tr>
                    <?php
                    endwhile;

                ?>

            </table>
	    </div>

	</body>    
    
</html>