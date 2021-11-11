



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
	<div class="Painel">
		<section class="CaixaTexto-Container">
			<h1>Cadastre-se</h1>
			<form method="POST" action="Inserir_editar.php">
				<input type="text" class="CaixaTexto1" name="cpf" placeholder = "CPF" required><br><br>
				<input type="text" class="CaixaTexto2" name="ramal" placeholder = "Ramal"><br><br>
				<input readonly type="text" class="CaixaTexto3" name="colaborador" placeholder = "Colaborador"><br><br>
				<input  type="email" class="CaixaTexto4" name="email" placeholder= "E-mail"><br><br>
				<input disabled type="text" class="CaixaTexto5" name="departamento" placeholder = "Departamento"><br><br>
				<input disabled type="text" class="CaixaTexto6" name="setor" placeholder = "Setor"><br><br>
				<a href="Lista_Ramal\index.php" name="voltar"><input type="submit" value="Voltar" class="Botao2"  name="voltar"></a>
				<a href ="Inserir_editar.php" ><input type="submit" value="Cadastrar" class="Botao1" name="cadastrar" ></a>
			</form>
			<div class="Botao-Container">
				
				
			</div>






		</div>

	</section>

</div>
</body>


</html>

<?php


if(isset($_POST['voltar'])) {

	
	header('Location: '.Lista_Ramal\index.php);
};
?>
