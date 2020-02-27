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
                    <td>Horas trabalhadas</td>
                </tr>
                

                <?php
                    include("../Includes/Variaveis.php");
                    $Con = new mysqli("localhost", "root", "", "funcionarios");
                    $sql = mysqli_query($Con, " SELECT nome, TIME_FORMAT(SUM(timediff(horario_fim, horario_inicio)) , '%H:%i')as dif
                                                FROM bancodehoras bh, funcionario f
                                                WHERE bh.cpf_funcionario = f.cpf_funcionario and MONTH(bh.data) ='$mes'
                                                GROUP BY f.cpf_funcionario");

                    while($exibe = mysqli_fetch_assoc($sql)):
                    ?>        
                        <tr>
                            <td><?php echo $exibe["nome"]; ?></td>
                            <td><?php echo $exibe["dif"]; ?></td>
                        </tr>
                    <?php
                    endwhile;

                ?>
	    </div>
    </body>
</html>