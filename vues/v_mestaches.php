

<?php
/**
 * ensemble de taches pour un evenement
 */
include '../vues/v_entete.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/reset.css"> -->
	<link rel="stylesheet" type="text/css" href="styles/css_elie/evenement.css">
	<title>Mes tâches</title>
</head>
<body>
	<div class="title2">
		<h1>Mes tâches</h1>
	</div>
	<div class="bandeau">
		<ul>
			<a id="photographe" href="#">Photographe</a>
			<a href="#">Traiteur</a>
			<a href="#">Salle</a>
			<a href="#">DJ</a>
			<a href="#">Costume</a>
			<a href="#">Traiteur</a>
			<a href="#">Salle</a>
			<a href="#">DJ</a>
			<a href="#">Salle</a>
			<a id="seemore"href="#">Voir plus</a>
		</ul>
	</div>

	<div class="container">
		<div class="left">
			<input type="text" placeholder="Créer une nouvelle tâche"name="">
			<img id="add" src="images_miiting/images_boutique_marie/plus.png">

			<div class="task">
				<div class="left1">
					<img src="images_miiting/images_boutique_marie/notdone.png">
				</div>

				<div class="right1">
					<h3>Choisir les photos pour l'album du mariage de Jeremy</h3>
					<p><span>Budgey:</span> 2200€</p>
				</div>
			</div>

			<div class="task">
				<div class="left1">
					<img src="images_miiting/images_boutique_marie/notdone.png">
				</div>

				<div class="right1">
					<h3>Choisir les photos pour l'album du mariage de Jeremy</h3>
					<p><span>Budget:</span> 2200€</p>
				</div>
			</div>
		</div>
		<div class="rightbig">
			<div class=" left2">
				<img src="images_miiting/images_boutique_marie/mariage.png">
			</div>
			<div class="right2">
				<h3>Mariage de Manuel</h3>
				<p><span>4</span>/9</p>
				<img src="images_miiting/images_boutique_marie/jauge1.png">
			</div>
			<div class="right3">
				<img src="images_miiting/images_boutique_marie/notdone.png">
				<a href="#">Accéder</a>
			</div>
		</div>
	</div>

	<div class="prestataires">
		<h2>Photographes</h2>
		<div class="content3">
			<div class="left5">
				<img src="images_miiting/images_boutique_marie/first.png">
			</div>
			<div class="right5">
				<h3>Julien Ronan</h3>
				<img src="images_miiting/images_boutique_marie/stars.png">
				<p>Passionnée devenue professionnelle, cette artiste photographe prendra en charge l'intégralité de la partie artistique du plus beau jour de votre vie. Pour une prestation en toute discrétion digne d'une experte, Sylvie Bosc photographe vous propose son savoir-faire. Prestations Comme les envoyés... (Reportage photo mariage)</p>
				<h3 id="price"><span>Tarifs: </span>890€</h3>
				<a href="#">Plus d'informations</a>
			</div>
		</div>

		<div class="content3">
			<div class="left5">
				<img src="images_miiting/images_boutique_marie/first.png">
			</div>
			<div class="right5">
				<h3>Julien Ronan</h3>
				<img src="images_miiting/images_boutique_marie/stars.png">
				<p>Passionnée devenue professionnelle, cette artiste photographe prendra en charge l'intégralité de la partie artistique du plus beau jour de votre vie. Pour une prestation en toute discrétion digne d'une experte, Sylvie Bosc photographe vous propose son savoir-faire. Prestations Comme les envoyés... (Reportage photo mariage)</p>
				<h3 id="price"><span>Tarifs: </span>890€</h3>
				<a href="#">Plus d'informations</a>
			</div>
		</div><div class="content3">
			<div class="left5">
				<img src="images_miiting/images_boutique_marie/first.png">
			</div>
			<div class="right5">
				<h3>Julien Ronan</h3>
				<img src="images_miiting/images_boutique_marie/stars.png">
				<p>Passionnée devenue professionnelle, cette artiste photographe prendra en charge l'intégralité de la partie artistique du plus beau jour de votre vie. Pour une prestation en toute discrétion digne d'une experte, Sylvie Bosc photographe vous propose son savoir-faire. Prestations Comme les envoyés... (Reportage photo mariage)</p>
				<h3 id="price"><span>Tarifs: </span>890€</h3>
				<a href="#">Plus d'informations</a>
			</div>
		</div>
	</div>

	<div class="pubs">
					<img id="pub2" src="images_miiting/images_boutique_marie/pub2.png">
					<img id="pub1"src="images_miiting/images_boutique_marie/pub3.jpg">
	</div>



 	<?php
  include '../vues/v_footer.html';
  ?>