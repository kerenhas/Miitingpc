<?php
/**
 * page d'accueil de l'acces entreprise une fois la connexion effectues
 */
?>

<!DOCTYPE html>
<html lang="fr">	
<head><meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/css_elie/accueil-ae.css">
	<title>Accueil Acces entreprise</title>
</head>
	<div class="entete">
		<div class="entete-left">
			<a id="deco"href="deconnexion">Deconnexion</a>
		<a href="index">		
		<div class="logo">
			<img src="logo.png">
		</div></a>

		</div>
			<div class="entete-center">
				<div class="entete-right">
					<a href="#">
					<img src="images_miiting/images_acces_entreprise/tel1.png">06 22 51 43 89
					</a>
				</div>
				<div class="premium">
					<a href="#">Passer en premium</a>
				</div>
			</div>
		</div>
		<hr id="div">
<body>
	<div class="sous-entete">
		<a href="accueilEntreprise">
		<div class="accueil">
			<img src="images_miiting/images_acces_entreprise/accueil.png">
			<h3>Accueil</h3>
		</div>
		</a>
		<a href="vitrine">
		<div class="vitrine">
			<img src="images_miiting/images_acces_entreprise/vitrine.png">
			<h3>Vitrine</h3>
		</div></a>
		<a href="messagerie_entreprise">
		<div class="devis">
			<img src="images_miiting/images_acces_entreprise/devis.png">
			<h3>Demande de devis</h3>
		</div>
		</a>
	</div>
	<hr id="div2">

	<div class="container">
		<h2>Activité ce mois-ci</h2>
		<div class="content">
			<div class="activité">
				<ul>
					<li><img src="images_miiting/images_acces_entreprise/devis1.png"><span>18</span> Devis</li>
					<li><img src="images_miiting/images_acces_entreprise/clients.png"><span><?php echo $nbConv[0]["nbconv"]; ?></span> Clients touchés</li>
					<li><img src="images_miiting/images_acces_entreprise/notdone.png"><span><?php echo $nbcontrat[0]["nbcontrat"]; ?></span> Contrats signés</li>
				</ul>
			</div>
			<div class="boost">
				<h3>Boostez vos performances en<br> devenant premium</h3>
				<div class="premium1">
					<a href="#">Passer en premium</a>
				</div>
			</div>
		</div>
		<hr id="div3">
	</div>

	<div class="container2">
		<h2>Des conseils pour améliorer <br>votre visibilité</h2>
		<div class="content2">
			<div class="left">
				<ul>
					<li><img src="images_miiting/images_acces_entreprise/1.png"><span class="bold"> Créer ton design:</span> Propose nous <span class="bold">ta meilleure création</span>, pour pouvoir etre séléctionné parmi les meilleurs design et pouvoir peut-être voir ton design dans <span class="bold">notre prochaine collection.</span></li>
					<li><img src="images_miiting/images_acces_entreprise/2.png">Sélection des 10 meilleurs: Notre équipe vas sélectionner les 10 meilleurs design de pull afin de les mettre à l’honneur.</li>
					<li><img src="images_miiting/images_acces_entreprise/3.png">Les votes par le public: Le concours fonctionne avec un système de vote. Les gens sont libres de voter pour les designs qu’il préfèrent en se connectant sur le site pour être comptabilisé</li>
				</ul>
			</div>
			<div class="right">
				<img src="images_miiting/images_acces_entreprise/illu1.png">
			</div>
		</div>
	</div>

	<div class="container3">
		<div class="content3">
			<div class="left">
				<img src="images_miiting/images_acces_entreprise/illu2.png">
			</div>
			<div class="right">
				<h2>Votre vitrine est très <br>importante
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla non quam a arcu pellentesque aliquam et non enim.
				<br>
				 Ut euismod convallis lorem sed iaculis. Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
				 <br><br>
 				Morbi molestie sapien id finibus dignissim. Nunc risus est, blandit ac cursus at, convallis scelerisque massa. 
 				<br><br>
				Mauris eget mauris imperdiet, tincidunt libero vitae, vulputate risus. Maecenas quis tortor quis erat auctor dignissim in id nisi. </p>
			</div>
		</div>
		<hr id="div3">
	</div>

	<div class="container4">
		<h3>Rejoignez vite le premium
		<br>pour une meilleur efficacité</h3>
		<div class="premium1">
					<a href="#">Passer en premium</a>
				</div>
	</div>
</body>
<?php
include '../vues/footerelie.php';
?>
</html>