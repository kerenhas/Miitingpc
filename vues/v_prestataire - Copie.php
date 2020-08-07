

<div class="presta">
		<!DOCTYPE html>
		<html lang="fr">
		<head><meta charset="utf-8">
			<link rel="stylesheet" type="text/css" href="styles/css_elie/prestataire.css">
			<script src="https://kit.fontawesome.com/a076d05399.js"></script>
			<title>Prestataire</title>
		</head>
			<div class="entete">
				<div class="firstline">
					<div class="entreprise">
						<img src="images/logo_acce_entreprise.png">
						<h3>Accès entreprise</h3>
					</div>
					<img id="logo" src="logo.png">
				</div>

				<div class="secondline">
					<div class="enteteleft">
						<div class="login">
							<h3>ENTREZ</h3>
							<h3>INCRIVEZ-VOUS</h3>
						</div>
					</div>
					<div class="righentete">
						<h3 >CONNEXION A L'APPLICATION</h3>
					</div>
				</div>
				<hr id="entetediv">

				<div class="listentete">
					<input type="checkbox" id="check">
			<label for="check" class="checkbtn">
				<i class="fas fa-bars"></i>
			</label>
						<ul>
							<li onclick="test();">Prestataire</li>
							<li>Idées</li>
							<li>La mariée</li>
							<li>Le marié</li>
							<li>Communauté</li>
							<li>Mon évènement</li>
							<li>Corporate events</li>
						</ul>
				</div>
			</div>
		<body>
			<div class="background" style="background-image: url('images_miiting/images_prestataire/backgroundpresta.png');">
				<h1>Les meilleurs prestataires pour vos évènements</h1>
				<form>
					<div class="search">
						<img src="images_miiting/images_prestataire/search.png">
						<input placeholder="Que Recherchez-vous?" type="search" name="">
						<input placeholder="Ou ça ?" id="right" type="search" name="">
						<button>Recherche</button>
					</div>
				</form>
			</div>

			<div class="container">
			<h2>Nos prestataires:</h2>
            <div class="bandeau">
                <ul>
                    <?php
                for($i=0;$i<count($prestatations);$i++)
                {
                    ?>
                    <a onclick="prestation(<?php echo $prestatations[$i]['id'] ; ?> );" ><?php echo $prestatations[$i]['libelle'] ; ?></a>
                    <?php
                }
                    ?>
                    <!-- <a href="#">Traiteur</a>
                    <a href="#">Salle</a>
                    <a id="photographe" href="#">Photographe</a>
                    <a href="#">Costume</a>
                    <a href="#">Faire-part</a>
                    <a href="#">Décoration</a>
                    <a href="#">Animation</a>
                    <a href="#">Wedding planner</a>
                    <a href="#" onclick="test();">Voir plus</a> -->
                </ul>
            </div>
            <!-- <div class="bandeau" id="bandeau2" style="display: none">
                <ul>
                    <a href="#">Traiteur</a>
                    <a href="#">Salle</a>
                    <a id="page" href="#">Photographe</a>
                    <a href="#">Costume</a>
                    <a href="#">Faire-part</a>
                    <a href="#">Décoration</a>
                    <a href="#">Animation</a>
                    <a href="#">Wedding planner</a>
                    <a href="#" onclick="moin();">Voir moin</a>
                </ul>
            </div> -->


					<div class="content">
						<div class="leftbig">
									<?php
							for($i=0;$i<count($prestataires);$i++)
							{
								?>
							<div class="left">
								<div class="left1">
									<img src="images_miiting/images_prestataire/first.png">
								</div>
								<div class="right1">
									<h3><?php echo $prestataires[$i]['libelle']."-".$prestataires[$i]['nom_contact'] ?></h3>
									<h4><?php echo $prestataires[$i]['prestation_libelle'] ?></h4>
									<p><?php echo $prestataires[$i]['description'] ?></p>
									<div class="bottom">
										<!-- <h5><span>Telephone:</span> <?php //echo $prestataires[$i]['tel'] ?></h5> -->
										<h5><span>Tarif:</span> <?php echo $prestataires[$i]['tarif'] ?></h5>
										<!-- ajouter un bouton nous contacter si l'utilisateur est connecter -->
										<a href="#">Plus d'information</a>
									</div>
								</div>
							</div>
							<?php
							}
							?>
							<!-- <div class="left">
								<div class="left1">
									<img src="images_miiting/images_prestataire/sylvie.png">
								</div>
								<div class="right1">
									<h3>Julien Ronan</h3>
									<h4>Photographe</h4>
									<p>Passionnée devenue professionnelle, cette artiste photographe prendra en charge l'intégralité de la partie artistique du plus beau jour de votre vie. Pour une prestation en toute discrétion digne d'une experte...</p>
									<div class="bottom">
										<h5><span>Tarifs:</span> 890€</h5>
										<a href="#">Plus d'information</a>
									</div>
								</div>
							</div>
							<div class="left">
								<div class="left1">
									<img src="images_miiting/images_prestataire/jeunefille.png">
								</div>
								<div class="right1">
									<h3>Julien Ronan</h3>
									<h4>Photographe</h4>
									<p>Passionnée devenue professionnelle, cette artiste photographe prendra en charge l'intégralité de la partie artistique du plus beau jour de votre vie. Pour une prestation en toute discrétion digne d'une experte...</p>
									<div class="bottom">
										<h5><span>Tarifs:</span> 890€</h5>
										<a href="#">Plus d'information</a>
									</div>
								</div>
							</div> -->
						</div>

						<div class="rightbig">
							<div class="right">
								<div class="left2">
									<img src="images_miiting/images_prestataire/table.png">
								</div>
								<div class="right2">
									<h3>Une fée dans la boîte</h3>
									<h4>Reception</h4>
									<p>Grâce à sa touche décorative, Une fée dans la boite fait de votre mariage....</p>
									<div class="bottom2">
										<h5><span>Prix:</span> 560€</h5>
										<a href="#">Voir plus</a>
									</div>
								</div>
							</div>
							<div class="right">
								<div class="left2">
									<img src="images_miiting/images_prestataire/roche.png">
								</div>
								<div class="right2">
									<h3>Une fée dans la boîte</h3>
									<h4>Reception</h4>
									<p>Grâce à sa touche décorative, Une fée dans la boite fait de votre mariage....</p>
									<div class="bottom2">
										<h5><span>Prix:</span> 560€</h5>
										<a href="#">Voir plus</a>
									</div>
								</div>
							</div><div class="right">
								<div class="left2">
									<img src="images_miiting/images_prestataire/rose.png">
								</div>
								<div class="right2">
									<h3>Une fée dans la boîte</h3>
									<h4>Reception</h4>
									<p>Grâce à sa touche décorative, Une fée dans la boite fait de votre mariage....</p>
									<div class="bottom2">
										<h5><span>Prix:</span> 560€</h5>
										<a href="#">Voir plus</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="pubs">
							<img id= "pub2"src="images_miiting/images_prestataire/pub2.png">
						</div>
			</div>
			
			<script type="text/javascript" language="javascript" src="js/presta.js"></script> 
		</body>
		</html>

		<?php
			// include '../vues/v_footer.html';
				?>

</div>