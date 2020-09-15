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
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<link rel="stylesheet" type="text/css" href="styles/css_elie/prest.css">
	<title>Prestataire</title>
</head>

<body>
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
		<h2>Nos différentes catégories de prestataire</h2>
		<hr>
		<div class="content">
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/banquet.png">
				<a href="prestation-1">
					<h3>Traiteur</h3>
				</a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/animation.png">
				<a href="prestation-8">
					<h3>Animation</h3>
				</a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/decoration.png">
				<a href="prestation-7">
					<h3>Décoration</h3>
				</a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
		</div>

		<div class="content2">
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/car.png">
				<a href="prestation-10">
					<h3>Location voiture</h3>
				</a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/dress.png">
				<a href="prestation-9">
					<h3>Robe</h3>
				</a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/reception.png">
				<a href="prestation-2">
					<h3>Reception</h3>
				</a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
		</div>

		<div class="content3">
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/reception.png">
				<a href="#"><h3>Coiffeur</h3></a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/photo2.png">
				<a href="#"><h3>Photographe</h3></a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/makeup.png">
				<a href="#"><h3>Maquillage</h3></a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
		</div>

		<div class="content4">
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/planner.png">
				<a href="#"><h3>Wedding planner</h3></a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/costume2.png">
				<a href="#"><h3>Costume</h3></a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/bijoux.png">
				<a href="#"><h3>Bijoux</h3></a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
		</div>
		
		<div class="content5">
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/camera.png">
				<a href="#"><h3>Cameraman</h3></a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
			<div class="box">
				<img src="images_miiting/images_acces_entreprise/orchestre.png">
				<a href="#"><h3>Orchestre</h3></a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
			<div class="box">
				<img  id="micro"src="images_miiting/images_acces_entreprise/micro.png">
				<a href="#"><h3>Chanteur</h3></a>
				<p>Le traiteur est un élément primordial pour le mariage</p>
			</div>
		</div>
	</div>

	<div class="pubs">
		<img id="pub2" src="images_miiting/images_boutique_marie/pub2.png">
	</div>

	<?php
	include '../vues/footerelie.php';
	?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script type="text/javascript" language="javascript" src="js/ajax_search_nav.js"></script>
	
</body>

</html>