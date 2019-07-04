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
        <script language="javascript">
function verifier()
{



if(document.f.nom.value==""){alert("saisir votre nom");return false;}
if(document.f.prenom.value==""){alert("saisir votre prenom");return false;}
if(document.f.adresse.value==""){alert("saisir votre adresse");return false;}
if(document.f.pseudo.value==""){alert("saisir votre pseudo");return false;}
if(document.f.email.value==""){alert("saisir votre email");return false;}


}

</script>
        
    </head>
    <body background="bg.jpg">
        <div class="container">
			<!-- Codrops top bar -->
            <div class="codrops-top">
              <div class="clr"></div>
    </div><!--/ Codrops top bar -->		
			<header>
			  <h1>Formulaire d'inscription</h1>
			  <p>.</p>
				<p class="ie-note">D'oh!</p>
			</header>
			
			<section class="af-wrapper">
            <h3>&nbsp;</h3>
		        
				<input id="af-showreq" class="af-show-input" type="checkbox" name="showreq" />
				<label for="af-showreq" class="af-show">Enhance required fields</label>
				
				<form class="af-form" id="af-form" method="post" action="verifNouveau.php" >
					
					<div class="af-outer af-required">
						<div class="af-inner">
							<label for="nom">Nom</label>
							<input type="text" name="nom" id="input-title" required>
						</div>
					</div>
				
					<div class="af-outer af-required">
						<div class="af-inner">
							<label for="prenom">prenom</label>
							<input type="text" name="prenom"  required>
						</div>
					</div>
					
					<div class="af-outer af-required">
						<div class="af-inner">
						  <label for="pseudo">pseudo</label>
						  <input type="text" name="pseudo"  required>
						</div>
					</div>
					
					<div class="af-outer">
						<div class="af-inner">
							<label for="adresse">adresse</label>
							<input type="text" name="adresse" id="adresse" >
						</div>
					</div>
				
                    
					<div class="af-outer af-required">
						<div class="af-inner">
						  <label for="email">Email</label>
						  <input type="email" name="email"  required placeholder="Exemple123@yahoo.fr">
						</div>
					</div>
					
					<div class="af-outer">
						<div class="af-inner"></div>
					</div>
					
					<div class="af-outer">
						<div class="af-inner"></div>
					</div>
					
					<input type="submit" value="S'inscrire "  onClick="return verifier()"/> 
                    <input type="hidden" name="inscrire">
					
				</form>
			</section>
        </div>
    </body>
</html>