<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<?php
extract($_POST);

if(isset($inscrire))
{
require('connect.php');

	$req = "SELECT * FROM user where pseudo='$pseudo'"; 

	$res = mysql_query($req) or die('Erreur SQL !<br>'.$req.'<br>'.mysql_error()); 
	
	$data = mysql_fetch_assoc($res); 
	
	if($data['pseudo']==$pseudo)
		
		{ 
		echo '<p>pseudo exist deja  </p>'; 
		include('inscription.php'); 
		exit;
	 }
		
	 else{
		
		$req="INSERT INTO  user (pseudo ,nom ,prenom ,adresse ,email)
		VALUES ('$pseudo','$nom','$prenom','$adresse','$email')";
		$result=mysql_query($req);
		 
		echo 'inscription reussite';
		include('menu2.php'); 
		 
	
		exit;
		
		
		} 
		
		
mysql_close($liendb);
}
?>
</body>
</html>