<?php
/**
 * page quand l'utilisateur clique sur un evenement 
 * il va se trouver a faire la gestion de l'evenement le plus recent
 * page d'entree quand on clique sur mon evenement
 */

include '../vues/v_entete_elie.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head><meta charset="utf-8">
	<!-- <link rel="stylesheet" type="text/css" href="styles/css_elie/reset.css"> -->
	<link rel="stylesheet" type="text/css" href="styles/css_elie/evenement.css">
	<link href="styles/css_elie/stylesevent.php" rel="stylesheet" type="text/css" media="all" />

	<title>Evenement</title>
</head>
<body>
	<div class="background" style="background-image: url('images_miiting/images_boutique_marie/backgroundd.png'); height: 300px; background-size: cover; background-repeat: no-repeat;">
	</div>
	<div class="test2">
	<h1><?php echo $img[0]['libelle'] ; ?></h1>
		<a href="#">Modifier</a>
	</div>
	<hr>
	<div class="sous-menu">
		<ul>
			<li  class="nav-item " ><a href="event" class="nav-link hovcolor ">Mon évênement</a></li>
			<li  class="nav-item " ><a href="event" class="nav-link hovcolor ">Mes évênements</a></li>
			<li  class="nav-item " ><a href="event" class="nav-link hovcolor ">Messagerie</a></li>
			<li  class="nav-item " ><a href="event" class="nav-link hovcolor ">Plan de table</a></li>
			<li  class="nav-item " ><a href="event" class="nav-link hovcolor ">Prestataires</a></li>
			<li  class="nav-item " ><a href="event" class="nav-link hovcolor ">Tâches</a></li>
		</ul>
		<hr>
	</div>

	<div class="container">
		<div class="bloc1">
			<h2>Informations:</h2>
			<h3><span>Date:</span><?php echo " ".utf8_encode(strftime("%A %d %B %G", strtotime($img[0]['date']))); ?></h3>
			<h3><span>Lieu:</span><?php echo " ".ucwords($img[0]['ville']) ; ?></h3>
		</div>

		<div class="bloc2">
			<h2>Participants:</h2>
			<h3><?php echo $img[0]['nbinvite'] ; ?></h3>
		</div>

		<div class="bloc3">
				<h2>A lieu dans:</h2>
			<div class="timer">
				<div class="years">
						<p>Annees</p>
					<h5><?php echo $difference->y ;?></h5>
				</div>
				<div class="months">
						<p>mois</p>
					<h5><?php echo $difference->m ;?></h5>
				</div>
				<div class="days">
					<p>jours</p>
					<h5><?php echo $difference->d ;?></h5>

				</div>
			</div>
		</div>
	</div>
