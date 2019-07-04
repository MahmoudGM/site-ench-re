<?php
session_start();
extract ($_POST);
require("connexion.php");
if(empty($pseudo)|| empty($email))
die("Vous devez remplir tous les champs!");
$connecter="select * FROM users WHERE pseudo='$pseudo'and adresse_email='$email'";
$res=mysql_query($connecter);
if($user=mysql_fetch_assoc($res))
	{
		$_SESSION['pseudo']=$user['pseudo'];
		include("menu/menu1.php");
		exit();
	}
	else {
		header("location:index.html");}
?>