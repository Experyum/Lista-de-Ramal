
<!DOCTYPE html>
<html lang="pt-br">
	<head>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
		<meta charset="utf-8">
		<title>Cadastrar</title>
		<link href="estilos_inserir.css" rel="stylesheet">
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
	</head>

	<body>
		<div class= "fundo">
			<div class="superior"><img src="logo.png"></div>
			<div class="central">
			<script type='text/javascript'>

						$(document).ready(function(){
					$("input[name='cpf']").blur(function(){
						var $departamento = $("input[name='departamento']");
						var $colaborador = $("input[name='colaborador']");
						var $setor = $("input[name='setor']");
						var $email = $("input[name='email']");
						$.getJSON('function.php',{ 
							cpf: $( this ).val() 
						},function( json ){
							$departamento.val( json.departamento );
							$colaborador.val( json.colaborador );
							$setor.val( json.setor );
							$email.val( json.email );
						});
					});
				});
			</script>
			
					<div class = pai>	
						<div class = filho>
							<h1>Cadastre-se</h1>
							<hr><br>
								<form method="POST" action="">
									<input type="text" class="cpf" name="cpf" placeholder = "CPF"><br><br>
									<input type="text" class="ramal" name="ramal" placeholder = "Ramal"><br><br>
									<input type="text" class="colaborador" name="colaborador" placeholder = "Colaborador"><br><br>
									<input type="text" class="email" name="email" placeholder= "E-mail"><br><br>
									<input type="text" class="departamento" name="departamento" placeholder = "Departamento"><br><br>
									
									<input type="text" class="form-control" name="setor" placeholder = "Setor"><br><br>
									<hr>
									<input type="submit" value="Cadastrar" class="cadastrar" name="cadastrar" >
									<input type="submit" value="Voltar" class="voltar"  name="voltar" >
									<input type="submit" value="Deletar" class="deletar" name="deletar" >
									
								</form>

							
						</div>
					</div>
				</div>
			</div>
		</body>
																			
<?php 
//Pegamos as variaveis através metodo $_POST
$ramal = $_POST['ramal'];
$departamento = $_POST['departamento'];
$colaborador = $_POST['colaborador'];
$cpf = $_POST['cpf'];
$setor = $_POST['setor'];
$email = $_POST['email'];
//-------------------------conexão com banco de dados-------------------------//
$host = 'localhost';
$user = 'root';
$pass = 'senha';
$database = 'listaramis';


$conn = mysqli_connect($host, $user, $pass, $database) or die('Não foi possível conectar');
//$conn = mysqli_connect('localhost','root','','listaramis') or die ('Erro ao conectar');
//Verificar se o usuario preencheu o campo 



if(isset($_POST['cadastrar'])) {
//---------------------------código para inserir no MYSQL-------------------------------------//
$sql = "INSERT INTO listaramis.colaboradores VALUES";
$sql .= "($ramal,'$departamento','$colaborador',$cpf,'$setor','$email')"; // Utilizei o ponto para concatenar os comandos do MYSQL.
mysqli_query($conn,$sql) or die ("Erro ao tentar cadastrar colaborador");
mysqli_close($conn);

echo"Colaborador cadastrado!";
}

 ?>
</html>

