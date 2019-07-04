<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Connexion Base de données</title>
</head>

<body>
<?php // connexion_data.php
/* Accès au serveur de bases de données MySQL */
$bddserver="127.0.0.1";
$bddlogin="root";
$bddpassword ="";
$liendb = mysql_connect($bddserver,$bddlogin,$bddpassword)or die('Erreur: '.mysql_error());
mysql_select_db ('php');
?>

</body>
</html>
