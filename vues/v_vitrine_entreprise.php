<?php
/*
*dans cette page il va y' avoir toutes les informations du prestataires afficher avec une possibilites de modifier
*/
// include '../vues/v_entrep_entete.php';

?>

<!DOCTYPE html>
<html lang="fr">	
<head><meta charset="utf-8">
	<title>Accueil Acces entreprise</title>
</head>
	<div class="entete">
		<div class="entete-left">
			<a  id="deco" href="deconnexion">Deconnexion</a>
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
<!-- <div class="entete">
        <div class="entete-left">
            <a href="#">Accès utilisateur</a>
        <div class="logo">
            <img src="assets/img/logo.png">
        </div>
        </div>
            <div class="entete-center">
                <div class="entete-right">
                    <a href="#">
                    <img src="assets/img/tel1.png">06 22 51 43 89
                    </a>
                </div>
                <div class="premium">
                    <a href="#">Passer en premium</a>
                </div>
            </div>
        </div>
        <hr id="div"> -->
<!-- on va afficher pareille que dans l'inscription ssauf que les champs seront remplit -->

 <!--Petite image avec un beau texte dedans -->
  <link rel="stylesheet" type="text/css" href="styles/css_elie/vitrine.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type="text/javascript" language="javascript" src="node_modules/jquery/dist/jquery.js"></script>
 <link rel="stylesheet" type="text/css" href="style/css_elie/v_inscription_entrepris.css">
 <div class="background" style="background-image: url('images_miiting/images_acces_entreprise/background5.png');">
    <h1>Votre description </h1>
    <h2>Tel qu'elle apparait sur le site
    </h2>
</div>
    <!-- on va faire des encadrers-->
