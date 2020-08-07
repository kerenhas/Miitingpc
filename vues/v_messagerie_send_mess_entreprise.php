<div class="messagerie">
<!DOCTYPE html>
<html lang="fr">	
<head><meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="styles/css_elie/accueil-ae.css">
	<title>Accueil Acces entreprise</title>
</head>
	<div class="entete">
		<div class="entete-left">
			<a href="deconnexion">Deconnexion</a>
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
		<div class="devis">
			<img src="images_miiting/images_acces_entreprise/devis.png">
			<h3>Demande de devis</h3>
		</div>
  </div>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="utf-8">
<link href="fichier.css" rel="stylesheet" type="text/css"/>
       <link href="styles/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type="text/javascript" language="javascript" src="node_modules/jquery/dist/jquery.js"></script>
 
<link rel="stylesheet" type="text/css" href="styles/css_elie//popup.css">

	<link rel="stylesheet" type="text/css" href="styles/css_elie/messagerie3.css">
<body>
	<div class="container">
		<div class="header">
			<h1>Ma messagerie</h1>
			<center><h2><?php echo $prestataire[0]['libelle'] ;?></h2></center>
			</div>
	</div>
		<div class="content">
			<div class="left">
				<div class="left1"  onclick="getMessagesRecus() ;">
					<img src="images_miiting/images_boutique_marie/mail.png">
					<p>Reçus (<?php echo $nbrMessagesRecus[0]['count(*)'] ; ?> )</p>
				</div>
				<div onclick="getMessagesEnvoyes();" class="left2">
					<img src="images_miiting/images_boutique_marie/send.png">
					<p>Envoyés  (<?php echo $nbrMessagesEnvoyes[0]['count(*)'] ;?>)</p>
				</div>
			</div>
		<div class="rightup">
			<div class="right">
				<div class="right1">
					<h2><?php  echo $message[0]['nom'] . "-" . $message[0]['prenom']; ?></h2>
				</div>
				<h3><span>Objet:</span> <?php echo $message[0]['objet'] ; ?></h3>
				<p><?php echo $message[0]['text'] ; ?></p>
				<h4><?php echo $message[0]['date']."-".$message[0]['heure'] ; ?></h4>
				<hr id="séparateur">
			</div>
			<!-- <textarea type="text" placeholder="Répondez quelque chose" name="envoyermess" id="envoyermess"> -->
			<textarea  placeholder="Répondez quelque chose"   name="envoyermess" id="envoyermess" class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
			<!-- <a id="envoyer"href="#">Envoyer</a> -->
			<button  onclick="envoyer(<?php echo $message[0]['idconv'] ; ?>, <?php echo $message[0]['idmessage'] ; ?>);" id="envoyer" type="button" >Primary</button>
		</div>
	</div>	
</body>

		<script type="text/javascript" src='js/add_conversation.js'></script>
		<!-- <script type="text/javascript" src='js/contacter_prestataire.js'></script> -->
		<!-- affiche quand on clique les messages recus ou les messages envoyes -->
		<script type="text/javascript" language="javascript" src="js/ajax_load_mess_entreprise.js"></script> 	
</div>

<?php
include '../vues/footerelie.php';
?>
</body>
</html>