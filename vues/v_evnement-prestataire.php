<div class="event">
	<?php
	include '../vues/v_entete.php';
	?>
	<link rel="stylesheet" type="text/css" href="styles/css_elie/evenement-prestataire.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Evenement-Prestataire</title>
	<div class="background" style="background-image: url('images_miiting/images_boutique_marie/backgroundd.png');">
	</div>
	<h1 class="title1">Mariage David</h1>
	<hr>
	<div class="sous-menu">
		<ul>
		<a href="event-2">
			<li>Mon évênement</li>
			</a>
			<a href="mesevents">
				<li>Mes évênements</li>
			</a>
			<a href="mamessagerie">
				<li>Messagerie</li>
			</a>
			<a href="https://www.miiting.fr/login">
			<li>Plan de table</li>
		    </a>
			<a href="prestaevent">
				<li>Prestataires</li>
			</a>
			<li>Tâches</li>
		</ul>
		<hr>
	</div>

	<?php
	if (count($prestaContrat) > 0) {
	?>
		<div class="container">
			<h2>Choisis pour mon évênement:</h2>
			<div class="content1">
				<?php
				for ($i = 0; $i < count($prestaContrat); $i++) {
				?>
					<div class="prestataire">

						<div class="left">
							<img src="images_miiting/images_prestataire/ams.png">
						</div>
						<div class="right">

							<h3><?php echo $prestaContrat[$i]['libelle']; ?></h3>
							<p><?php echo fonctionsUtils::tronque($prestaContrat[$i]['description'], 100); ?></p>
							<h4><span>Contrat:</span> 25/06/2020</h4>
							<h4><span>Prix:</span> <?php echo $prestaContrat[$i]['tarifs']; ?>

						</div>
					</div>
				<?php
				}
				?>
			</div>

		</div>
	<?php
	}
	?>

	<h2>Disponibles pour mon évênement:</h2>
	<!-- </div> -->

	<div class="container2">
		<div class="line1">
			<a href="prestation-1">
				<img src="images_miiting/prestataires_logo/traiteur.png">
			</a>
			<div class="text">
			</div>
			<a href="prestation-13">
				<img src="images_miiting/prestataires_logo/bijoux.png">
			</a>
			<div class="text2">
			</div>
			<a href="prestation-2">
				<img src="images_miiting/prestataires_logo/salle.png">
				<div class="text3">
				</div>
			</a>
		</div>
		<div class="line2">
			<a href="prestation-7">
				<img src="images_miiting/prestataires_logo/decorateur.png">
				<div class="text4">
				</div>
			</a>
			<a href="prestation">
				<img src="images_miiting/images_boutique_marie/voirplus.png">
				<div class="text6">Voir plus
				</div>
			</a>
		</div>
		<div class="pubs">
			<img id=pub2 src="images_miiting/images_boutique_marie/pub2.png">
			<!-- <img id= pub1 src="images_miiting/images_boutique_marie/pub1.png"> -->
		</div>
	</div>
	<script type="text/javascript" src='js/ajax_change_event.js'></script>
	<?php
	//   include '../vues/footerelie.php';
	include '../vues/v_footer.html';
	?>
	</body>

	</html>

</div>