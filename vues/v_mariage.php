<center id="gris"> Mariage de Keren et Personne</center>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
  
include '../vues/v_entete.php';
?>

<html>
    <head>
      
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <br><br>
        
        <div id="myModal" class="modal">
             <span class="close">&times;</span>
             <img class="modal-content" id="img01">
            <div id="caption"></div>
        </div>
        
        <h2 class="policeNewRoman ctr" style="display: block; color: #ce8483;">Mariage de Keren et personne, Paris</h2>
        <p class='ctr'>Nous avons organisé notre fabuleux mariage, via Miiting. Merci de nous avoir permis d'avoir eu recourd à des préstataires aussi doué, sympatique. La bonne ambiance étais au RDV.
        Voici quelques souvenirs photos, en plus de ceux qui resterons gravé dans notre mémoire. </p>
              
                      <img id="myImg" alt="Paulette et Paul" src="images/mariage2.jpeg" style="width: 100%; height: 70%;margin: 2%;">
                     <!-- The Modal -->


                     
        <h4 class="policeNewRoman" style="margin-left: 10%;">Reportage rélasié par Photographe</h4>
        <div class="wrapper-photosmariage1" style="margin-left: 10%;">
            <img src="IMG2.jpeg" alt=""  id="myImg0" style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
            
            <img id="myImg1" src="images/mariage2.jpeg" alt="Devant l'autel" style="margin: 3px;padding: 15px; height: 100%; width: 100%">
            <img id="myImg2"src="images/beaumarie.jpeg"alt="" style="margin: 3px;padding: 15px; height: 100%; width: 100%">
            <div id="bordure"style='margin-left: 20%'>
                <h3 class="ctr">Communauté</h3>
                <p id="gris" style="margin-left: 20px"> Aujourd'hui nous parlons de ...</p>
                <br>
                <h5  style="margin-left: 15px">Titre de l'article</h5>
                <p style="margin-left: 10px">Bonjour ts le monde, je vous raconte ma vie et j'aime trop ca. J'aime aussi le chocolat ,
                    et toi tu aimes le chocolat? Alors vient a mon mariage y'aura un gateaux aux chocolat, lol</p>
            </div>
        </div>
        <div class="wrapper-photosmariage2" style="margin-left: 10%; ">
            <img src="images/salle.jpeg"  id="myImg3" alt="" style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
            <img src="images/marie7.jpeg" alt=""  id="myImg4" style="margin: 3px;padding: 15px; height: 100%; width: 100%">
            <img src="images/marie4.jpeg" alt=""  id="myImg5"  style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
            <img src="images/mariagee.jpeg" alt=""  id="myImg6" style="margin: 3px;padding: 15px; height: 100%; width: 100%">
            <img src="images/traiteur.jpeg" alt=""  id="myImg7"  style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
            <img src="images/table.jpeg" alt="" style="margin: 3px;padding: 15px; height: 100%; width: 100%">
            <img src="imgmarrie2.jpg" alt="" style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
            <img src="images/traiteurevent.jpeg" alt="" style="margin: 3px;padding: 15px; height: 100%; width: 100%">
            <img src="images/maries4.jpeg" alt=""  style="margin: 3px;padding: 15px; height: 100%; width: 100%; ">
            <img src="images/alliance.jpeg"alt=""  style="margin: 3px;padding: 15px; height: 100%; width: 100%">
        </div>
        
        <h4 class="policeNewRoman" style="margin: 5%;display: block; margin-left:10%;">Services et prestataires du mariage de Keren et Personne :</h4>
        
         <?php
       foreach ($prestataire as $unPrestataire)
           {
           $tel=$unPrestataire['tel'];
           $libelle=$unPrestataire['libelle'];
           $logo=$unPrestataire['logo'];
           $description=$unPrestataire['description'];
           $adr=$unPrestataire['adr'];
       ?>
  
    <!--     <div class="container">
         <div class="row">
              <div class="row">-->
    <div class="container ctr" >
        <div class="row">
            <div class="col-md-4"><img alt="Logo_miiting" src="<?php echo $logo ?>"  style="height: 180px;width:350px;"></div>
            <div class="col-md-8">  <h2><?php  echo " ".$libelle ?></h2><br><?php echo " ".$description?> <?php echo " ".$adr ?> <?php echo "  ".$tel ?>
<!--            <div ><?php echo " ".$description?></div>-->
<!--            <div class="col-md-offset-2"><?php echo " ".$adr ?>
            <div class="col-md-offset-2"><?php echo "  ".$tel ?></div>-->
         <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Contacter</a></div>
        </div>
    
      </div>

          <?php
             }
             include '../vues/v_footer.html';
          ?>
    </body>
   <script type="text/javascript" src='js/script.js'></script>
</html>