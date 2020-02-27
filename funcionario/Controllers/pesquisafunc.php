<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Funcionários</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>

		<header>
			<p class="inicio"><a href="../../index.html">Início</a></p>
			<p class="titulo">Funcionários</p>
		</header>

		<div class="Nav">
            <li><a href="../cadastro">Cadastrar</a></li>
			<li><a href="../selecao">Funcionários</a></li>
			<li><a href="../pesquisafunc">Pesquisa</a></li>
			<li><a href="../dependentes">Dependentes</a></li>
        </div>

        
        <div class="Content">
            <table class="TabelaCrud">
                <tr>
                    <td>CPF</td>
                    <td>Nome</td>
                    <td>Telefone</td>
                    <td>Endereço</td>
                    <td>Cargo</td>
                    <td>Salário</td>
                    <td>Status</td>
                    <td>Código do departamento</td>
                </tr>
                

                <?php
                    include("../Includes/Variaveis.php");
                    $Con = new mysqli("localhost", "root", "", "funcionarios");
                    $sql = mysqli_query($Con, " SELECT * 
                                                FROM funcionario
                                                WHERE cpf_funcionario = $cpf_procura");

                    while($exibe = mysqli_fetch_assoc($sql)):
                    ?>        
                        <tr>
                            <td><?php echo $exibe["cpf_funcionario"]; ?></td>
                            <td><?php echo $exibe["nome"]; ?></td>
                            <td><?php echo $exibe["telefone"]; ?></td>
                            <td><?php echo $exibe["endereco"]; ?></td>
                            <td><?php echo $exibe["cargo"]; ?></td>
                            <td><?php echo $exibe["salario"]; ?></td>
                            <td><?php echo $exibe["status"]; ?></td>
                            <td><?php echo $exibe["codigo_dpto"]; ?></td>
                        </tr>
                    <?php
                    endwhile;

                ?>
	    </div>
    </body>
</html>