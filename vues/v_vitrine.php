<?php
/*
*dans cette page il va y' avoir toutes les informations du prestataires afficher avec une possibilites de modifier
*/
include '../vues/v_entrep_entete.php';

?>

<!-- on va afficher pareille que dans l'inscription ssauf que les champs seront remplit -->

 <!--Petite image avec un beau texte dedans -->
 <div> 
    <img src="images/img-bur.jpg" alt="bureau_img" style="height: 55%; margin-left: 27%;">

    <p style="position: absolute; bottom: 48%; left: 38%; font-size: 25px; ">Votre description </p>
    <p  style="position: absolute; bottom: 40%; left: 28%; font-size: 25px;">Tel qu'elle apparait sur le site
    </p>
</div>
    <!-- on va faire des encadrers-->
<form action="vitrine" method="POST">
            <!--Code access -->
    <h3 style="margin-left: 27%;margin-top: 5%; margin-bottom: 1%;">Code d'accès: </h3>
    <div style=" background-color: #F5F5F5; height: 236px; margin-left: 27%; width: 700px; padding: 2%;" class="wrapper-tactac" >
            <!--Mail  ( mail de l'entreprise alors que l'autre est le mail de la personne a contacter ) -->
            <div class="wrapper-inscip">
                <div class="col-md-12 form-group">
                    <input name="mail" id="mail" type="text" placeholder="Entrer le mail de l'entreprise" class="form-control">
                </div>
                <!--Mot de passe --> 
                <div class="col-md-12 form-group">
                    <input name="mdp" id="mdp" type="text" placeholder="Entrer le mot de passe" class="form-control">
                </div>
            </div>
            <p></p>
            <p style=" background-color: #F0FFFF; padding: 3%;" >Vous devez valider et mettre votre ancian mdp avant toutes choses.</p>
    </div>

    <!-- sujet de l'entreprise : -->
    <h3 style="margin-left: 27%;margin-top: 5%; margin-bottom: 1%;">Votre entreprise: </h3>
    <div style=" background-color: #F5F5F5; height: 836px; margin-left: 27%; width: 700px; padding: 2%;">
    <!-- petit texte tac tac -->
    <p style=" background-color: #F0FFFF; padding: 3%;" >Donner les informations de votre entreprise nous permet de vus proposer les meilleurs clients... .</p>
                <!-- Libelle -->
                <div class="col-md-12 form-group">
                    <input name="libelle" id="libelle" type="text" placeholder="Entrer le nom de l'entreprise" value="<?php echo $prestaCaracteristique[0]['libelle']; ?>" class="form-control">
                </div>
                <!-- Ville -->
                <div class="col-md-12 form-group">
                    <input value="<?php echo $prestaCaracteristique[0]['ville']; ?>" name="ville" id="ville" type="text" placeholder="Entrer la ville" class="form-control">
                </div>
                <!-- adresse -->
                <div class="col-md-12 form-group">
                    <input value="<?php echo $prestaCaracteristique[0]['adr']; ?>" name="adr" id="adr" type="text" placeholder="Entrer l'adresse'" class="form-control">
                </div>
                <!-- SIRET -->
                <div class="col-md-12 form-group">
                    <input value="<?php echo $prestaCaracteristique[0]['siret']; ?>" name="siret" id="siret" type="text" placeholder="Entrer SIRET" class="form-control">
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
    <p style=" background-color: #F0FFFF; padding: 3%;" >Donner les informations sur vous nous permet de vus proposer les meilleurs clients... .</p>
        <!--Nom/prenom -->
        <div class="col-md-12 form-group">
            <input value="<?php echo $prestaCaracteristique[0]['cont_nom']; ?>" name="cont_nom" id="cont_nom" type="text" placeholder="Personne à contacter" class="form-control">
        </div>
            <!--Mail -->
        <div class="col-md-12 form-group">
            <input value="<?php echo $prestaCaracteristique[0]['cont_email']; ?>" name="cont_email" id="cont_email" type="text" placeholder="Mail" class="form-control">
        </div>
        <!--telephone-->
        <div class="col-md-12 form-group">
            <input value="<?php echo $prestaCaracteristique[0]['cont_tel']; ?>" name="cont_tel" id="cont_tel" type="text" placeholder="Téléphone" class="form-control">
        </div>
        <!--Contact (site de l'entreprise) -->
        <div class="col-md-12 form-group">
            <input value="<?php echo $prestaCaracteristique[0]['contact']; ?>" name="contact" id="contact" type="text" placeholder="Entrer votre reference " class="form-control">
        </div>
    </div>

    <h3 style="margin-left: 27%;margin-top: 5%; margin-bottom: 1%;">Questions Fréquentes: </h3>
    <div style=" background-color: #F5F5F5; height: 436px; margin-left: 27%; width: 700px; padding: 2%;">
            <!-- petit texte tac tac -->
        <p style=" background-color: #F0FFFF; padding: 3%;" >Certaines questons qui reviennent tous le temps et seront afficher sur 
        votre page, ce qui permet un gain de temps... .</p>
            <!--1er question -->
            <div class="col-md-12 form-group">
                <input name="" id="" type="text" placeholder="Nombre de personnes maximal..." class="form-control">
        </div>
        <div class="col-md-12 form-group">
                <input name="" id="" type="text" placeholder="Nombre de personnes maximal..." class="form-control">
        </div>
        <div class="col-md-12 form-group">
                <input name="" id="" type="text" placeholder="Nombre de personnes maximal..." class="form-control">
        </div>
        <div class="col-md-12 form-group">
                <input name="" id="" type="text" placeholder="Nombre de personnes maximal..." class="form-control">
        </div>
    </div>
    <br>
    <button type="submit" style="margin-left: 35%; " name="modifier" id="modifier" class="btn btn-light">MODIFIER</button>
</form>



<!--Enfin on va mettre notre footer habituelle-->
</body>
  <?php
  include '../vues/v_footer.html';
  ?>
</html>