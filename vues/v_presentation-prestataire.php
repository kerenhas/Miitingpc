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

<!DOCTYPE html>
<html lang="fr">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/css_elie/presentation-prestataire.css">
	<link href="fichier.css" rel="stylesheet" type="text/css" />
	<link href="styles/style.css" rel="stylesheet" type="text/css" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" language="javascript" src="node_modules/jquery/dist/jquery.js"></script>

	<link rel="stylesheet" type="text/css" href="styles/css_elie/popup.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<title>Presentation Prestataire</title>
</head>

<div class="container">
	<div class="header">
		<div class="top">
			<div class="left">
				
				<h1><?php echo $prestataire[0]["libelle"]; ?> <span><?php echo $prestataire[0]["libelleprestataion"]; ?></span></h1>
				<h3><?php echo $prestataire[0]["adr"]." Site: ".$prestataire[0]["site"]; ?></h3>
				<h3><?php echo $prestataire[0]["mail"] ;?></h3>
			</div>
			
			
		</div>
		<div class="bottom">
			<!-- <div class="boutton">
						<a href="#">Nous contacter</a>
					</div> -->
			<div class="price">
				<div>
					<h3>Tarifs à partir de:</h3>
					<ul>
						<img src="images_miiting/images_prestataire/coin.png"> <?php echo $prestataire[0]["tarifs"]; ?>
					</ul>
					<div class="right">
				<?php
				if (empty($_SESSION['nom'])) {
				?>
					<a onclick="alertMessage();" class="btn btn-outline-danger" role="button" aria-pressed="true" >Contacter</a>
				<?php
				} else {
				?><a onclick="addconv('2');" class="btn btn-outline-danger" role="button" aria-pressed="true" id="myBtn">Contacter</a>
				<?php
				}
				?>
				<!-- <a href="prestation-<?php ?>">Contacter</a> -->
			</div>
					<!-- <ul>
						<img src="images_miiting/images_prestataire/coin.png"> <?php echo $prestataire[0]["tarifs"]; ?>
					</ul> -->
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container2">
	<div class="content">
		<div class="left">
			<img id="main" src="<?php echo $prestataire[0]["logo"]; ?>">
			<!-- <img id="main1"src="images_miiting/images_prestataire/img3.png">
					<img src="images_miiting/images_prestataire/img1.png">
					<img src="images_miiting/images_prestataire/img2.png"> -->
		</div>
		<div class="right">
			<h2>Description</h2>
			<p><?php echo $prestataire[0]["description"]; ?></p>
			<!-- <a>Demander un devis</a> -->
		</div>
	</div>
</div>

<div class="container3">
	<div class="content">
		<div class="firstcolone1">
			<h2>Informations supplémentaires</h2>
			<p><span>Prix:</span> <?php echo $prestataire[0]["tarifs"]; ?></p>
			<p><span>Lieu:</span><?php echo $prestataire[0]["adr"]; ?></p>
		</div>
		<div class="secondcolone1">
			<h2>Contacter</h2>
			<p><span>Téléphone:</span><?php echo $prestataire[0]["tel"]; ?></p>
			<p><span>Mail:</span> <?php echo $prestataire[0]["mail"]; ?></p>
			<p><span>Site:</span> <?php echo $prestataire[0]["site"]; ?></p>
		</div>
		<div class="thirdcolone1">
			<h2>Questions fréquentes</h2>
			<?php
			for ($i = 0; $i < count($questionsReponses); $i++) {
			?>
				<p><?php echo $questionsReponses[$i]["question"]; ?></p>
			<?php
			}
			?>
		</div>
		<div class="fourcolone1">
			<h2>Réponses aux questions posées</h2>
			<?php
			for ($i = 0; $i < count($questionsReponses); $i++) {
			?>
				<p><?php echo $questionsReponses[$i]["reponse"]; ?></p>
			<?php
			}
			?>
		</div>
	</div>
</div>

<div class="container4">
	<h2>Ils vous plairons surement</h2>
	<div class="leftbig">
		<?php
		for ($i = 0; $i < count($prestatairesSuivant); $i++) {
		?>
			<div class="leftmain">
				<div class="left1">
					<img src="images_miiting/images_boutique_marie/first.png">
				</div>
				<div class="right1">
					<h3><?php echo $prestatairesSuivant[$i]["libelle"]; ?></h3>
					<h4><?php echo $prestatairesSuivant[$i]["prestation_libelle"]; ?></h4>
					<p> <?php echo fonctionsUtils::tronque($prestatairesSuivant[$i]["description"], 305); ?></p>
					<div class="bottom1">
						<h5><span>Tarifs:</span> <?php echo $prestatairesSuivant[$i]["tarif"]; ?></h5>
						<a href="presentation-prestataire-<?php echo $prestatairesSuivant[$i]['id']; ?>">Plus d'information</a>
					</div>
				</div>
			</div>
		<?php
		}
		?>
	</div>
</div>
<div class="pubs">
	<img id="pub2" src="images_miiting/images_boutique_marie/pub2.png">
	<img id="pub1" src="images_miiting/images_boutique_marie/pub1.png">
</div>


<!-- The Modal -->
<div id="myModal" class="modal">

	<!-- Modal content -->
	<div class="modal-content">
		<span class="close">&times;</span>
		<!-- <link rel="stylesheet" type="text/css" href="styles/css_elie//popup.css"> -->
		<div class="containerpopup">
			<div class="contentpop">
				<h1 style="margin-left: 32%;">Nouveau message</h1>
				<hr>
				<form action="mamessagerie" method="post" enctype="multipart/form-data">
					<input type="text" placeholder="Objet" name="objet" id="objet">
					<p id="presta">Choisissez votre prestataire : <p>
							<select name="idpresta" id="idpresta">
								<?php
								for ($i = 0; $i < count($prestataires); $i++) {
								?>
									<option value="<?php echo $prestataires[$i]['id']; ?>"><?php echo $prestataires[$i]['libelle']; ?></option>
								<?php
								}
								?>
							</select>
							
							<textarea placeholder="Votre message..." class="form-control" id="message" rows="5" name="message"></textarea>
							
							<!-- <input placeholder="Ecrivez votre message" id="message" type="text" name="message"></h3> -->
			</div>
			<button type="submit"  class="btn btnenvoyer btn-primary btn-lg" name="nouvelleconnexion">Envoyer</button>
			</form>
		</div>


	</div>

</div>
<script type="text/javascript" src='js/add_conversation.js'></script>
<script type="text/javascript" src='js/contacter_prestataire.js'></script>
</body>
<?php
include '../vues/footerelie.php';
?>

</html>