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
        
        <div class="Content">
            <table class="TabelaCrud">
                <tr>
                    <td>CPF</td>
                    <td>Nome</td>
                    <td>Horas exigidas</td>
                </tr>

                <?php
                    include("Includes/Variaveis.php");
                    $Con = new mysqli("localhost", "root", "", "funcionarios");
                    $sql = mysqli_query($Con, " Select f.cpf_funcionario, f.nome, horas
                                                From funcionario f, departamento d
                                                Where f.codigo_dpto = d.codigo_dpto");

                    while($exibe = mysqli_fetch_assoc($sql)):
                    ?>        
                        <tr>
                            <td><?php echo $exibe["cpf_funcionario"]; ?></td>
                            <td><?php echo $exibe["nome"]; ?></td>
                            <td><?php echo $exibe["horas"]; ?></td>
                        </tr>
                    <?php
                    endwhile;

                ?>

            </table>
	    </div>
    </body>    
</html>