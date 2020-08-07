
<?php
/**
 * page de messagerie dans laquel l'utilisateur va pouvoir voir tous ces messages recus et envoyes
 */
include '../vues/v_entete.php';

?>
<div class="messagerie">
	<!DOCTYPE html>
	<html lang="fr">
	<head><meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="styles/css_elie/messagerie.css">
		
		<title>Messagerie</title>
	</head>
	<body>

		<div class="container">
			<div class="header">
				<h1>Ma messagerie</h1>
				<h2>Mariage Jordan & Aurélie</h2>
				<a href="#">Nouveau message</a>
			</div>
		</div>
			<div class="content">
				<div id="left" class="left">
					<div class="left1" onclick="getMessagesRecus() ;">
						<img src="/miiting/images_miiting/images_boutique_marie/mail.png">
						<p>Reçus (<?php echo $nbrMessagesRecus[0]['count(*)'] ; ?> )</p>
					</div>
					<div onclick="getMessagesEnvoyes();" class="left2">
						<img src="/miiting/images_miiting/images_boutique_marie/send.png">
						<p>Envoyés (<?php echo $nbrMessagesEnvoyes[0]['count(*)'] ;?>)</p>
					</div>
				</div>
			<div class="rightup">
				<div class="right">
					<?php 
					for($i=0;$i<count($message);$i++)
					{
						?>

						<div class="right1">
						<h2><?php echo $message[$i]['libellepresta']."-".$message[$i]['libelleprestation'] ;?></h2>
						<img src="/miiting/images_miiting/images_boutique_marie/answer.png">
						</div>
						<h3><span>Objet:</span> <?php echo $message[$i]['objet'] ; ?></h3>
						<p> <?php echo $message[$i]['text'] ; ?></p>
						<h4><?php echo $message[$i]['date']."-".$message[$i]['heure'] ; ?> </h4>
						<hr id="séparateur">

						<?php
					}
					?>
				</div>	
			</div>
		</div>
			
	</body>
	<!-- affiche quand on clique les messages recus ou les messages envoyes -->
	<script type="text/javascript" language="javascript" src="js/ajax_load_mess.js"></script> 

	</body>
	</html>
	</div>