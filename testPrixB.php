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
	
	if(isset($menu))
		{include("menu1.php");
		 exit();}	 ?>
</body>
</html>