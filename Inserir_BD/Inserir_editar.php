
<?php 
//Pegamos as variaveis através metodo $_POST

//-------------------------conexão com banco de dados-------------------------//
$host = 'localhost';
$user = 'root';
$pass = 'senha';
$database = 'listaramis';


$conn = mysqli_connect($host, $user, $pass, $database) or die('Não foi possível conectar');
//$conn = mysqli_connect('localhost','root','','listaramis') or die ('Erro ao conectar');
//Verificar se o usuario preencheu o campo 
$Ramal = $_POST['ramal'];
$departamento = $_POST['departamento'];
$colaborador = $_POST['colaborador'];
$cpf = $_POST['cpf'];
$setor = $_POST['setor'];
$email = $_POST['email'];

?>




<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Cadastro</title>
	<style type="text/css">
	body{
		margin: 0;
		background-image: url(imagem_fundo.jpg);
		background-repeat: no-repeat;
		background-size: cover;
		margin-right: 33vw;
		margin-left: 33vw;
	}

	.CaixaTexto{
		display: flex;
		align-items: center;
		flex-direction: column;
		background-color: rgb(234,236,243,0.8);
		padding-bottom: 31px;
		padding-top: 25px;
		margin-top: 23vh;
		border: solid 10px;
		border-color: rgb(234,236,243,0.5);
		    box-shadow: 0px -1px 40px 0px black;
		border-radius: px;
		
	}
	p{
		font-size: 25px;
	}
	a{
		order: 1;

		font-size: 15px;
		margin-left: 16vw;
		text-decoration: none;
	}


</style>
</head>
<body>
	<div CaixaTexto-Pai>
		<div class="CaixaTexto">

			<a href="Lista_Ramal\index.php">Voltar a lista de ramal</a>
	

			<p><?php
			if(isset($_POST['cadastrar'])) {
				//---------------------------código para inserir no MYSQL-------------------------------------//
				$sql = "UPDATE listaramis.colaboradores SET";
				$sql .= " ramal = 4840, departamento = 'test',cpf = 7955 ,setor = 'tse',email = 'gfdgdf'";
				$sql .=	 " WHERE colaborador = '$colaborador'";

				mysqli_query($conn,$sql) or die ("Erro ao tentar editar colaborador!");
				mysqli_close($conn);
	
				echo"Colaborador editado!";

			};
			?></p>


		</div>

	</div>

</body>

</html>