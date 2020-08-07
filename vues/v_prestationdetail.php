<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../vues/v_entete.php';
include '../vues/v_carousselle_accueil.php';

?>
 <!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">-->
<br>
<?php
$libelle = ucfirst($libelle[0]);
?>
<h2 class="policeNewRoman ctr" style="display: block; color: #ce8483;"> <?php echo $libelle;?> </h2>
         <?php
     
       foreach ($prestataire as $unPrestataire)
{
           $tel=$unPrestataire['tel'];
           $libelle=$unPrestataire['libelle'];
           $logo=$unPrestataire['logo'];
           $description=$unPrestataire['description'];
           $adr=$unPrestataire['adr'];
           $id=$unPrestataire['id'];
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
         <!--  onclick="addconv('<?php// echo $id;?>');" href="nouvelleconversation-<?php //echo $id ; ?>"  <a href="message-<?php // echo $id ; ?>" class="btn btn-outline-danger" role="button" aria-pressed="true">Contacter</a></div>-->
         <!-- <button  id="myBtn">Nous contacter</button> -->
      <?php if(isset($_SESSION['nom'])){ ?>
        <a onclick="addconv('<?php echo $id;?>');" class="btn btn-outline-danger" role="button" aria-pressed="true"  id="myBtn">Contacter</a> 
     <?php }   ?></div>  
        </div>
      </div>


<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
       <a href="index" >
              <!-- Logo Image -->
            <img alt="Logo_miiting" src="logo.png"  style="width: auto; height: 55px; margin-left: 39%; margin-top: 3%; margin-bottom: 3%;">
            </a>
    <h4 class="policeNewRoman ctr" style="color: red;">Prendre contact</h4>  
          <div style="margin-left: 12%;margin-right: 12%;">
               <h3>Bonjour <?php  echo $_SESSION['prenom'].$_SESSION['nom']." : "; ?></h3>
               <p>Remplissez ce formulaire et on vous contactera dans les plus brefs délais.
                   Toutes les données que vous nous soumettez seront traitées de manière confidentielle. </p>
               <!--<form action="event-2" method="post" enctype="multipart/form-data">-->
               <form action="nouvelleconversation" method="post" enctype="multipart/form-data">

                    <!-- mail a sasir -->         
                     <input type="text" id="mail" name="mail" class="form-control" id="inputPassword" placeholder="Saisir votre mail">
                   <!-- choisir le prestataire -->
                   <div style="margin-top: 3%; margin-bottom: 3%;">
                   <strong> Choisisez votre prestataire : </strong>
                      <select name="idpresta" id="idpresta" class="form-control">
                      <?php  for($i=0;$i<count($prestataire);$i++)
                                        {
                                          ?>
                      <option value="<?php echo $prestataire[$i]['id'] ; ?>" ><?php echo $prestataire[$i]['libelle'] ; ?> </otpion>

                      <?php
                                        }
                                        ?>
                      </select>
                   </div>
                    
                   <!--mettre la date de l'evenement selon son id avant-->
                  <strong>Date de l'evenement : </strong> <input type="date" name="date" style="margin-right: 2% ;" id="date" value="<?php ?>"> 
                   <!--type de l'evenement-->
                   <br>
                   <div style="margin-top: 3%;margin-bottom: 3%;">
                   <label class="radio-inline"><input type="radio" name="event" value="mariage" >Mariage</label>
                   <label class="radio-inline"> <input type="radio" name="event" value="anniv">Anniversaire</label>
                   <label class="radio-inline"> <input type="radio" name="event" checked value="corpo">Corporate event</label>
                   </div>
                   <!--le message-->
                   <div style="margin-top: 3%;margin-bottom: 3%;">
                      <strong>Ecrivez votre message :</strong>
                      <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                  </div>
                    <!--envoyer-->
                   <button type="submit" class="btn btn-light" name="nouvelleconnexion">Enregistrer</button>
               </form>
               
          </div>
  </div>

</div>
    
<?php

 }
 include '../vues/v_carousel_entreprises.php';
  include '../vues/v_footer.html';
  ?>

      </body>
 </head>

  <script type="text/javascript" src='js/add_conversation.js'></script>
    