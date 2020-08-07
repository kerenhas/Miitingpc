<?php
 include '../vues/v_entete.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/css_elie/acces_entreprise_connexion.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Connexion</title>
</head>
<body>
	<div class="background" style="background-image: url('images_miiting/images_acces_entreprise/background4.png');">
		<div class="container">
			<div class="left">
				<h1>Bienvenue sur l'espace entreprise
				de Miiting</h1>
				<div class="list1">
					<ul>
						<li><img src="images_miiting/images_acces_entreprise/done2.png"> Recevez les demandes de devis de mariés intéressés <span>par vos services.</span></li>
						<li><img src="images_miiting/images_acces_entreprise/done2.png">Obtenez de nouveaux clients et augmentez vos chances <span>de réussite.</span></li>
						<li><img src="images_miiting/images_acces_entreprise/done2.png">Plus de 42.000 prestataires de mariage nous font <span>déjà confiance.</span></li>
					</ul>	
				</div>
				<a href="inscription_entreprise">Inscription gratuite</a>
			</div>	
			<div class="right">
			<form action="accesEntreprise" method="POST">
				<h2>Connexion</h2>
				<img src="images_miiting/images_acces_entreprise/profil.png">
				<input name="mail" id="mail" placeholder="mail d'utilisateur" >
				<br>
				<img src="images_miiting/images_acces_entreprise/mdp.png">
				<input name="mdp" id="mdp" type="password" placeholder="Mot de passe">
				<br>
				<!-- <a href="#">Se connecter</a> -->
				<button  type="submit" name="connecter" id="connecter" class="btn btn-light">Connecter</button>
				<h4> Mot de passe oublié ?</h4> 
				</form>
			</div>	
		</div>
	</div>

	<div class="container2">
		<h2>Miiting vous propose de multiples avantages en tant qu'entreprise</h2>
		<hr>
		<div class="content">
			<div class="first">
				<img src="images_miiting/images_acces_entreprise/clients.png">
				<h3>De nouveaux clients</h3>
				<p>Grâce à Miiting, de nombreux clients vont découvrir vos prestations et realiser avec vous de nouvelles transactions.</p>
			</div>
			<div class="second">
				<img src="images_miiting/images_acces_entreprise/devis.png">
				<h3>Nouveaux devis</h3>
				<p>Miiting permet aux utilisateur de rentrer facilement en contact facilite les demandes de devissssssssssssssssssssssssssss</p>
			</div>
			<div class="third">
				<img src="images_miiting/images_acces_entreprise/devis.png">
				<h3>De nouveaux clients</h3>
				<p>Grâce à Miiting, de nombreux clients vont découvrir vos prestations et realiser avec vous de nouvelles transactions.</p>
			</div>
		</div>
	</div>

	<div class="container3">
		<div class="content2">
			<div class="left">
				<h2>Présent sur desktop et sur mobile</h2>
				<hr>
				<p>Miiting vous met à disposition une 
				mutitude de prestaires dans divers secteurs :</p>
				<div class="list2">
					<ul>
						<li><img src="images_miiting/images_acces_entreprise/photo2.png">Photographes</li>
						<li><img src="images_miiting/images_acces_entreprise/dress.png">Robes</li>
						<li><img src="images_miiting/images_acces_entreprise/animation.png">Animation</li>
						<li><img src="images_miiting/images_acces_entreprise/decoration.png">Décoration</li>
					</ul>
					<ul id="list3">
						<li><img src="images_miiting/images_acces_entreprise/banquet.png">Traiteur</li>
						<li><img src="images_miiting/images_acces_entreprise/car.png">Location voiture</li>
						<li><img src="images_miiting/images_acces_entreprise/card.png">Faire-part</li>
						<li><img src="images_miiting/images_acces_entreprise/gift.png">Cadeaux</li>
					</ul>
				</div>
			</div>
			<div class="right">
				<img src="images_miiting/images_acces_entreprise/mockup.png">
			</div>
		</div>
	</div>

	<div class="container4" style="background-image: url('images_miiting/images_acces_entreprise/background5.png');">
		<h2>Commencer dès maintenant</h2>
		<h3>Perdez plus une seconde et inscrivez-vous 
		pour permettre a votre entreprise un nouveau 
		départ</h3>
		<div class="boutton">
		<a href="inscription_entreprise"> Inscription gratuite</a>
		</div>
	</div>
<?php
 include '../vues/footerelie.php';

 ?>
</body>
</html>