<!-- <hr class="transition">
	<div class="container2">
		<h2><a href="prestaevent" >Mes prestataires</a></h2>

		<div class="line1">-->
		<?php 
		// si le tableau prestataire est sup ou egale a 3 
		// if(count($prestaReserve) >=3)
		// {
			?>
			<!-- <div class="line1"> -->
			<?php
			// si le tableau prestataire est sup ou egale a 3 
	
				// prestataire déjà reserves 
				// for($i=0;$i<3;$i++)
				// {
				// 		// si il n'a pas d'images on met l'image standart du prestataire 
				// 		if(empty($prestaReserve[$i]['logo']))
				// 		{
				// 			?>
						<!-- <img src="<?php// echo $prestaReserve[$i]['libelle'] ; ?> "> -->
					<?php
				// 		}else
				// 		{
	
				// 			?>
							<!-- <img src="<?php //echo $prestaReserve[$i]['logo'] ; ?>"> -->
						<?php
				// 		}
				// 		?>
					
					
				<?php 
				// }
				
				?>
					<!-- <img src="images_miiting/images_boutique_marie/traiteur.png">
					<img src="images_miiting/images_boutique_marie/photographe.png">
					<img src="images_miiting/images_boutique_marie/salle.png">
					<img src="images_miiting/images_boutique_marie/salle.png"> -->
					<!-- <img src="images_miiting/images_boutique_marie/weddingplanner.png"> -->
					<!-- <div class="text7">Wedding planner</div> -->
			</div>	
			<?php
		// }
		?>

			<!-- <img src="images_miiting/images_boutique_marie/traiteur.png">
			<img src="images_miiting/images_boutique_marie/photographe.png">
			<img src="images_miiting/images_boutique_marie/salle.png"> -->
		<!-- </div>
		<div class="line2">
			<img src="images_miiting/images_boutique_marie/dj.png">
			<img src="images_miiting/images_boutique_marie/vetement.png">
			<a href="prestaevent"><img src="images_miiting/images_boutique_marie/voirplus.png"></a>
		</div>
	</div> -->

	<hr class="transition">
	<div class="container2">
		<h2>Mes prestataires</h2>
		<div class="line1">
			<img id="traiteur" src="images_miiting/images_boutique_marie/traiteur.png">
		<div class="text">Traiteur
		</div>	
			<img src="images_miiting/images_boutique_marie/photographe.png">
		<div class="text2">Photographe
		</div>
			<img src="images_miiting/images_boutique_marie/salle.png">
			<div class="text3">Salle
			</div>
			<img src="images_miiting/images_boutique_marie/weddingplanner.png">
			<div class="text7">Wedding planner
			</div>
		</div>
		<div class="line2">
			<img src="images_miiting/images_boutique_marie/dj.png">
			<div class="text4">DJ		
			</div>
			<img src="images_miiting/images_boutique_marie/vetement.png">
			<div class="text5">Vetements		
			</div>
			<img src="images_miiting/images_boutique_marie/voirplus.png">
			<div class="text6">Voir plus		
			</div>
		</div>
	</div>


	<div class="container3">
		<a href="taches"><h2>To do list</h2></a>
		<div class="content">
			<div class="left">
				<input type="text" placeholder="Créer une nouvelle tâche"  name="">
				<a href="ajouterTache-1"><img id="plus"src="images_miiting/images_boutique_marie/plus.png"></a>

				<!-- pour toutes les taches, on va en afficher 7 ou 8, si elles sont a plus de 60pourent ou va mettre done  -->
			<?php
			for($i=0;$i<6;$i++)
			{
			?>
			<div class="task">
					<div class="left2">	
						<?php
						if($tblTaches[$i]['fait']==0)
						{
							?>	<a href="edittaches-<?php echo $tblTaches[$i]['id'] ;?>">
							<img src="images_miiting/images_boutique_marie/notdone.png"><?php
						}
						else
						{
							?><a href="edittaches-<?php echo $tblTaches[$i]['id'] ;?>">
							<img src="images_miiting/images_boutique_marie/done.png"><?php
						}
						?>
					</div>

						<div class="right2">
						<h3><?php echo $tblTaches[$i]['libelle'] ;?>
						</h3>
						<p><span>Avancement:</span> <?php echo $tblTaches[$i]['avancement'] ;?></p>
						<p><span>Echeance:</span> <?php echo utf8_encode(strftime("%A %d %B %G", strtotime($tblTaches[$i]['echeance']))) ;?></p>
					</div>
					</a>
				</div>
			<?php
			}
			?>
			
			</div>
			<div class="right">
				<h3>Mon avancée</h3>
				<img id="illu"src="images_miiting/images_boutique_marie/illustration.png">
				<h4> <?php echo $nbTacheFaite[0]['count(*)']; ?> <span>/<?php echo  $nbTache[0]['count(*)'] ;?></span></h4>

				<div class="pubs">
					<img src="images_miiting/images_boutique_marie/pub2.png">
					<img src="images_miiting/images_boutique_marie/pub3.jpg">
				</div>
			</div>
		</div>
	</div>

</body>
</html>

<?php
  include '../vues/v_footer.html';
  ?>