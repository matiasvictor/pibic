<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
	<title>Marcar Consulta</title>
	<style type="text/css">

	html { 
            background: url(css/medico.jpg) no-repeat center center fixed; 
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
		<!--
		.style1 {
			color: #FF0000;
			font-size: x-small;
		}
		.style3 {color: #0000FF; font-size: x-small; }
	-->
</style>

</head>


<body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

	
	<?php 

$Id  = (isset($_GET['id']) ? $_GET['id'] : null);

?>


<nav class="navbar navbar-inverse" role="navigation">

<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bar1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="#">Inicio</a>
</div>

<div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bar1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <a class="navbar-brand" href="marcarconsulta.php?id=<?php echo $_GET['id']; ?> "> Marcar Consulta</a>
</div>





</body>
</html>