<?php 
    
	$login	= (isset($_POST ["login"]) ? $_POST["login"] : null);
  $entrar	= (isset($_POST ["entrar"]) ? $_POST["entrar"] : null);
   $senha	= (isset($_POST ["senha"]) ? $_POST["senha"] : null);
    $connect = mysql_connect('localhost','root','pibic');
    $db = mysql_select_db('clientes');
        if (isset($entrar)) {
                     
            $verifica = mysql_query("SELECT * FROM clientes WHERE login = '$login' AND senha = '$senha'") or die("erro ao selecionar");
                if (mysql_num_rows($verifica)<=0){
                    echo"<script language='javascript' type='text/javascript'>alert('Login e/ou senha incorretos');window.location.href='login.html';</script>";
                    die();
                }else{
                    setcookie("login",$login);
                    header("Location:index.php");
                }
        }
?>