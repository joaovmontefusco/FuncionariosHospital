<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="utf-8">
		<title>Departamentos</title>
		<link rel="stylesheet" href="../css/style.css">
	</head>
	<body>

		<header>
			<p class="inicio"><a href="../../index.html">Início</a></p>
			<p class="titulo">Departamentos</p>
		</header>

		<div class="Nav">
            <li><a href="../cadastro">Cadastrar</a></li>
			<li><a href="../selecao">Exibir</a></li>
            <li><a href="../pesquisadpto">Pesquisar</a></li>
			<li><a href="../cargos">Cargos</a></li>
        </div>

        
        <div class="Content">
            <table class="TabelaCrud">
                <tr>
                    <td>Código</td>
                    <td>Nome</td>
                    <td>Horas exigidas</td>
                </tr>
                

                <?php
                    include("../Includes/Variaveis.php");
                    $Con = new mysqli("localhost", "root", "", "funcionarios");
                    $sql = mysqli_query($Con, " SELECT * 
                                                FROM departamento
                                                WHERE codigo_dpto = $cod_dpto");

                    while($exibe = mysqli_fetch_assoc($sql)):
                    ?>        
                        <tr>
                            <td><?php echo $exibe["codigo_dpto"]; ?></td>
                            <td><?php echo $exibe["nome"]; ?></td>
                            <td><?php echo $exibe["horas"]; ?></td>
                        </tr>
                    <?php
                    endwhile;

                ?>
	    </div>
    </body>
</html>