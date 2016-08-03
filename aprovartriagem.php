<?php 
// RECEBENDO OS DADOS PREENCHIDOS DO FORMULÁRIO !
$hospital	= (isset($_POST ["hospital"]) ? $_POST["hospital"] : null);	//atribuição do campo "hospital" vindo do formulário para variavel	
$sintomas	= (isset($_POST ["sintomas"]) ? $_POST["sintomas"] : null);	//atribuição do campo "sintomas" vindo do formulário para variavel
//$ddd	= (isset($_POST ["ddd"]) ? $_POST["ddd"] : null);	//atribuição do campo "ddd" vindo do formulário para variavel

//Gravando no banco de dados !

$servername = "localhost";
$username = "root";
$password = "pibic";
$bdados = "clientes";


//conectando com o localhost - mysql
$conexao = mysqli_connect($servername, $username, $password, $bdados);
if (!$conexao)
	die ("Erro de conexão com localhost, o seguinte erro ocorreu -> ".mysql_error());

//conectando com a tabela do banco de dados
$banco = mysqli_select_db($conexao, $bdados);
if (!$banco)
	die ("Erro de conexão com banco de dados, o seguinte erro ocorreu -> ".mysqli_error());



$query =  "INSERT IGNORE INTO Clientes (hospital , sintomas , id) VALUES ('$hospital', '$sintomas', id)";


mysqli_query($conexao, $query);


$url = 'cadastrado.html';

		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';


echo "Sua consulta foi marcada com sucesso!<br>Obrigado!.";
?> 