<?php
/*
*dans cette page, on aura un formulaire qu'on enverra a c-agenda et qui va permettre la creation d'un evenement une fois
* le contrat signe
* @author Keren Hassan
*/
include '../vues/v_entrep_entete.php';

?>

 <!--Petite image avec un beau texte dedans -->
 <div> 
    <img src="images/img-bur.jpg" alt="bureau_img" style="height: 55%; margin-left: 27%;">

    <p style="position: absolute; bottom: 48%; left: 38%; font-size: 25px; ">Veuillez remplir les champs</p>
    <p  style="position: absolute; bottom: 40%; left: 28%; font-size: 25px;">de votre contrat
    </p>
</div>
<form action="agenda" method="POST">


    <!-- sujet de l'entreprise : -->
    <h3 style="margin-left: 27%;margin-top: 5%; margin-bottom: 1%;">L'evenement </h3>
    <div style=" background-color: #F5F5F5; height: 836px; margin-left: 27%; width: 700px; padding: 2%;">
    <!-- petit texte tac tac -->
    <p style=" background-color: #F0FFFF; padding: 3%;" >Donner les informations sur l'evenement... .</p>
                <!-- Libelle -->
                <div class="col-md-12 form-group">
                    <input name="date" id="date" type="date" placeholder="Entrer la date "  class="form-control">
                </div>
                <!-- Ville -->
                <div class="col-md-12 form-group">
                    <input name="nom" id="nom" type="text" placeholder="Entrer le nom de l'utilisateur " class="form-control">
                </div>
                <!-- adresse -->
                <div class="col-md-12 form-group">
                    <input  name="budget" id="budget" type="text" placeholder="Entrer le budget" class="form-control">
                </div>
                <!-- SIRET -->
                <div class="col-md-12 form-group">
                    <input name="lieu" id="lieu" type="text" placeholder="lieu" class="form-control">
                </div>  
                <div class="col-md-12 form-group">
                    <input name="date_signature" id="date_signature" type="date" placeholder="date_signature" class="form-control">
                </div> 
                <!--Description -->
                    <p>chose a savoir:</p>
                    <textarea style="width: 59%;" name="description" id="description" rows="4"></textarea>

    <BR><BR>
        </div>
        <button type="submit" style="margin-left: 35%; " name="ajouter" id="ajouter" class="btn btn-light">Ajouter</button>
</form>