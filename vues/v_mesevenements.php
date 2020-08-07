
<div class="event">
	<?php
	include '../vues/v_entete.php';
	?>
	<!DOCTYPE html>
	<html lang="fr">
	<head><meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="styles/css_elie/mesevenements.css">
		<link href="fichier.css" rel="stylesheet" type="text/css"/>
       <link href="styles/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type="text/javascript" language="javascript" src="node_modules/jquery/dist/jquery.js"></script>
 
 <link rel="stylesheet" type="text/css" href="styles/css_elie/new-event_popup.css">
		<script src="https://kit.fontawesome.com/a076d05399.js"></script>
		<title>Mes evenements</title>
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
				<li><a onclick="addconv('2');" class="btn btn-outline-danger" role="button" aria-pressed="true"  id="myBtn">Creer Event</a> </li>
			</ul>
			<hr>
		</div>
	<br>
		<div class="container">
			<?php
			for($i=0;$i<count($events);$i++)
			{

			?>
			<div class="content">
				<div class="content2">
					<div class="left">
					<img src="<?php if(empty($events[$i]['image'])){ 
			//image de remplacement quand il n'a pas selectionne d'image
				echo 'images_miiting/images_boutique_marie/img4.png';
			}else {
			echo $events[$i]['image'];
			}
		?>" >
					</div>
					<div class="center">
						<h2><?php echo $events[$i]['libelle'] ; ?></h2>
						<h3><span>Date:</span><?php echo $events[$i]['date'] ; ?></h3>
						<h3><span>Lieu:</span><?php echo $events[$i]['ville'] ; ?></h3>
						<!-- <h3 id="time"><span>Nombre d'invités: </span> </h3> -->
					</div>
				</div>
				<div class="right">
					<h3>Participants</h3>
					<h4><?php echo $events[$i]['bninvite'] ; ?></h4>
					<a onclick="changeEvent('<?php echo $events[$i]['id'] ;?>');" href="#">Gérer</a>
				</div>
			</div>

			<?php
			}
			?>




<!-- The Modal -->
<div id="myModal" class="modal">

<!-- Modal content -->
<div class="modal-content">
  <span class="close">&times;</span>

	<title>Editer son évênement</title>
</head>
<body>
	<div class="containerpop">
		<img id="cross" src="images_miiting/images_acces_entreprise/cross.png">
		<h1>Editer l'évênement</h1>
		<hr>
	<!-- <div class="backgroundpop">
		<img id="photo" >
	</div> -->
		<div class="content1pop">
			Titre de l'évênement:<input type="text" id="nomevent" name="nomevent">
		</div>
		<h2>Informations</h2>
		<form action="newevent" method="post" enctype="multipart/form-data">
		<h6 style=" margin-top: 3%;">Vous organisez..</h6>
         <form action="newevent" method="post" enctype="multipart/form-data">
           
             <input style="margin-left: 19%;" type="radio" name="event" checked value="corpo"><label class="radio-inline">Soirée Corporate
           </label>
           
             <input type="radio" name="event" value="anniv"><label class="radio-inline">Anniversaire
           </label>
         
             <input type="radio" name="event" value="mariage">  <label class="radio-inline">Mariage
		   </label>
		   <h6 for="fichier" style="margin: 1%;">Une photo de l'evenement : </h6>
            <input  style="margin-left: 19%; margin-top: 5%; margin-bottom: 5%" name="coco"  type="file" class="form-control-file" id="coco">
		<div class="content2pop">
			Date: <input type="Date" name="date" id="date">
			Lieu: <input type="text" name="ville" id="ville">
			Nombre d'invites :  <input class="form-control" type="number" value="250" id="nbinvites" name="nbinvites">
		</div>
		<h2>Prestataires</h2>
		<div class="content3pop">
			<div class="line1pop">
				<img src="images_miiting/images_acces_entreprise/banquet.png">
				<h3>Traiteur</h3>
				<input type="checkbox" id ="traiteur" name="traiteur">
				<img src="images_miiting/images_acces_entreprise/dress.png">
				<h3>Robe</h3>
				<input type="checkbox" id ="robe" name="robe">
				<img src="images_miiting/images_acces_entreprise/car.png">
				<h3>Location voiture</h3>
				<input type="checkbox" name="voit" id="voit">
				<img src="images_miiting/images_acces_entreprise/photo2.pn">
				<h3>Photographe</h3>
				<input type="checkbox" name="photographe" id="photographe">
			</div>

			<div class="line2pop">
				<img src="images_miiting/images_acces_entreprise/decoration.png">
				<h3>Décoration</h3>
				<input type="checkbox" name="decorateur"  id="decorateur">
				<img src="images_miiting/images_acces_entreprise/gift.png">
				<h3>cadeaux</h3>
				<input type="checkbox" name="cadeaux" id="cadeaux">
				<img src="images_miiting/images_acces_entreprise/music.png">
				<h3>DJ</h3>
				<input type="checkbox"  name="dj" id="dj">
				<img src="images_miiting/images_acces_entreprise/card.png">
				<h3>Faire-part</h3>
				<input type="checkbox" name="faire_part"  id="faire_part">
			</div>
			<div class="line3pop">
				<img src="images_miiting/images_acces_entreprise/animation.png">
				<h3>Animation</h3>
				<input type="checkbox" name="animation" id="animation">
				<img src="images_miiting/images_acces_entreprise/reception.png">
				<h3>Reception</h3>
				<input type="checkbox" name="reception" id="reception">
				<img src="images_miiting/images_acces_entreprise/planner.png">
				<h3>Wedding Planner</h3>
				<input type="checkbox" name="wedding_planner" id="wedding_planner">
			</div>
				<!-- <a href="#">Enregistrer</a> -->
				<button type="submit" style="margin-top: 3%;" name="enregistrer" id="enregistrer" class="btn btn-light">Enregistrer</button>
		</div>
	</div>
		</div>
		</div>
		</form>
		<script type="text/javascript" src='js/add_conversation.js'></script>
	<script type="text/javascript" src='js/ajax_change_event.js'></script>
	<br><br>

	</body>


	<?php
	include '../vues/v_footer.html';
	?>

</div>
</html>