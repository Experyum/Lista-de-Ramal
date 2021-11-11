<?php
include_once("conexao.php");

function retorna($cpf, $conn){
	$result_aluno = "SELECT * FROM colaboradores WHERE cpf = '$cpf' LIMIT 1";
	$resultado_aluno = mysqli_query($conn, $result_aluno);
	if($resultado_aluno->num_rows){
		$row_aluno = mysqli_fetch_assoc($resultado_aluno);
		$valores['departamento'] = $row_aluno['departamento'];
		$valores['colaborador'] = $row_aluno['colaborador'];
		$valores['setor'] = $row_aluno['setor'];
	}else{
		$valores['colaborador'] = 'Colaborador não encontrado';
	}
	return json_encode($valores);
}

if(isset($_GET['cpf'])){
	echo retorna($_GET['cpf'], $conn);
}
?>