<?php
/**
 * page qui s'affiche lorsque l'utilisateur n'a pas d'evenement  et qu'il clique sur mon evenement
 */

include '../vues/v_entete.php';
?>
	<link rel="stylesheet" type="text/css" href="styles/css_elie/new-event_popup.css">

<!-- bouton creer un evenement -->
<center>  <button  id="myBtn" style="border-color: blue; margin-left: 32%; width: 40%; "  class="btn btn-light">Créer event  </button>
<!-- <button id="myBtn">Open Modal</button> -->
</center>

<img style="margin-left: 50%" src="images_miiting/images_boutique_marie/pub2.png">



<!-- The Modal -->
<div id="myModal" class="modal" style="overflow: scroll;">
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
				<!-- <div class="backgroundpop"> -->
					<!-- <img id="photo"> -->
        <!-- </div> -->
      <form action="newevent" method="post" enctype="multipart/form-data">
				<div class="content1pop">
					<input placeholder="Titre" type="text" id="nomevent" name="nomevent">
				</div>
				<h2>Informations</h2>
				<div class="content2pop">
        <input type="Date" name="date" id="date">
        <!-- <div class="container">
          <div class="col-md-6">
          <input type="text" placeholder="lieu" name="ville" id="ville">
          </div>
          <div class="col-md-6">
          <input placeholder="Nombre d'invités " type="text" id="nbinvites" name="nbinvites">
          </div>
        </div> -->

        <div class="container">
          <div class="row">
            <div class="col">
            <input type="text" placeholder="lieu" name="ville" id="ville">
            </div>
            <div class="col">
            <input placeholder="Nombre d'invités " type="text" id="nbinvites" name="nbinvites">
            </div>
           </div>
          </div>
				</div>
        <h6 for="fichier" style="margin: 1%;">Une photo de l'evenement : </h6>
         <input  style="margin-left: 19%; " name="coco"  type="file" class="form-control-file" id="coco">
				<h2>Prestataires</h2>
				<div class="content3pop">
					<div class="line1pop">
						<img src="images_miiting/images_acces_entreprise/banquet.png">
						<h3>Traiteur</h3>
						<input type="checkbox" id="traiteur" name="traiteur">
						<img src="images_miiting/images_acces_entreprise/dress.png">
						<h3>Robe</h3>
						<input type="checkbox" id="robe" name="robe">
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
						<input type="checkbox" name="decorateur" id="decorateur">
						<img src="images_miiting/images_acces_entreprise/gift.png">
						<h3>cadeaux</h3>
						<input type="checkbox" name="cadeaux" id="cadeaux">
						<img src="images_miiting/images_acces_entreprise/music.png">
						<h3>DJ</h3>
						<input type="checkbox" name="dj" id="dj">
						<img src="images_miiting/images_acces_entreprise/card.png">
						<h3>Faire-part</h3>
						<input type="checkbox" name="faire_part" id="faire_part">
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
        </div>     
      </div>
      <button type="submit" style="margin-top: 3%;" name="enregistrer" id="enregistrer" class="btn btn-light">Enregistrer</button>
      </form>
  </div>
</div>



<script type="text/javascript" src='js/add_conversation.js'></script>
<?php
  include '../vues/footerelie.php';
// include '../vues/v_footer.html';
?>

