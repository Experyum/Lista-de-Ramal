<?php 
	seesion_start();
	$host = "localhost";
	$user ="root";
	$pass = "senha";
	$banco = "listaramis";
	$link = mysqli_connect("host", "user", "pass", "database");
	session_start();
		if(empty($_POST['email'])){
		$_SESSION['vazio_email'] = "Campo e-mail é obrigatório";
		$url = 'http://localhost/Projeto_estagio/Inserir_BD/index_castrar.php';
		echo "
			<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=$url'>
		";
	}
	$email = mysqli_real_escape_string($conn, $_POST['email']);