
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
<?php 
require ("connexion.php");
session_start(); 
$w=$_SESSION['pseudo'];

$req= "Select DISTINCT p.titre,e.date ,e.prix 
	   FROM produit p , users u , enchere e 
	   WHERE (p.id=e.produit_id) and (e.dernier_pseudo LIKE '$w' )"; 
$res=mysql_query($req);

echo'
		  
		  
    <body>
        <div class="container">
			<!-- Codrops top bar -->
            <div class="codrops-top">
              <div class="clr"></div>
    </div><!--/ Codrops top bar -->		
			<header>
			  <h1>Liste des enchères effectuées précédement </h1>
			  <p class="ie-note">Doh!</p>
			
	
			</header>
			
			<section class="af-wrapper">
            <h3>&nbsp;</h3>
		        
				
				
				<form class="af-form" id="af-form" method="post" >
				<table border="1" width="100%" style="position: relative; background-image: url("file:///C:/Users/Asus_k53s/Desktop/téléchargement.jpg")">

						<tr>
								<td><p align="center"><font face="Castellar" color="#808080">nom PRoduit</font></td>
								<td><p align="center"><font face="Castellar" color="#808080">Date</font></td>
								<td><p align="center"><font face="Castellar" color="#808080">Prix</font></td>
						</tr>
			
	
	';


while($x=mysql_fetch_assoc($res))
	{

  $titre = $x['titre'];
  $prix = $x['prix'];
  $date = $x['date'];
  
echo '
		
		<div class="af-outer">
		<div class="af-inner"></div>';
		
		
echo'<tr>
		
	
		<td><p align="center">'.$titre.'</td>
		<td><p align="center">'.$date.'</td>
		<td><p align="center">'.$prix.'</td>
	
		
		</tr>
		</div>
		</div>';
	
	}	
echo'</form>
		 </section>
        </div>
    </body>
</html>' ;
Mysql_close($liendb);
?>
        
