<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Document sans titre</title>
</head>

<body>
<?php
session_start(); 
require("connexion.php");
extract($_POST);
$req="select DISTINCT * from produit where titre='$recherche'" ;
$rep=mysql_query($req);
echo'
	<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Enhance Required Form Fields with CSS3</title>
        
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<script type="text/javascript" src="js/modernizr.custom.04022.js"></script>
		<!--[if lt IE 8]>
			<style>
				.af-wrapper{display:none;}
				.ie-note{display:block;}
			</style>
		<![endif]-->
		
		  </head>
		  
		  
    <body>
        <div class="container">
			<!-- Codrops top bar -->
            <div class="codrops-top">
              <div class="clr"></div>
    </div><!--/ Codrops top bar -->		
			<header>
			  <h1>Voici la liste des objets en enchère </h1>
			  <p class="ie-note">Doh!</p>
			
	
			</header>
			
			<section class="af-wrapper">
            <h3>&nbsp;</h3>
		        
				
				
				<form class="af-form" id="af-form" method="post" action="RdetailOBJ.php" >
				<table border="1" width="100%" style="position: relative; background-image: url("file:///C:/Users/Asus_k53s/Desktop/téléchargement.jpg")">

						<tr>
								<td><p align="center"><font face="Castellar" color="#808080">Titre</font></td>
								<td><p align="center"><font face="Castellar" color="#808080">Prix</font></td>
								<td><p align="center"><font face="Castellar" color="#808080">Durée</font></td>
						</tr>
			
	
	';
while($prod=mysql_fetch_array($rep))
	{

  $id = $prod['id'];
  $titre = $prod['titre'];
  $categorie = $prod['categorie'];
 
		echo '
		
		<div class="af-outer">
		<div class="af-inner"></div>';
		
		
		echo'<tr>
		
	
		<td><p align="center">'.$titre.'</td>
		<td><p align="center">'.$categorie.'</td>
		<td>
		<p align="center"><a href=RdetailOBJ.php?id='.$id.' target=_blanck>Voir Plus </a></td>
		
		</tr>
		</div>
		</div>';
	
	}	
	echo '	
	  <h3>&nbsp;</h3>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="<Retour "/> 
            <input type="hidden" name="retour">';
			
	echo'</form>
		 </section>
        </div>
    </body>
</html>
				' ;
Mysql_close($liendb);
?>
</body>
</html>