<?php
/**
 * page qui s'affiche lorsque l'utilisateur n'a pas d'evenement  et qu'il clique sur mon evenement
 */

include '../vues/v_entete.php';
?>

<!-- texte -->
<p> Vous etes pret .... mettre un article ????? Commencez a creer votre evenement </p>

<!-- image -->
<p>mettre une photo peut etre ????? </p>

<!-- bouton creer un evenement -->
<center>  <button style="border-color: blue; margin-left: 32%; width: 40%; "  class="btn btn-light">Créer event  </button></center>
<button id="myBtn">Open Modal</button>



   <!-- The Modal -->
   <div id="myModal" class="modal">

<!-- Modal content -->
<!-- la on va mettre notre formulaire pour lorsqu'il s'inscrit sur le site et qu'il se connecte pour la premiere fois-->
<div class="modal-content" style="height: 89%;">
    
  <span class="close">&times;</span>
  <div class="wrapper-form_modal_ajouter_evenement">
       <img src="images_miiting/images_marie_accueil/costume1.jpeg" alt="modal new event img" style="height: 98%; width: 90%">
       <div>
         <h4 class="policeNewRoman ctr" style="color: purple; margin-top: 3%;">A propos de vous </h4>  
         <strong> <?php  echo $_SESSION['prenom'].$_SESSION['nom']." : "; ?></strong>
         <h6 style=" margin-top: 3%;">Vous organisez..</h6>
         <form action="newevent" method="post" enctype="multipart/form-data">
           
             <input style="margin-left: 19%;" type="radio" name="event" checked value="corpo"><label class="radio-inline">Soirée Corporate
           </label>
           
             <input type="radio" name="event" value="anniv"><label class="radio-inline">Anniversaire
           </label>
         
             <input type="radio" name="event" value="mariage">  <label class="radio-inline">Mariage
           </label>
             <div class="form-group">
                 <!-- $_FILES['icone']['type']    pour recuperer le src de l'image -->
                  <h6 for="fichier" style="margin: 1%;">Une photo de l'evenement : </h6>
               <input  style="margin-left: 19%; margin-top: 5%; margin-bottom: 5%" name="coco"  type="file" class="form-control-file" id="coco">
               <h6>A propos de l'evenement...</h6>   
               <div class='wrapper-form_modal_ajouter_evenement-champ' >
                   <p>Date :</p><p>Nombre d'invités: </p>
                   <input type="date" name="date" style='margin-right: auto ;' name="date" id="date">
                   <input class="form-control" type="number" value="250" id="nbinvites" name="nbinvites">
 
               </div>
                <div class='wrapper-form_modal_ajouter_evenement-champ' >
                   <p style="margin-top: 5%; ">Ville :</p><p  style="margin-top: 5%; margin-left: 5%; ">Nommer votre evenement: </p>
                   <input type="text" style='margin-right: auto ; height: 40%; width: 80%;' name="ville" id="ville">
                   
                   <input style="margin-left: 5%; height: 40%; " type="text" id="nomevent" name="nomevent">
 
               </div>
               <h6>Selectionnez les prestataires dont vous avez besoin: </h6>     
               <div class='wrapper_check'>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox1" name="traiteur" id="traiteur">
                      <label class="form-check-label" for="inlineCheckbox1">Traiteur</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Photographe" id="Photographe">
                      <label class="form-check-label" for="inlineCheckbox2">Photographe</label>
                    </div>
                     <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="salle" id="salle">
                      <label class="form-check-label" for="inlineCheckbox2">Lieu de reception</label>
                    </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Photos et vidéos" id="Photos et vidéos">
                      <label class="form-check-label" for="inlineCheckbox2">Photos et vidéos</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Location de voiture" id="Location de voiture">
                      <label class="form-check-label" for="inlineCheckbox2">Location de voiture</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Robescostumes" id="Robescostumes">
                      <label class="form-check-label" for="inlineCheckbox2"> Robes & costumes</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Cadeaux" id="Cadeaux">
                      <label class="form-check-label" for="inlineCheckbox2">Cadeaux</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Décoration" id="Décoration" >
                      <label class="form-check-label" for="inlineCheckbox2">Décoration</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Décoration" id="Décoration" >
                      <label class="form-check-label" for="inlineCheckbox2">Musique & Animation</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Décoration" id="Décoration" >
                      <label class="form-check-label" for="inlineCheckbox2">Faire-part</label>
                   </div>
                   <div class="form-check form-check-inline">
                      <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Décoration" id="Décoration" >
                      <label class="form-check-label" for="inlineCheckbox2">Wedding Planner</label>
                   </div>
               </div>
              <center><button type="submit" style="margin-top: 3%;" name="enregistrer" id="enregistrer" class="btn btn-light">Enregistrer</button></center>
           </div>
         </form>
         <p></p>
       </div>
       
  </div>
  
 
  
</div>

</div>

</div>

<script type="text/javascript" src='js/add_conversation.js'></script>

