<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Banco de Horas</title>
		<link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/horasmes.css">
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
                    <td>Nome</td>
                    <td>Horas extras</td>
                </tr>
                

                <?php
                    include("../Includes/Variaveis.php");
                    $Con = new mysqli("localhost", "root", "", "funcionarios");
                    $sql = mysqli_query($Con, " SELECT f.nome, timediff(SUM(timediff(horario_fim, horario_inicio)), (d.horas*10000)) as difextra
                                                FROM bancodehoras bh, funcionario f, departamento d
                                                WHERE bh.cpf_funcionario = f.cpf_funcionario and MONTH(bh.data) ='$mes' and d.codigo_dpto = f.codigo_dpto
                                                GROUP BY f.cpf_funcionario
                                                HAVING difextra > 0");

                    while($exibe = mysqli_fetch_assoc($sql)):
                    ?>        
                        <tr>
                            <td><?php echo $exibe["nome"]; ?></td>
                            <td><?php echo $exibe["difextra"]; ?></td>
                        </tr>
                    <?php
                    endwhile;

                ?>
                

            </table>

	    </div>
    </body>
</html>