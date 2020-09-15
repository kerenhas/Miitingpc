<div class="presta">
	<?php
	include '../vues/v_entete.php';
	?>

	<script>
		function refuserToucheEntree(event) {
			// Compatibilité IE / Firefox
			if (!event && window.event) {
				event = window.event;
			}
			// IE
			if (event.keyCode == 13) {
				event.returnValue = false;
				event.cancelBubble = true;
			}
			// DOM
			if (event.which == 13) {
				event.preventDefault();
				event.stopPropagation();
			}
		}
	</script>
	<link rel="stylesheet" type="text/css" href="styles/css_elie/prestataire.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" language="javascript" src="node_modules/jquery/dist/jquery.js"></script>


	<div class="background" style="background-image: url('images_miiting/images_prestataire/backgroundpresta.png');">
		<h1>Les meilleurs prestataires pour vos évènements</h1>
		<form action="prestataires" method="POST">
		<div class="search">
                <img src="images_miiting/images_prestataire/search.png">
                <input placeholder=" Que Recherchez-vous?" id="search" type="search" name="search" autocomplete="off" onkeypress="refuserToucheEntree(event);">
                <input placeholder="Ou ça ?"id="right" >
                <div id="results" style="background-color: white;position: absolute; left: 4%; width: 38%;">
                </div>
                <button type="btn" name="rechercher" id="rechercher">Recherche</button>
            </div>
		</form>
	</div>

	<div class="container">
		<h2>Nos prestataires:</h2>
		<div class="bandeau">
			<ul>
				<?php

				for ($i = 0; $i < 9; $i++)
				 {
				?>
					<a
					 <?php if(!empty($prestataires[0]['prestation_libelle']) && $prestataires[0]['prestation_libelle'] == $prestatations[$i]['libelle'])
					 { 
						
					?> style="background-color:aliceblue;" <?php
					} ?> href="prestation-<?php echo $prestatations[$i]['id']; ?>" ><?php echo $prestatations[$i]['libelle']; ?></a>
				<?php
				}
				?>
			</ul>
		</div>

		<div class="bandeau2">
			<ul>
				<?php

				for ($i = 9; $i < count($prestatations); $i++) {
				?>
					<!-- <a onclick="prestation(<?php //echo $prestatations[$i]['id']; ?> );"><?php //echo $prestatations[$i]['libelle']; ?></a> -->
					<a 					 <?php if(!empty($prestataires[0]['prestation_libelle']) && $prestataires[0]['prestation_libelle'] == $prestatations[$i]['libelle'])
					 { 
						
					?> style="background-color:aliceblue;" <?php
					} ?> href="prestation-<?php echo $prestatations[$i]['id']; ?>" ><?php echo $prestatations[$i]['libelle']; ?></a>
				<?php
				}
				?>
			</ul>
		</div>

		<?php
		// affichage de tous les prestataires si il y en a 
		if (count($prestataires) <> 0) 
		{
		?>
			<div class="content">
				<div class="leftbig">
					<?php
					for ($i = 0; $i < count($prestataires); $i++) {
					?>
						<div class="left">
							<div class="left1">
								<img src="<?php echo $prestataires[$i]['logo'] ?>">
							</div>
							<div class="right1">
								<h3><?php echo $prestataires[$i]['libelle'] . "-" . $prestataires[$i]['nom_contact'] ?></h3>
								<h4><?php echo $prestataires[$i]['prestation_libelle'] ?></h4>
								<p><?php echo fonctionsUtils::tronque($prestataires[$i]["description"], 200); ?></p>
								<div class="bottom">
									<!-- <h5><span>Telephone:</span> <?php //echo $prestataires[$i]['tel'] 
																		?></h5> -->
									<h5><span>Tarif:</span> <?php echo $prestataires[$i]['tarif'] ?></h5>
									<!-- ajouter un bouton nous contacter si l'utilisateur est connecter -->
									<a href="presentation-prestataire-<?php echo $prestataires[$i]['id']; ?>">Plus d'information</a>
								</div>
							</div>
						</div>
					<?php
					}
					?>
				</div>
					<?php
					if (count($prestataires) >= 2) 
					{
					?>
				<div class="rightbig">
					<?php
					for ($i = 0; $i < count($prestatairesSuivant); $i++) {

					?>
						<div class="right">
							<div class="left2">
								<img src="<?php echo $prestatairesSuivant[$i]['logo'] ; ?>">
							</div>
							<div class="right2">
								<h3><?php echo $prestatairesSuivant[$i]['libelle'] . "-" . $prestatairesSuivant[$i]['nom_contact'] ?></h3>
								<h4><?php echo $prestatairesSuivant[$i]['prestation_libelle'] ?></h4>
								<p><?php echo fonctionsUtils::tronque($prestatairesSuivant[$i]["description"], 90); ?></p>
								<div class="bottom2">
									<h5><span>Tarif:</span> <?php echo $prestatairesSuivant[$i]['tarif'] ?></h5>
									<a href="presentation-prestataire-<?php echo $prestatairesSuivant[$i]['id'] ;?>">Voir plus</a>
								</div>
							</div>
						</div>
					<?php
					}
				}else {
					?>
					<div class="right">
							<div class="left2">
								<!-- <img src="images_miiting/images_prestataire/table.png"> -->
								<img src="<?php echo $prestatairesSuivant[$i]['logo'] ; ?>">
							</div>
							<div class="right2">
								<h3><?php echo $prestatairesSuivant[$i]['libelle'].$prestatairesSuivant[$i]['libelle'] . "-" . $prestatairesSuivant[$i]['nom_contact'] ?></h3>
								<h4><?php echo $prestatairesSuivant[$i]['prestation_libelle'] ?></h4>
								<p><?php echo fonctionsUtils::tronque($prestatairesSuivant[$i]["description"], 90); ?></p>
								<div class="bottom2">
									<h5><span>Tarif:</span> <?php echo $prestatairesSuivant[$i]['tarif'] ?></h5>
									<a href="presentation-prestataire-<?php echo $prestatairesSuivant[$i]['id'] ;?>">Voir plus</a>
								</div>
							</div>
						</div>
					<?php
				}
					?>

				</div>
			</div>
		<?php
		} else {
		?>
			<center>
				<p>Il n'y pas encore de prestataires pour cette prestation ! </p>
			</center>
			<div class="pubs">
				<center><img src="images_miiting/images_prestataire/pub2.png"></center>
			</div>
		<?php
		}
		?>

		<!-- <div class="pubs">
						<img id= "pub2"src="images_miiting/images_prestataire/pub2.png">
					</div> -->
	</div>
	<script type="text/javascript" language="javascript" src="js/ajax_search_nav.js"></script>
	<script type="text/javascript" language="javascript" src="js/presta.js"></script>
	<footer style="margin-top: 20%;">
	<?php
	include '../vues/footerelie.php';
	?>
	</footer>

</div>
</body>

</html>