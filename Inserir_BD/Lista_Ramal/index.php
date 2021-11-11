<?php
	//Incluir a conexão com banco de dados
	include_once 'conexao.php';

	$usuarios = filter_input(INPUT_POST, '', FILTER_SANITIZE_STRING);

	//Pesquisar no banco de dados nome do usuario referente a palavra digitada
	$result_user = "SELECT * FROM colaboradores";
	$resultado_user = mysqli_query($conn, $result_user);
?>
<!doctype html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<title>Lista de Ramais Geolab</title>
	<link href="styles.css" rel="stylesheet" />
	<link rel="shortcut icon" href="https://i.postimg.cc/rwJSC6RC/FAVICON.png">

</head>

<body>
	<script src="script.js"></script>
	<div id="container-geral">
		<div id="container-filter">
			<div class="row" id="row-logo-main">
				<div class="col-3"></div>
				<div class="col-6" id="container-logo">
					<img src="logo.png" alt="Girl in a jacket" width="500" height="93" id="logo">
				</div>
				<div class="col-3"></div>
			</div>
			<div class="row">
				<div class="col-3">
					<img src="logo.png" alt="Girl in a jacket" width="500" height="93" id="logo-menor">
				</div>
				<div class="col-6">
					<div class="row">
						<div class="col-12" id="titulo">
							Seja bem-vindo a lista de ramais da Geolab
						</div>
					</div>
					<div class="row" style="height: 40px;">
						<input type="text" onkeyup="filter()"
							placeholder="Pesquise o ramal, nome ou departamento " id="nome_ramais">
					</div>
				</div>
				<div class="col-3">
				</div>
			</div>
		</div>
		<div id="table-filtro">
			<table class="table table-bordered table-hover table-condensed" id="table-ramal">
				<thead>
					<tr>
						<th title="Field #1">RAMAL</th>
						<th title="Field #2">DEPARTAMENTO</th>
						<th title="Field #3">COLABORADOR</th>
						<th>SETOR</th>
						<th>EMAIL</th>
					</tr>
				</thead>
				<tbody>
				
					<?php 

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
	while($row_user = mysqli_fetch_assoc($resultado_user)){
		echo"<tr>";
		echo "<td class='ramal'>".$row_user['ramal']."</td>";
		echo "<td >".$row_user['departamento']."</td>";
		echo "<td>".$row_user['colaborador']."</td>";
		echo "<td class='ramal'>".$row_user['setor']."</td>";
		echo "<td>".$row_user['email']."</td>";
		echo"</tr>";
	}
}else{
	echo "Nenhum usuário encontrado ...";
}
					 ?>
		
		
				</tbody>
			</table>
		</div>
		<div>
			<button class="open-button" onclick="togglePopup()">Algo errado ?</button>
		</div>
	</div>

	<div class="chat-popup" id="myForm">

		<center> <a href="http://localhost/Projeto_estagio/Inserir_BD/index_castrar.php"
			target="_blank"><button class="CaixaBotao1">Cadastrar.</button></a></center>
			<center> <a href="http://localhost/Projeto_estagio/Inserir_BD/index_deletar.php"
			target="_blank"><button class="CaixaBotao2">Deletar.</button></a>
		<a href="http://localhost/Projeto_estagio/Inserir_BD/index_editar.php"
			target="_blank"><button class="CaixaBotao3">Editar.</button></a></center>

	</div>
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/2.2.3/jquery.min.js"></script>
		<script type="text/javascript" src="personalizado.js"></script>
</body>
</html>


<!--select desc_depto, nome_colaborador, desc_cargo, desc_filial from rh.DimColaboradoresHistorico  
where cod_situacao not in(7, 502, 24) and
num_pis <> '0' and 
nome_colaborador like '%elian%'
--desc_depto like '%estabi%'
--desc_cargo like '%COORDENADOR DE PRODUÇÃO%'
--desc_filial like '%site 2%'
ORDER by desc_depto ASC-->