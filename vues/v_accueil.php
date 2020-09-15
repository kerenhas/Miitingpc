<!DOCTYPE html>
<!--<center id="gris">Bienvenue sur Miiting</center>-->
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include 'vues/v_entete.php';
include 'vues/v_carousselle_accueil.php';
?>
<link rel="stylesheet" type="text/css" href="styles/css_elie/accueil.css">
<html>

<body>
  <br>
  <center style="position: relative; margin-top: -7% ; margin-right: 6%;">
    <!--style="margin-top: 36%;"-->
    <div class="container">
      <div class="wrapper-organiser">
        <div>
          <h3 class="policeNewRoman " id='organiser'>Organisez votre événement... </h3>
        </div>

        <div class="wrapper-organiser-logo">
          <img  id="anniv" src="images/anniversaire.png" alt="" >
          <a class="anniversaire" hovcolor " href="anniversaire" >Anniversaire</a>
        </div>
        <div class="wrapper-organiser-logo">
          <img id="mariage" src="images/mariage.png" alt="" >
          <a class="anniversaire" hovcolor " href="prestation" >  Mariage</a>
        </div>
        <div class="wrapper-organiser-logo">
          <img id="corpo" src="images/event_corpo.png" alt="" >
          <a class="anniversaire" href="corporate" >Corporate</a></div>
        <div> <a href="inscription-1" class="btn btn-outline-danger" role="button" style=' margin-top: 15%;'>Commencer</a></div>
        <!--<button type="button" class="btn btn-outline-danger" >Commencer</button>-->
        <!--<div class="col-sm-5 offset-sm-2 col-md-6 offset-md-0">  <button type="button" id="dembtn" class="btn btn-outline-danger">Démarrer</button></div>-->
      </div>
    </div>
  </center>
  </br></br><br>
  <center>
    <h3 class="policeNewRoman"><strong>Idées et conseils</strong></h3>
  </center>
  <p id="gris" class="ctr policeNewRoman">Trouvez encore plus d'inspiration dans nos articles et suivez les conseils de nos rédactrices expertes en mariage</p>

  <div class="container">
    <div class="wrapper-idees ">
      <!--<div  class="hov "><p>toto</p></div>-->
      <!--<div> <p style="position:relative;margin: 2px;padding: 5px ;top: 30%;left: 20%;">Pendant le mariage</p>-->
      <div> <img src="images_miiting/images_idees_accueil/preparatifs.jpeg" alt="" class="hov-idees " style="margin: 3px;padding: 15px; height: 100%; width: 100%;">
        <p class="policeNewRoman ideeTexte1" style="font-size: 15px; color: white; background-color: black; width: 40%; left: 30%;">Les préparatifs</p>
      </div>
      <div>
        <a href="theme-1"> <img src="images_miiting/images_idees_accueil/par_ou_commencer.jpeg" alt="" class="hov-idees " style="margin: 3px;padding: 15px; height: 100%; width: 100%"></a>
        <p class="policeNewRoman" id=" lespreparatifs " style="font-size: 15px;  position:relative; margin: 2px; padding: 5px ;left: 24%;bottom: 60%; color: white;background-color: black; width: 50%">Par ou commencer</p>
      </div>
      <!--<p class="policeNewRoman ideeTexte2" >Pendant le mariage</p></div>-->
      <div><img src="images_miiting/images_idees_accueil/budget.jpeg" alt="" class="hov-idees " style="margin: 3px;padding: 15px; height: 100%; width: 100%">
        <p class="policeNewRoman " style="font-size: 15px;  position:relative; margin: 2px; padding: 5px ;left: 33%;bottom: 60%; background-color: black; color: white; width: 34%">Les budgets</p>
      </div>
      <div><img src="images_miiting/images_idees_accueil/reception.jpeg" alt="" class="hov-idees " style="margin: 3px;padding: 15px; height: 100%; width: 100%">
        <p class="policeNewRoman ideeTexte1" style="font-size: 15px;background-color: black; color: white; width: 41%; left: 30%; ">Les réceptions</p>
      </div>
      <div><img src="images_miiting/images_idees_accueil/prestataires.jpeg" alt="" class="hov-idees " style="margin: 3px;padding: 15px; height: 100%; width: 100%">
        <p class="policeNewRoman ideeTexte1" style="font-size: 15px; background-color: black; color: white; width: 42% ; left: 30%;">Les prestataires</p>
      </div>
      <div><img src="images_miiting/images_idees_accueil/la_boutique.jpeg" alt="" class="hov-idees " style="margin: 3px;padding: 15px; height: 100%; width: 100%">
        <p class="policeNewRoman ideeTexte1" style="font-size: 15px; color: white;  background-color: black;width: 34%; left: 30%;">La boutique</p>
      </div>
      <div><img src="images_miiting/images_idees_accueil/application.jpg" alt="" class="hov-idees " style="margin: 3px;padding: 15px; height: 100%; width: 100%">
        <p class="policeNewRoman " style="font-size: 15px;  position:relative; margin: 2px; padding: 5px ;left: 25%;bottom: 60%; background-color: black; color: white; width: 48%">Votre appli dédiée</p>
      </div>
      <div> <img src="images_miiting/images_idees_accueil/lune_de_miel.jpeg" alt="" class="hov-idees " style="margin: 3px;padding: 15px; height: 100%; width: 100%">
        <p class="policeNewRoman " style="font-size: 15px; position:relative; margin: 2px; padding: 5px ;left: 26%;bottom: 60%; background-color: black; color: white; width: 51%">Après l’événement</p>
      </div>
    </div>
  </div>

  <div style="background-color: #dcdcdc;">
    <br><br>
    <center>
      <h3 class="policeNewRoman"><strong>Vos mariages</strong></h3>
    </center>
    <p id="gris" class="ctr policeNewRoman">Inspirez-vous des mariages d'autres mariés et s'ils vous plaisent contactez les prestataires qui les ont organisés</p>

    <div class="container">
      <!--  <div class="row"  >
 


  </div>-->

      <div class="wrapper-mariages ">
        <!--<div  class="hov "><p>toto</p></div>-->
        <div class="max" style="margin: 3px">
          <a class="sanslien" href="mariage"><img href="mariage" src="images/gateau_mariage.jpeg" alt="" id="zoom" class="hov">
            <p class="textImage text-center">Kehihiren et personne</p>
            <img src="images/marie4.jpeg" alt="" style="height: 60px; width: 85px" class="hov">
            <img src="images/traiteurevent.jpeg" alt="" style="height: 60px; width: 85px" class="hov">
            <img src="images/dj.jpeg" alt="" style="height: 60px; width: 85px" class="hov">
            <p id="gris" class="ctr">Paris</p>
          </a>
        </div>

        <div class="max" style="margin: 3px">
          <img src="img3.jpeg" alt="" id="zoom" class="hov">
          <p class="textImage text-center">Jordan et Aurelie</p>
          <img src="images/corpo.jpeg" alt="" style="height: 60px; width: 85px" class="hov">
          <img src="images/gateaux.jpeg" alt="" style="height: 60px; width: 85px" class="hov">
          <img src="images/alliance.jpeg" alt="" style="height: 60px; width: 85px" class="hov">
          <p id="gris" class="ctr">Paris</p>
        </div>
        <div class="max" style="margin: 3px">
          <img src="images/mariage.jpeg" alt="" id="zoom" class="hov">
          <p class="textImage text-center">KDavid et Lea</p>
          <img src="images/event.jpeg" alt="" style="height: 60px; width: 85px" class="hov">
          <img src="images/maries4.jpeg" alt="" style="height: 60px; width: 85px" class="hov">
          <img src="img.jpeg" alt="" style="height: 60px; width: 85px" class="hov">
          <p id="gris" class="ctr">Paris</p>

        </div>
        <div class="max" style="margin: 3px">
          <img src="images/mariage2.jpeg" alt="" id="zoom" class="hov">
          <p class="textImage text-center">Claude et Clara</p>
          <img src="images/dj2.jpeg" alt="" style="height: 60px; width: 85px" class="hov">
          <img src="images/beaumarie.jpeg" alt="" style="height: 60px; width: 85px" class="hov">
          <img src="images/salle.jpeg" alt="" style="height: 60px; width: 85px" class="hov">
          <!--<img src="img.jpeg" alt="" style="height: 60px; width: 83px" class="ombre">-->
          <p id="gris" class="ctr">Paris</p>
        </div>
      </div>
      <!--    <button type="button" class="btn btn-outline-info" style="margin-left: 40% ">voir plus de mariages</button>
    </br> -->
    </div>

  </div>
  <a href='application' style='text-decoration: none;'>
    <h2 class='policeNewRoman ctr  '>L’application de vos evenements</h2>
  </a><BR>
  <center> <iframe width="760" height="555" src="https://www.youtube.com/embed/AVy2-Rb06Lk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
  <br><br>

  <!-- Robe de mariée: Notre selection -->
  <center>
    <h3 class="policeNewRoman" style="background-color: #dcdcdc;"> Robe de mariée: Notre selection </h3>
  </center>
  <center>
  <div style="width: 90%; margin: auto">
    <img src="images_miiting/images_accueil_mariage/img1bis.jpeg" style="width: 280px;" alt="image mariage" />
    <img src="images_miiting/images_accueil_mariage/img2bis.jpeg" style="width: 280px;" alt="image costume" />
    <img src="images_miiting/images_accueil_mariage/img4bis.jpeg" style="width: 280px;" alt="image cocktail" />
    <img src="images_miiting/images_accueil_mariage/img3bis.jpeg" style="width: 280px;" alt="image costume" />
  </div>
  </center>
  <br><br><br>
  <!-- Soirée d’entreprise: Robe de cocktail & Costumes -->
  <center>
    <h3 class="policeNewRoman" style="background-color: #dcdcdc;">Soirée d’entreprise: Robe de cocktail & Costumes </h3>
  </center>
  <center>
  <div style="width: 90%; margin: auto">
    <img src="images_miiting/images_marie_accueil/costume1bis1.jpeg" style="width: 280px;" alt="image costume" />
    <img src="images_miiting/images_marie_accueil/costume2.jpeg" style="width: 280px;" alt="image costume" />
    <img src="images_miiting/images_marie_accueil/cocktailbis1.jpeg" style="width: 280px;" alt="image cocktail" />
    <img src="images_miiting/images_marie_accueil/costume3bis.jpeg" style="width: 280px;" alt="image costume" />
  </div>
  </center>
  <br><br><br>
  <?php
  include 'vues/v_carousel_entreprises.php';
  ?>
  <!--     <center><h3><a href='miitingor-2'>Prestataires? <br>Inscrivez vous maintenant...</a></h3></center>
     <center><img src="images/miitingor.png" alt="Miiting d'or"></center>
     -->

</body>
<?php
include 'vues/v_footer.html'; ?>


</html>