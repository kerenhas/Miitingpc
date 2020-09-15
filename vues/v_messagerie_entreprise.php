<div class="messagerie">
<!DOCTYPE html>
<html lang="fr">	
<head><meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/css_elie/accueil-ae.css">
	<title>Accueil Acces entreprise</title>
</head>
	<div class="entete">
		<div class="entete-left">
			<a id="deco" href="deconnexion">Deconnexion</a>
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
		</div>
		</a>
		<a style="margin-top: -2%;" href="messagerie_entreprise"><div class="devis">
			<img src="images_miiting/images_acces_entreprise/devis.png">
			<h3>Messagerie</h3>
		</div></a>
	</div>
  

	<!DOCTYPE html>
	<html lang="fr">

	<head>
		<meta charset="utf-8">
		<link href="fichier.css" rel="stylesheet" type="text/css" />
		<link href="styles/style.css" rel="stylesheet" type="text/css" />
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script type="text/javascript" language="javascript" src="node_modules/jquery/dist/jquery.js"></script>

		<link rel="stylesheet" type="text/css" href="styles/css_elie/popup.css">
		<link rel="stylesheet" type="text/css" href="styles/css_elie/messagerie.css">
		<title>Messagerie</title>
	</head>

	<body>
		<div class="container">
			<div class="header">
				<h1>Ma messagerie </h1>
				<center><h2><?php echo $prestataire[0]['libelle'] ;?></h2></center>
			</div>
		</div>
		<div class="content">
			<div class="left">
				<div class="left1" onclick="getMessagesRecus() ;">
					<img src="images_miiting/images_boutique_marie/mail.png">
					<p>Reçus (<?php echo $nbrMessagesRecus[0]['count(*)']; ?> )</p>
				</div>
				<div onclick="getMessagesEnvoyes();" class="left2">
					<img src="images_miiting/images_boutique_marie/send.png">
					<p>Envoyés (<?php echo $nbrMessagesEnvoyes[0]['count(*)']; ?>)</p>
				</div>
			</div>
			<div class="rightup">
				<div class="right">
					<?php
					for ($i = 0; $i < count($message); $i++) {
					?>
						<div class="right1">
							<h2><?php echo $message[$i]['nom'] . "-" . $message[$i]['prenom']; ?></h2>
							<img onclick="repondre(<?php echo $message[$i]['idconv']; ?>, <?php echo $message[$i]['idmessage']; ?>);" src="images_miiting/images_boutique_marie/answer.png">
						</div>
						<h3><span>Objet:</span> <?php echo $message[$i]['objet']; ?></h3>
						<p> <?php echo $message[$i]['text']; ?></p>
						<h4><?php echo $message[$i]['date'] . "-" . $message[$i]['heure']; ?></h4>
						<hr id="séparateur">
					<?php
					}
					?>
				</div>
			</div>
		</div>
	<script type="text/javascript" language="javascript" src="js/ajax_load_mess_entreprise.js"></script>
	</body>
	<?php
	include '../vues/footerelie.php';
	?>

</body>

        </div>
</html>