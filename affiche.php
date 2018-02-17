<?php 

session_start();

if(isset($_SESSION['id'])){

}else{
  header('location:erreur.php');}
   try
{
  $server="localhost";
  $login="root";
  $password="";
$bdd = new PDO('mysql:host='.$server.';dbname=ecole;charset=utf8',$login,$password);
}
catch(Exception $e)
{
header('location:erreur.php');
}



	$selection = $bdd->query("SELECT * FROM personne ");
?>
<!DOCTYPE html>
<html>
<head>
	<title>page</title>
		<link rel="stylesheet" href="frontend/css/bootstrap.css">
	<link rel="stylesheet" href="frontend/css/font-awesome.css">
  <link rel="stylesheet" href="/frontend/css/Layout.css">
	<link rel="stylesheet" type="text/css" href="bbd.css">
	<script type="text/javascript" src="frontend/js/jquery.js" ></script>
    <script type="text/javascript" src="frontend/js/dropdown.js"></script>
     <script type="text/javascript" src="frontend/js/script.js"></script>
      <script type="text/javascript" src="frontend/js/collapse.js"></script>
      <script type="text/javascript" src="frontend/js/button.js"></script>
      
</head>
<body >
<div class="container">
<div class="row">
<div  class="col-md-12">
<table class="table table-striped table-bordered table-condensed">
 <legend><h2 style="color:blue ;font-family: Consolas">  Vos Informations</h2></legend>
  <?php
  while ($selection_data=$selection->fetch()) {
    ?>
    <tr>
    
    <td ><?php echo($selection_data['nom']);?></td>
    <td ><?php echo($selection_data['prenom']);?></td>
    <td><?php echo($selection_data['adresse']);?></td>
     <td ><?php echo($selection_data['code']);?></td>
    <td ><?php echo($selection_data['ville']);?></td>
    </tr>
    <?php 
  }
 
   ?></table></div></div>
</div>
</body>
</html>