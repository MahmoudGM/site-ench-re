
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
            	
                <br>
			  <h1></h1>
			  <p class="ie-note">D'oh!</p>
			</header>
			
			<section class="af-wrapper">
            <h3>&nbsp;</h3>

				<form class="af-form" id="af-form" method="post" action="DonnerPrix.php?id=<?php $_GET['id']?>" >
					
                    <div class="af-outer">
						<div class="af-inner">
							<label for="adresse">Détail de l'objet </label>
 <?php extract($_POST);
require ("connexion.php");
session_start();
if(isset($retour)) 
		{include("menu1.php");
		 exit();}	
extract($_GET);
if(isset($id))
{
$req="SELECT DISTINCT * FROM produit p ,enchere e where (p.id LIKE '$id') and (e.produit_id LIKE '$id')";
$rep=mysql_query($req);

while($prod=mysql_fetch_assoc($rep))
{
 	$description = $prod['description'];
	$prix=$prod['prix'];
	echo '<br><br><br>';	
 echo "$description";
 echo "$prix";
 }
  echo "<br><br><br><tr>  
  <td align='center' rowspan='2'><a href=autreEnchere.php?id=$id target=_blanck>Autres enchères sur ce produit</a></tr></table><td>";
}
?>
						</div>
					</div>
                    <br> <br> <br> 
                  <br><br><br>               
                 <div class="af-outer">
						<div class="af-inner">
							<label for="adresse">Prix</label>
							<input type="text" name="prix" id="prix" >
						</div>
					</div>
					<br><br><br>
                    <input type="submit" value="Envoyer" name="envoyer"/>                     
				</form>
		  </section>
        </div>
    </body>


</html>