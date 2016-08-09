<?php 


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

$query = "SELECT  nome , hospital , sintomas, id FROM Triagem";


$consulta = mysqli_query($conexao, $query);

$row = mysqli_fetch_assoc($consulta);


$option = '';
$option2 = '';

while($line = mysqli_fetch_assoc($consulta))
{

 $select = $row["nome"] == $line["nome"] ? "selected" : "";

 //$option .= '<option value = "'.$line['nome'].'"selected="selected">'.$line['nome'].'</option>';

 

 $option .= '<option value = "'. $line["nome"] .'" $select> '. $line["nome"] .'</option>';

 //$option .= '<option value= \"". $line["id"] . "\" $select>" . $line["nome"] . "</option>';


}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="UTF-8">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

  <title>Aprovar Triagem </title>
  <style type="text/css">
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

 <!-- <form class="form-horizontal" id="cadastro" name="cadastro" method="post" action="cadastro.php" onsubmit="return validaCampo(); return false;"> -->

 <legend> Editar Triagem:</legend>


 <form role="form" enctype="multipart/form-data" id="cadastro" method="POST" action="categorizartriagem.php">



   <div align="center" class="form-group">

    <label for="nome">Selecione um nome: </label>



    <select style="width:300px" class="form-control" name="selectoption" id="nome" onchange="location.href='aprovartriagem.php?nome='+this.value">


      <?php 

      echo $option;



      ?>


    </select>
  </div>

  <?php 

  $sql= "SELECT nome, id FROM Triagem WHERE nome ='".$_GET['nome']."' LIMIT 20";

  $consulta2 = mysqli_query($conexao, $sql);

  $row2 = mysqli_fetch_assoc($consulta2);






  ?>

  <div align="center" class="form-group">

   <input type="hidden" id="id" name="id" value="<?php echo $row2["id"];?> " />

 </div>


  <div align="center" class="form-group">
              <label for="endereco">Categoria: </label>
              <select style="width:200px" class="form-control" name="triagem" id="triagem">
                <option>Selecione...</option>
                <option value="Amarelo">Amarelo</option>
                <option value="Verde">Verde</option>
               
              </select>
            </div>

<div align="center" class="controls">
  <button id="cadastrar" class="btn btn-success" type="submit"> Aprovar Triagem</button>

</div>
</form>



</body>
</html>