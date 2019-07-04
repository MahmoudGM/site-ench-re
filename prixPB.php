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
			  <h1>Le prix n'est pas bon </h1>
			  <p class="ie-note">D'oh!</p>
              
              <p>Ne respecte pas le pas d'évolution</p>
				<p class="ie-note">D'oh!</p>
			</header>
			
			<section class="af-wrapper">
            <h3>&nbsp;</h3>

				<form class="af-form" id="af-form" method="post" action ="testPrixPB.php" >
<input type="submit" value="Retour" name="retour"/> 					
				</form>
		  </section>
        </div>
    </body>
</html>