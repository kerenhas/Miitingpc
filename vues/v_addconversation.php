<?php

include '../vues/v_eventmenu.php';
    
/* 
 * Quand on ecrit un nouveau message pour la premiere fois
 * creation d'une nouvelle 
 */
?>
 <!-- The Modal -->
    <div id="myModal" class="modal">
      <!-- Modal content -->
      <div class="modal-content">
          
        <span class="close">&times;</span>
               <h4 class="policeNewRoman ctr">Contacter mettre le nom du prestataire</h4>  
               <p>Vous etes <?php  echo $_SESSION['prenom'].$_SESSION['nom']." : "; ?></p>
               <p>Remplissez ce formulaire et Le Studio Prestige Event vous contactera dans les plus brefs délais.
                   Toutes les données que vous nous soumettez seront traitées de manière confidentielle. </p>
               <!--<form action="event-2" method="post" enctype="multipart/form-data">-->
               <form action="addevent" method="post" enctype="multipart/form-data">
                   <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                             <input type="text" class="form-control" id="inputPassword" placeholder="email">
                         </div>
                   </div>
                   <!--mettre la date de l'evenement selon son id avant-->
                   <p>Date de l'evenement</p> <input type="date" name="date" style="margin-right: auto ;" id="date"> 
                   <!--type de l'evenement-->
                   <label class="radio-inline"><input type="radio" name="optradio" checked>Option 1</label>
                   <label class="radio-inline"><input type="radio" name="optradio">Option 2</label>
                   <label class="radio-inline"><input type="radio" name="optradio">Option 3</label>
                   <!--le message-->
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                    <!--envoyer-->
                   <button type="submit" class="btn btn-light">Enregistrer</button>
               </form>
       </div>       
    </div>
        