<form action="vitrine" method="POST">
            <!--Code access -->
    <h3 style="margin-left: 27%;margin-top: 5%; margin-bottom: 1%;">Code d'accès: </h3>
    <div style=" background-color: #F5F5F5; height: 236px; margin-left: 27%; width: 700px; padding: 2%;" class="wrapper-tactac" >
            <!--Mail  ( mail de l'entreprise alors que l'autre est le mail de la personne a contacter ) -->
            <div class="wrapper-inscip">
                <div class="col-md-12 form-group">
                    <input name="mail" id="mail" type="text" value="<?php echo $prestaCaracteristique[0]['mail']; ?>" class="form-control">
                </div>
                <!--Mot de passe --> 
                <div class="col-md-12 form-group">
                    <input name="mdp" id="mdp" value="<?php echo $prestaCaracteristique[0]['mdp']; ?>" type="text"  class="form-control">
                </div>
            </div>
            <p></p>
            <p style="  background-color: #7FA8FE;
                      color: white;
               
                font-family: poppins;
                font-size: 14px; padding: 3%;opacity: 70%;" >Vous devez valider et mettre votre ancien mdp avant toutes choses.</p>
    </div>

    <!-- sujet de l'entreprise : -->
    <h3 style="margin-left: 27%;margin-top: 5%; margin-bottom: 1%;">Votre entreprise: </h3>
    <div style=" background-color: #F5F5F5; height: 836px; margin-left: 27%; width: 700px; padding: 2%;">
    <!-- petit texte tac tac -->
    <p style="  background-color: #7FA8FE;
                      color: white;
               
                font-family: poppins;
                font-size: 14px; padding: 3%;opacity: 70%;" >Donner les informations de votre entreprise nous permet de vus proposer les meilleurs clients... .</p>
                <!-- Libelle -->
                <div class="col-md-12 form-group">
                    <input name="libelle" id="libelle" type="text" placeholder="Entrer le nom de l'entreprise" value="<?php echo $prestaCaracteristique[0]['libelle']; ?>" class="form-control">
                </div>
                <!-- Ville -->
                <div class="col-md-12 form-group">
                    <input value="<?php echo $prestaCaracteristique[0]['ville']; ?>" placeholder="Entrer la ville" name="ville" id="ville" type="text"  class="form-control">
                </div>
                <!-- adresse -->
                <div class="col-md-12 form-group">
                    <input value="<?php echo $prestaCaracteristique[0]['adr']; ?>" placeholder="Entrer l'adresse" name="adr" id="adr" type="text" class="form-control">
                </div>
                 <!-- TARIFS -->
                 <div class="col-md-12 form-group">
                    <input required name="tarifs" id="tarifs" value="<?php echo $prestaCaracteristique[0]['tarifs']; ?>" type="text" placeholder="Entrer Tarifs " class="form-control">
                </div> 
                <!-- SIRET -->
                <div class="col-md-12 form-group">
                    <input value="<?php echo $prestaCaracteristique[0]['siret']; ?>" name="siret" placeholder="Entrer SIRET" id="siret" type="text" class="form-control">
                </div>  
                <!-- mage -->         
                <label for="fichier" style="margin: 1%;">Votre entreprise en image: </label>
                <input name="coco" style="margin: 2%;" type="file" class="form-control-file" id="coco">
                <!--Description -->
                    <p>Description:</p>
                    <textarea style="width: 59%;" name="description" id="description" rows="4"><?php echo strip_tags($prestaCaracteristique[0]['description']); ?></textarea>

    <BR><BR>


            <P>Votre domaine: </p>
                <!--intitule de la prestation -->
                <?php
                for($i=0;$i<4;$i++)
                {
                ?>
                <div class="form-check form-check-inline">

                    <input name="presta" class="form-check-input" type="radio" id="inlineCheckbox1" value="<?php 
                    if($prestationIntitule[$i]['id'] = $prestaCaracteristique[0]['idprestation'])
                    {
                      echo  $prestationIntitule[$i]['id'] ;?>" checked
                    <?php
                    }else
                    {
                        echo  $prestationIntitule[$i]['id'] ; ?> <?php
                    }
                    ?>
                    ><label class="form-check-label" for="inlineCheckbox1"><?php echo $prestationIntitule[$i]['libelle'] ; ?></label>

                </div>
                <?php
                }

                for($i=5;$i<9;$i++)
                {
                ?>
                <div class="form-check form-check-inline">

                    <input name="presta" class="form-check-input" type="radio" id="inlineCheckbox1"  value="<?php 
                    if($prestationIntitule[$i]['id'] = $prestaCaracteristique[0]['idprestation'])
                    {
                      echo  $prestationIntitule[$i]['id'] ;?>" checked
                    <?php
                    }else
                    {
                        echo  $prestationIntitule[$i]['id'] ; ?> <?php
                    }
                    ?>
                    >
                    <label class="form-check-label" for="inlineCheckbox1"><?php echo $prestationIntitule[$i]['libelle'] ; ?></label>

                </div>
                <?php
                }

                for($i=10;$i<14;$i++)
                {
                ?>
                <div class="form-check form-check-inline">

                    <input name="presta" class="form-check-input" type="radio" id="inlineCheckbox1" value="<?php 
                    if($prestationIntitule[$i]['id'] = $prestaCaracteristique[0]['idprestation'])
                    {
                      echo  $prestationIntitule[$i]['id'] ;?>" checked
                    <?php
                    }else
                    {
                        echo  $prestationIntitule[$i]['id'] ; ?> <?php
                    }
                    ?>
                    >
                    <label class="form-check-label" for="inlineCheckbox1"><?php echo $prestationIntitule[$i]['libelle'] ; ?></label>

                </div>
                <?php
                }
                ?>
        </div>
                <!-- Coordonnées personnelles: -->
        <h3 style="margin-left: 27%;margin-top: 5%; margin-bottom: 1%;">Coordonnées personnelles: </h3>
        <div style=" background-color: #F5F5F5; height: 436px; margin-left: 27%; width: 700px; padding: 2%;">
        <!-- petit texte tac tac -->
    <p style="  background-color: #7FA8FE;
                      color: white;
               
                font-family: poppins;
                font-size: 14px; padding: 3%;opacity: 70%;" >Donner les informations sur vous nous permet de vus proposer les meilleurs clients... .</p>
        <!--Nom/prenom -->
        <div class="col-md-12 form-group">
            <input value="<?php echo $prestaCaracteristique[0]['cont_nom']; ?>" name="cont_nom" id="cont_nom" type="text" placeholder="Personne à contacter"  class="form-control">
        </div>
            <!--Mail -->
        <div class="col-md-12 form-group">
            <input value="<?php echo $prestaCaracteristique[0]['cont_email']; ?>" name="cont_email" id="cont_email" type="text" placeholder="Mail"  class="form-control">
        </div>
        <!--telephone-->
        <div class="col-md-12 form-group">
            <input value="<?php echo $prestaCaracteristique[0]['tel']; ?>" name="cont_tel" id="cont_tel" type="text" placeholder="Entrer votre telephone " class="form-control">
        </div>
        <!--Contact (site de l'entreprise) -->
        <div class="col-md-12 form-group">
            <input value="<?php echo $prestaCaracteristique[0]['site']; ?>" name="contact" id="contact" type="text" placeholder="Entrer votre reference " placeholder="Entrer votre reference " class="form-control">
        </div>
    </div>

    <h3 style="margin-left: 27%;margin-top: 5%; margin-bottom: 1%;">Questions Fréquentes: </h3>
    <div style=" background-color: #F5F5F5; height: 436px; margin-left: 27%; width: 700px; padding: 2%;">
            <!-- petit texte tac tac -->
        <p style=" background-color: #7FA8FE;
                      color: white;
               
                font-family: poppins;
                font-size: 14px; padding: 3%;opacity: 70%;" >Certaines questons qui reviennent tous le temps et seront afficher sur 
        votre page, ce qui permet un gain de temps... .</p>
            <!--1er question -->
            <div class="col-md-12 form-group">
                <input value="<?php if(!empty($res0[0]['reponse'])){ echo $res0[0]['reponse'];  } ?>" type="text" placeholder="<?php  echo $questions[0]['question']; ?>" class="form-control">
        </div>
        <div class="col-md-12 form-group">
        <input required value="<?php if(!empty($res1[0]['reponse'])){ echo $res1[0]['reponse'];  } ?>" type="text" placeholder="<?php  echo $questions[1]['question']; ?>" class="form-control">
        </div>
        <div class="col-md-12 form-group">
        <input value="<?php if(!empty($res2[0]['reponse'])){ echo $res2[0]['reponse'];  } ?>" type="text" placeholder="<?php  echo $questions[2]['question']; ?>" class="form-control">
        </div>
        <div class="col-md-12 form-group">
        <input value="<?php if(!empty($res3[0]['reponse'])){ echo $res3[0]['reponse'];  } ?>" type="text" placeholder="<?php  echo $questions[3]['question']; ?>" class="form-control">
        </div>
    </div>
    <br>
    <button type="submit" style="margin-left: 27%; background-color:#7FA8FE; color: white;" name="modifier" id="modifier" class="btn btn-light">MODIFIER</button>
</form>



<!--Enfin on va mettre notre footer habituelle-->
</body>
  <?php
  include '../vues/v_footer.html';
  ?>
</html>