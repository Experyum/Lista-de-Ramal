<?php
//Incluir a conexão com banco de dados
include_once 'conexao.php';


//Pesquisar no banco de dados nome do usuario referente a palavra digitada
$result_user = "SELECT * FROM colaboradores WHERE colaborador LIKE '%%'";
$resultado_user = mysqli_query($conn, $result_user);

if(($resultado_user) AND ($resultado_user->num_rows != 0 )){
	while($row_user = mysqli_fetch_assoc($resultado_user)){
		echo"<tr>";
		echo "<td>".$row_user['ramal']."</td>";
		echo "<td>".$row_user['departamento']."</td>";
		echo "<td>".$row_user['colaborador']."</td>";
		echo "<td>".$row_user['setor']."</td>";
		echo "<td>".$row_user['email']."</td>";
		echo"</tr>";
	}
}else{
	echo "Nenhum usuário encontrado ...";
}