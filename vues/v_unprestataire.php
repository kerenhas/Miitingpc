<?php
/**
 * page qui s'affiche quand on veut les details pour un prestataire 
*/
include '../vues/v_entete.php';
include '../vues/v_carousselle_accueil.php';

?>
 <div class="container ctr" >
        <div class="row">
            <div class="col-md-4"><img alt="Logo_miiting" src="<?php echo $notrepresta[0]['logo']; ?>"  style="height: 180px;width:350px;"></div>
            <div class="col-md-8">  <h2><?php  echo " ".$notrepresta[0]['libelle']; ?></h2><br><?php echo " ".$notrepresta[0]['description'] ;?> <?php echo " ".$notrepresta[0]['adr'] ;?> <?php echo "  ".$notrepresta[0]['cont_tel'] ; ?>
<!--            <div ><?php echo " ".$notrepresta[0]['description'] ; ?></div>-->
<!--            <div class="col-md-offset-2"><?php echo " ".$notrepresta[0]['adr'] ; ?>
            <div class="col-md-offset-2"><?php echo "  ".$notrepresta[0]['cont_tel'] ;?></div>-->
         <!--  onclick="addconv('<?php// echo $id;?>');" href="nouvelleconversation-<?php //echo $id ; ?>"  <a href="message-<?php // echo $id ; ?>" class="btn btn-outline-danger" role="button" aria-pressed="true">Contacter</a></div>-->
       <a onclick="addconv('<?php echo $notrepresta[0]['id'] ;;?>');" class="btn btn-outline-danger" role="button" aria-pressed="true" >Contacter</a>  
       <button  id="myBtn">Nous contacter</button>  </div>  
        </div>
      </div>


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
               <form action="nouvelleconversation" method="post" enctype="multipart/form-data">
                   <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                             <input type="text" id="mail" name="mail" class="form-control" id="inputPassword" placeholder="email" value="<?php //echo $mail;?>">
                         </div>
                      </div>
                      <p>Votre prestataire </p>
                      <select name="idpresta" id="idpresta">
                      <?php  for($i=0;$i<count($prestataire);$i++)
                                        {
                                          ?>
                      <option value="<?php echo $prestataire[$i]['id'] ; ?>" ><?php echo $prestataire[$i]['libelle'] ; ?> </otpion>

                      <?php
                                        }
                                        ?>
                      </select>
                   <!--mettre la date de l'evenement selon son id avant-->
                   <p>Date de l'evenement</p> <input type="date" name="date" style="margin-right: auto ;" id="date" value="<?php //echo $date ;?>"> 
                   <!--type de l'evenement-->
                   <label class="radio-inline"><input type="radio" name="event" value="mariage" <?php //if($typeevent = 3){ echo "checked";
                  // }
                   ?>>Mariage</label>
                   <label class="radio-inline"> <input type="radio" name="event" value="anniv"  <?php //if($typeevent = 1){ echo "checked";
                   //}
                   ?>>Anniversaire</label>
                   <label class="radio-inline"> <input type="radio" name="event" checked value="corpo" <?php //if($typeevent = 2){ echo "checked";
                  // }
                   ?>>Corporate event</label>
                   
                   <!--le message-->
                   <p>Ecrivez un message</p>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                    <!--envoyer-->
                   <button type="submit" class="btn btn-light" name="nouvelleconnexion">Enregistrer</button>
               </form>
  </div>

</div>
    
<?php

 
 include '../vues/v_carousel_entreprises.php';
  include '../vues/v_footer.html';
?>

      </body>
 </head>

     <script type="text/javascript" src='js/add_conversation.js'></script>
