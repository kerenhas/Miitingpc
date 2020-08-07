   <!-- The Modal -->
    <div id="myModal" class="modal">

      <!-- Modal content -->
      <!-- la on va mettre notre formulaire pour lorsqu'il s'inscrit sur le site et qu'il se connecte pour la premiere fois-->
      <div class="modal-content">
          
        <span class="close">&times;</span>
        <div class="wrapper-form_modal_ajouter_evenement">
             <img src="images/costume.jpg" alt="" style="height: 98%; width: 90%">
             <div>
               <h4 class="policeNewRoman ctr">A propos de vous </h4>  
               <p>Vous etes <?php  echo $_SESSION['prenom'].$_SESSION['nom']." : "; ?></p>
               <h6>Vous organisez..</h6>
               <!--<form action="event-2" method="post" enctype="multipart/form-data">-->
               <form action="addevent" method="post" enctype="multipart/form-data">
                   <input type="radio" name="event" checked value="corpo">
                   <label class="radio-inline">Soirée Corporate</label>
                 
                   <input type="radio" name="event" value="anniv">
                   <label class="radio-inline">Anniversaire</label>                
               
                   <input type="radio" name="event" value="mariage">
                     <label class="radio-inline">Mariage</label>
                 
                   <div class="form-group">
                       <!-- $_FILES['icone']['type']    pour recuperer le src de l'image -->
                        <label for="fichier" style="margin: 1%;">Une photo de l'evenement : </label>
                     <input name="coco" style="" type="file" class="form-control-file" id="coco">
                     <h6>A propos de l'evenement...</h6>   
                     <div class='wrapper-form_modal_ajouter_evenement-champ' >
                         <p>Date :</p><p>Nombre d'invités: </p>
                         <input type="date"  style='margin-right: auto ;' name="date" id="date">
                         <input class="form-control" type="number" value="250" id="nbinvites" name="nbinvites">
       
                     </div>
                      <div class='wrapper-form_modal_ajouter_evenement-champ' >
                         <p>Ville :</p><p>Nommer votre evenement: </p>
                         <input type="text" style='margin-right: auto ;  border-bottom:1px dashed green;' name="ville" id="ville">
                         
                         <input type="text" id="nomevent" name="nomevent">
       
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
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" name="Lieu de reception" id="Lieu de reception">
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
                     <button type="submit" class="btn btn-light">Enregistrer</button>
                 </div>
               </form>
               <p></p>
             </div>
             
        </div>
        
        <p>Some text in the Modal..</p>
        
      </div>

    </div>