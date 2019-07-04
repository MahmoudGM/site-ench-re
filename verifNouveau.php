<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
</head>

<body>
<?php
session_start();
extract($_POST);
require("connexion.php");
if(isset($inscrire))
{
	{if( empty($pseudo )||empty($nom)||empty($prenom)||empty($adresse)||empty($email)){ echo"<script>alert(\"ERRUR ==>Il faut remplir tous les champs\")</script>";
	 include("inscription.php"); exit;}}	
	$req = "SELECT * FROM users where pseudo='$pseudo'"; 

	$res = mysql_query($req) or die('Erreur SQL !<br>'.$req."<br>".mysql_error()); 
	
	$data = mysql_fetch_assoc($res); 
	
	if($data['pseudo']==$pseudo)
		
		{ 
		echo '<p>pseudo exist deja  </p>'; 
		include("inscription.php"); 
		exit;
	 }
		
	 else{
		
		$req="INSERT INTO  users (pseudo ,nom ,prenom ,adresse ,adresse_email)
		VALUES ('$pseudo','$nom','$prenom','$adresse','$email')";
		$result=mysql_query($req);
		 
		echo "inscription reussite"; 
	
		
		include("index.php"); 
		exit;
		
		} 
		
		
mysql_close($liendb);
}
?>
</body>
</html>