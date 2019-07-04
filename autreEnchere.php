<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
        <title>Autre enchère</title>
        
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
            	
                <br>
			  <h1>Voiçi la liste des enchères effectuées précedement sur ce produit</h1>
			  <p class="ie-note">D'oh!</p>
			</header>
			
			<section class="af-wrapper">
            <h3>&nbsp;</h3>

				<form class="af-form" id="af-form" method="post" >
				 <?php 
require ('connexion.php');
extract($_GET);
extract($_POST);
session_start();
echo'<table> 
		<tr> 
			<td>pseudo Client</td>
			<td>prix final</td>
			</tr>';


if(isset($id))
	{$req="select *  
	 from  produit p ,enchere e 
	 where e.produit_id = '$id' and e.id=e.produit_id" ;
	 
	$res = mysql_query($req) or die('Erreur SQL !<br>'.$req.'<br>'.mysql_error()); 	
	while($xx=mysql_fetch_array($res))
{
	$pseudU = $xx['vendeur_pseudo'];	
	$prixF = $xx['prix'];
	echo'<tr> 
			<td>'.$pseudU.'<td>
			<td>'.$prixF.'<td>
		</tr>';	
}

}

echo '</table>';
?>
				 <br><br>
                 
                    <br><br><br>
                  
					
				</form>
		  </section>
        </div>
    </body>
</html>

</body>
</html>