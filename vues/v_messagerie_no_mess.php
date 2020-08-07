<?php
include '../vues/v_entete_elie.php';
?>
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
	<!-- <link rel="stylesheet" type="text/css" href="styles/css_elie/messagerie.css"> -->

	<link rel="stylesheet" type="text/css" href="styles/css_elie/messagerie2.css">
	<title>Messagerie</title>
</head>
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
			<li>Plan de table</li>
			<a href="prestaevent">
				<li>Prestataires</li>
			</a>
			<li>Tâches</li>
		</ul>
		<hr>
	</div>
	<div class="container">
		<div class="header">
			<h1>Ma messagerie</h1>
			<h2><?php echo $event[0]['libelle'] ;?></h2>
			<a onclick="addconv('2');" class="btn btn-outline-danger" role="button" aria-pressed="true"  id="myBtn">Contacter</a> 
		</div>
	</div>
		<div class="content">
			<div class="left">
			<div class="left1" onclick="getMessagesRecus() ;" >
					<img src="images_miiting/images_boutique_marie/mail.png">
					<p>Reçus (<?php echo $nbrMessagesRecus[0]['count(*)'] ; ?> )</p>
				</div>
				<div onclick="getMessagesEnvoyes();" class="left2">
					<img src="images_miiting/images_boutique_marie/send.png">
					<p>Envoyés (<?php echo $nbrMessagesEnvoyes[0]['count(*)'] ;?>)</p>
				</div>
			</div>
		<div class="rightup">
			<div class="right">
				<h2>Vous n'avez reçus aucun message</h2>
				<img src="images_miiting/images_messagerie/message.png">
			</div>
		</div>
	</div>

	
<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>
  <!-- <link rel="stylesheet" type="text/css" href="styles/css_elie//popup.css"> -->
	<div class="containerpopup">
		<div class="contentpop">
		<h1>Nouvau message</h1>
		<hr>
		<form action="mamessagerie" method="post" enctype="multipart/form-data">
		<h3>Objet: <input type="text" placeholder="Titre" name="objet" id="objet"></h3>
		<h3 id="presta">Prestataires: <h3>  
	   <select  name="idpresta" id="idpresta">
		<?php 
			for($i=0;$i<count($prestataires);$i++)
			{
		?>
				<option value="<?php echo $prestataires[$i]['id'] ; ?>" ><?php echo $prestataires[$i]['libelle'] ; ?></option>	
			<?php 
		}
		?>
		</select>
		<!-- <div class="form-group">
			<label for="exampleFormControlFile1">Pièce jointe :</label>
			<input name="fichier" id="fichier" type="file" class="form-control-file" >
		</div> -->
		<h3>Message :<input placeholder="Ecrivez votre message" id="message" type="text" name="message"></h3>
		</div>
		<button type="submit" href="#" name="nouvelleconnexion">Envoyer</button>
		</form>
	</div>


</div>

</div>


	<script type="text/javascript" src='js/add_conversation.js'></script>
		<!-- affiche quand on clique les messages recus ou les messages envoyes -->
		<script type="text/javascript" language="javascript" src="js/ajax_load_mess.js"></script> 	
</body>

<?php
include '../vues/footerelie.php';
?>
</body>
</html>