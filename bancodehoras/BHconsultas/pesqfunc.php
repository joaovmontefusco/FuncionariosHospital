<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Banco de Horas</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>

		<header>
			<p class="inicio"><a href="../../index.html">Início</a></p>
			<p class="titulo">Banco de Horas</p>
		</header>

		<div class="Nav">
            <li><a href="../cadastro">Registrar</a></li>
			<li><a href="../selecao">Banco de horas</a></li>
            <li><a href="../pesquisabd">Pesquisa</a></li>
            <li><a href="../hrsexigidas">Horas Exigidas</a></li>
            <li><a href="../qtdhoras">Horas Trabalhadas</a></li>
            <li><a href="../qtdhorasextras">Horas Extras</a></li>
            <li><a href="../funcativos">Funcionários Ativos</a></li>
        </div>

        
        <div class="Content">
            <table class="TabelaCrud">
                <tr>
                    <td>Data</td>
                    <td>Horário</td>
                    <td>Funcionários ativos</td>
                </tr>
                

                <?php
                    include("../Includes/Variaveis.php");
                    $Con = new mysqli("localhost", "root", "", "funcionarios");
                    $sql = mysqli_query($Con, " SELECT COUNT(f.cpf_funcionario) as fativos
                                                FROM bancodehoras bh, funcionario f 
                                                WHERE f.cpf_funcionario = bh.cpf_funcionario 
                                                AND data = '$datapesquisa' AND '$horario' BETWEEN HOUR(bh.horario_inicio) 
                                                AND HOUR(bh.horario_fim)");

                    while($exibe = mysqli_fetch_assoc($sql)):
                    ?>        
                        <tr>
                            <td><?php echo "$datapesquisa"; ?></td>
                            <td><?php echo "$horario"; ?></td>
                            <td><?php echo $exibe["fativos"]; ?></td>
                        </tr>
                    <?php
                    endwhile;

                ?>
                

            </table>

	    </div>
    </body>
</html>