<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../vues/v_entete.php';
?>
<div class='ctr'> <img src="IMG2.jpeg" alt="" style=" height: 50%; width: 50%; "></div>
 
<br><br>
  <div class="bordurbleu ctr">
    <h3>Le Miiting d'Or 2020</h3>
    <br>
    <h4>Prestataire dans l'événementiel?</h4><br><br>
    <p>Participez et tentez de remporter une année de Community Management (2500€H.T) sur les réseaux sociaux (Facebook, Insta, Linkedin...),
        un référencement privilégié sur Miiting (1500€H.T) ainsi que l'utilisation gratuit de l'application pendant un an!</p>
    <br>
    <p>Pour jouer c'est facile et c'est gratuit, tu n'as qu'à remplir la fiche d'inscription ci-dessous 
        (attention numéro de Siren obligatoire).</p><br>
  </div>
<div class='ctr'>
    <h3>Inscription</h3>
        <div class="container">
         <form method="post" action="miitingorvalider-1" role="form">
        <fieldset>
            <div class='wrapper-formcotecote' style="margin-left: 25%;">
          <div  style="margin-right: 20%;" class="form-group">
             <label for="societe">Nom de la société:</label>
             <input type="text" class="form-control" id="societe" name="societe" value="<?php echo $societe?>">
             </div>    
          <div class="form-group">
             <label for="activite">Secteur d'activité</label>
             <input type="text" class="form-control" id="activite" name="activite" value="<?php echo $activite?>">
          </div> 
            </div>
           <div class='wrapper-formcotecote' style="margin-left: 25%;">
          <div style="margin-right: 20%;" class="form-group">
             <label for="nom">Entrez votre nom</label>
             <input type="text" class="form-control" id="nom" name="nom" value="<?php echo $nom?>">
             </div>    
          <div  class="form-group">
             <label for="prenom">Entrez votre prénom</label>
             <input type="text" class="form-control" id="prenom" name="prenom" value="<?php echo $prenom?>">
          </div> 
            </div>
            <div class='wrapper-formcotecote' style="margin-left: 25%;">
          <div style="margin-right: 20%;" class="form-group">
             <label for="telephone">Entrez votre telephone</label>
             <input type="text" class="form-control" id="tel" name="tel" value="<?php echo $tel?>">
             </div>    
          <div class="form-group">
             <label for="email">Entrez votre mail</label>
             <input type="text" class="form-control" id="email" name="email" value="<?php echo $email?>">
          </div> 
            </div>
          <div style="margin-right: 20%;margin-left: 13%;" class="form-group">
            <label for="apropos">A propos de vous...</label>
            <textarea class="form-control" id="apropos" rows="3" name="apropos" ></textarea>
          </div>
            <div>
           <label for="siret">Numéro de siret</label>
          <input type="text" class="form-control mb-2 mr-sm-2" id="siret" name='siret' value="<?php echo $siret?>">
            </div>
         <input type = "submit" value = "Envoyer">
        </fieldset>
      </form>
   </div>
</div>
  <?php
  include '../vues/v_footer.html';
  ?>