<?php 

define('DB_HOST', 'localhost'); 
define('DB_NAME', 'clientes'); 
define('DB_USER','root'); 
define('DB_PASSWORD','pibic'); 



//function SignIn() {  


$conexao = mysqli_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysqli_error()); 

$db = mysqli_select_db($conexao, DB_NAME) or die("Failed to connect to MySQL: " . mysqli_error()); 


$Id	= (isset($_POST ["login"]) ? $_POST["login"] : null);  


$Passsword	= (isset($_POST ["senha"]) ? $_POST["senha"] : null);
//starting the session for user profile page


if(!empty($_POST['login'])) 

 //checking the 'user' name which is from Sign-In.html, is it empty or have some text 

{ 

	$sql = "SELECT `login`, `senha` FROM Clientes WHERE `login` = '".$Id."' AND `senha` = '".$Passsword."' ";



		//"SELECT login, senha FROM Clientes";


	$query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao)); 

	$row = mysqli_fetch_array($query);


	$sql2 = "INSERT IGNORE INTO Triagem (nome, hospital, sintomas, id ) SELECT `nome`, '0', '0' , `id` FROM Clientes";


	$query = mysqli_query($conexao, $sql2) or die(mysqli_error($conexao)); 

	$sql3 = "SELECT `id` FROM Clientes WHERE `login` = '".$Id."'";

	$query2 = mysqli_query($conexao, $sql3) or die(mysqli_error($conexao)); 

	$row2 = mysqli_fetch_array($query2);




	if (empty($row)) {
    // Nenhum registro foi encontrado => o usuário é inválido
		
		$url = 'login2.html';

		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

	} else {

			$url = 'cadastrado.php?id=' .$row2['id'].'';

		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';





		} }  
		if(isset($_POST['submit'])) { SignIn(); } 

		?>
