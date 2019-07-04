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
	if(isset($b1))
		{include("bouton1.php");
		 exit();}	
		 	
	if(isset($b3))
		{include("bouton3.php");
		 exit();}	
		 
	if(isset($b2)&& empty($recherche))
		{include("bouton2SR.php");
		 exit();}	
		 
	if(isset($b2)&& (!empty($recherche)))
		{include("bouton2R.php");
		 exit();}		 
		 
	 	 
?>
</body>
</html>