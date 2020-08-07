<center id="gris"> Idées </center>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../vues/v_entete.php';

?>
<!DOCTYPE html>

<html>

<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
  <br>
  <h2 class="ctr policeNewRoman">Nos Idées</h2>
  <p style="margin: 15px;" class="ctr" id="gris">Parce qu'organiser un mariage reste un moment magique et spécial, nous souhaitons vous aider à en profiter au maximum grâce à de précieux conseils qui vous seront très utiles.
    Retrouvez à travers nos articles toute l'inspiration que vous recherchez pour votre jour J.</p>
  <h3 class="rouge ctr">Tendances vues par les professionnels</h3>
  <div class="container">
    <div class="wrapper-ideespronew" style="margin: 40px;">

      <?php
      for ($i = 0; $i < 2; $i++) {
      ?>
        <div>
          <a href="<?php echo $themes[$i]['href']; ?>"> <img src="<?php echo $themes[$i]['img']; ?>" alt="<?php echo $themes[$i]['alt']; ?>" style="margin: 3px;padding: 15px; height: 100%; width: 100%; "></a>
          <p class="policeNewRoman" style="position: relative;bottom: 20%;left: 7%; font-size: 28px; color: white;"><?php echo $themes[$i]['titre']; ?></p>
        </div>
      <?php
      }
      ?>
      <!--
             <div>
              <img src="IMG2.jpeg" alt=""  style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
              <p class="policeNewRoman" style="position: relative;bottom: 20%;left: 7%; font-size: 28px; color: white;">La demande en mariage, un exercice compliqué ? </p>
             </div>                        -->
    </div>
  </div>
  <div class="container">
    <div class="wrapper-ideesproolder">
      <?php
      for ($i = 2; $i < 6; $i++) {
      ?>
        <div>
          <img src="<?php echo $themes[$i]['img']; ?>" alt="<?php echo $themes[$i]['alt']; ?>" style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
          <p style="position: relative;bottom: 28%;left: 8%;"><?php echo $themes[$i]['titre']; ?></p>
        </div>
      <?php
      }
      ?>

      <!--              <div>
                <img src="IMG2.jpeg" alt=""  style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
                <p style="position: relative;bottom: 28%;left: 8%;">Les preparatifs du mariage par ou commencer ?</p>
              </div>
               <div>
                <img src="IMG2.jpeg" alt=""  style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
                <p style="position: relative;bottom: 28%;left: 8%;">Les preparatifs du mariage par ou commencer ?</p>
              </div>
              <div>
                <img src="IMG2.jpeg" alt=""  style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
                <p style="position: relative;bottom: 28%;left: 8%;">Les preparatifs du mariage par ou commencer ?</p>
              </div>
              <div>
                <img src="IMG2.jpeg" alt=""  style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
                <p style="position: relative;bottom: 28%;left: 8%;">Les preparatifs du mariage par ou commencer ?</p>
              </div>              -->
    </div>
  </div>
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

      <!--             <img src="IMG2.jpeg" alt=""  style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
             <div>
                 <h2>Titre de l'article</h2>
                 <p> Voici Préparez votre mariage avec Miiting et bénéficiez de conseils et d'aides gratuitement! 
                    Miiting accompagne ses mariés du démarrage de l'événement jusqu'à la lune de miel.
                    Nous vous offrons un service de wedding planner totalement gratuit et un service juridique pour vous soutenir dans vos démarches et vos signatures de contrats.
                    Parce qu'un mariage est unique, Miiting le sera aussi.</p>
             </div>
              <img src="IMG2.jpeg" alt=""  style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
             <div>
                 <h2>Titre de l'article</h2>
                 <p> Voici Préparez votre mariage avec Miiting et bénéficiez de conseils et d'aides gratuitement! 
                    Miiting accompagne ses mariés du démarrage de l'événement jusqu'à la lune de miel.
                    Nous vous offrons un service de wedding planner totalement gratuit et un service juridique pour vous soutenir dans vos démarches et vos signatures de contrats.
                    Parce qu'un mariage est unique, Miiting le sera aussi.</p>
             </div>-->
    </div>
  </div>
  <h3 class='ctr policeNewRoman rouge'>A votre tour d'écrire un article !!!</h3>
  <div class="container">
    <form method="post" action="idees-1" role="form">
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
        <input type="submit" value="Envoyer">
      </fieldset>
    </form>
  </div>

</body>
<?php
include '../vues/v_footer.html';
?>

</html>