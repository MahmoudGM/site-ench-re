<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<?php 
require ("connexion.php");
extract($_POST);
session_start(); 
	if(isset($envoyer)&& !empty($prix))
	{
		$w=$_SESSION['pseudo'];
		$req = "select *
			    from  produit p ,enchere e
				where ((p.id=e.produit_id) and ( e.prix<'$prix'))"; 
		$res = mysql_query($req) or die('Erreur SQL !<br>'.$req.'<br>'.mysql_error()); 
		
		$xx=mysql_num_rows($res);

if($xx==0){ include('prixPB.php'); exit;}
else {include('prixB.php'); exit;}

		}
	
?>
</body>
</html>