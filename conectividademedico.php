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

	$sql = "SELECT `login`, `senha` FROM Medicos WHERE `login` = '".$Id."' AND `senha` = '".$Passsword."' ";



		//"SELECT login, senha FROM Clientes";


	$query = mysqli_query($conexao, $sql) or die(mysqli_error($conexao)); 

	$row = mysqli_fetch_array($query);

	if (empty($row)) {
    // Nenhum registro foi encontrado => o usuário é inválido
		
		$url = 'login2medico.html';

		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';

	} else {

			$url = 'cadastradomedico.html';

		echo'<META HTTP-EQUIV=Refresh CONTENT="0; URL='.$url.'">';





		} }  
		if(isset($_POST['submit'])) { SignIn(); } 

		?>
