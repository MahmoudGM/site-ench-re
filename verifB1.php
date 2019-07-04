<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<?php 
extract($_POST);
session_start();
require('connexion.php');

if (isset($mp)) {include("menu1.php");exit();}

if(!isset($titre))
die( "ERREUR : choisissez votre produit.\n");

if(isset($valider))
	{
		
		if( empty($prix)|| empty($duree)||empty($date)) 
		{
			 echo"<script>alert(\"Tous les champls doivent etre remplis\")</script>"; 
			include('menu1.php'); exit;
		}
	if(!isset($titre))
die ("ERREUR : choisissez votre Produit.\n");

	
		if(!preg_match('/^[[:digit:]]+$/',$duree))
		 { 
		 	echo"<script>alert(\"ERREUR==> Durée non valide !!!\")</script>";
		    include("bouton1.php"); exit();
		  }
		  $n=explode("/",$date);
if(sizeof($n)!=3)
die("DN est invalide<br>");
else if (checkdate($n[1],$n[0],$n[2])==0)
die("DN est invalide<br>");
$datee=$n[2]."-".$n[1]."-".$n[0];

		if($prix<=0)
		 {
			 echo"<script>alert(\"ERREUR==> Prix non valide !!!\")</script>";
			  include("bouton1.php"); exit();
		  }
	
	$vd=$_SESSION['pseudo'];
		$req="INSERT INTO encher(id,produit_id,vendeur_pseudo,dernier_pseudo,prix_initial,duree,prix,date) VALUES 		('','$titre',$vd,'$vd','$prix','$duree','$prix','$datee')";
		
		$rep=mysql_query($req);
	
		echo"<script>alert(\"le produit est mis en enchere avec succes !!!\")</script>";
		
		include("menu1.php");
		exit();
	}	


Mysql_close($liendb);
 ?>
</body>
</html>