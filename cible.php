

<?php
extract($_POST);
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


$req=$bdd->prepare('INSERT INTO personne (nom,prenom,adresse,code,ville) VALUES (?,?,?,?,?)');
$req->execute(array($nom,$prenom,$adresse,$code,$ville));
$a= $bdd->prepare('SELECT id FROM personne WHERE nom=?
AND code= ?');
$a->execute(array( $nom,$code));
$resultat = $a->fetch();
session_start();
$_SESSION['id'] = $resultat['id'];
header('location:affiche.php');




?>