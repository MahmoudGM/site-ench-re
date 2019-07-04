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
			  <h1> Mettre un objet en enchère</h1>
			  <p class="ie-note">D'oh!</p>
			</header>
			
			<section class="af-wrapper">
            <h3>&nbsp;</h3>
            <label for="af-showreq" class="af-show">Les champs obligatoires</label>
				
<form class="af-form" id="af-form" method="post" action="verifB1.php" >
					
					<div class="af-outer">
						<div class="af-outer af-required">
							<label for="titre">Titre</label>
							<select name="titre" id="titre" required >
 <?php
 session_start();
 require('connexion.php');
$req="select  * from produit " ;
$rep=mysql_query($req);
 
while ($x=mysql_fetch_assoc($rep))
{
	$id=$x['id'];
	$titre=$x['titre'];
	echo"
    <option value=".$id.">".$titre."</option>";
}
?>
</select>
						</div>
					</div>
                    <br><br>
					<div class="af-outer">
						<div class="af-outer af-required">
							<label for="prix">prix</label>
							<input type="text" name="prix"  placeholder="En DINARS" required >
						</div>
					</div>
					<br><br>
					<div class="af-outer">
						<div class="af-inner">
						  <label for="date">Date</label>
						  <input type="text" name="date" placeholder="jj/mm/aaaa"  required >
						</div>
					</div>
					<br><br>
					<div class="af-outer">
						<div class="af-inner">
							<label for="duree">duree</label>
							<input type="text" name="duree" id="duree" placeholder="En JOURS" required >
						</div>
					</div>
				<br><br>                  		
					<input type="submit" value="Valider" name="valider" /> 
         		                </form>
		  </section>
        </div>
    </body>
</html>