<?php

/**
 * Page que qd on clique sur deees dans le menu on tombe dessus
 * @author Keren Hassan
 */
include '../vues/v_entete.php';
?>
<!-- trois images cote a cote -->
<div style="margin-left: 1% ; margin-bottom: 4%; border-bottom:4px dashed green;">
   <img alt="avant le mariage" style="width: 33%;" src="images_miiting/images_accueil-idees/avant_mariage.PNG">
   <img alt="pendant le mariage" style="width: 33%;" src="images_miiting/images_accueil-idees/pd_mariage.PNG">
   <img alt="apres le mariage" style="width: 33%;" src="images_miiting/images_accueil-idees/apres_mariage.PNG">
</div>

<!-- les trois beandeau -->

<div>
   <img alt="Premier image" style="margin-bottom: 4%; margin-right: 5%; margin-left: 15%;width: 32%;" src="images_miiting/images_accueil-idees/salle.PNG">
   <img alt="Premier image" style="margin-bottom: 4%;width: 32%;" src="images_miiting/images_accueil-idees/dj.PNG">
</div>
<div>
   <img alt="Premier image" style="margin-bottom: 4%; margin-right: 5%; margin-left: 15%; width: 32%;" src="images_miiting/images_accueil-idees/menu.PNG">
   <img alt="Premier image" style="margin-bottom: 4%; width: 32%;" src="images_miiting/images_accueil-idees/cadeau.PNG">
</div>
<div style="margin-bottom: 5%;">
   <img alt="Premier image" style="margin-right: 5%; margin-left: 15%; width: 32%;" src="images_miiting/images_accueil-idees/maison.PNG">
   <img alt="Premier image" style="  width: 33%;" src="images_miiting/images_accueil-idees/famille.PNG">
</div>


<!-- a vous la paroles -->
<h3 class="rouge ctr">C'est à vous la parole ...</h3>
<div class='container'>
   <div class='wrapper-ideesclient'>
      <?php
      for ($i = 0; $i < 3; $i++) {
      ?>
         <img src="<?php echo $article[$i]['img']; ?>" alt="<?php echo $article[$i]['alt']; ?>" style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
         <div>
            <h2><?php echo $article[$i]['titre']; ?></h2>
            <p> <?php echo $article[$i]['texte']; ?></p>
         </div>
      <?php
      }
      ?>
   </div>
   <!-- formulaire -->
   <div class="container">
      <form method="post" action="idees" role="form">
         <fieldset>
            <div class="form-group">
               <label for="nom">Entrez votre nom</label>
               <input type="text" class="form-control" id="nom" name="nom">
            </div>
            <div class="form-group">
               <label for="email">Entrez votre mail</label>
               <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
               <label for="selection">Une liste select</label>
               <select id="selection" class="form-control">
                  <option value="">Liste de choix...</option>
                  <optgroup label="Event">
                     <option value="">Option 1</option>
                     <option value="">Option 2</option>
                     <option value="">Option 3</option>
                  </optgroup>
                  <optgroup label="Mariage">
                     <option value="">Mariée</option>
                     <option value="">Marié</option>
                  </optgroup>
               </select>
            </div>
            <div class="form-group">
               <label for="bio">article</label>
               <textarea class="form-control" id="bio" rows="3" name="article"></textarea>
            </div>
            <div class="form-group">
               <label for="exampleFormControlFile1">Ajouter une image</label>
               <input type="file" class="form-control-file" id="exampleFormControlFile1">
            </div>
            <button style="border-color: blue; margin-left: 32%; width: 40%; " type="submit" class="btn btn-light">Envoyer </button>
         </fieldset>
      </form>
   </div>