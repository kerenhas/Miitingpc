<?php

/*
 *Page qui est appeler lorsqu'un utilisateur est sur son evenement et qui cherche des prestataires pour une prestation
 Donc qd il va cliquer sur une des prestations qu'il a envie, on lui affiche  les prestataires disponible pour cette prestations 
 */

include '../vues/v_eventmenu.php';


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
         <!--<a href="message-<?php // echo $id ; ?>" class="btn btn-outline-danger" role="button" aria-pressed="true">Contacter</a></div>-->
<a href="nouvelleconversation-<?php  echo $id ; ?>" class="btn btn-outline-danger" role="button" aria-pressed="true">Contacter</a></div>
        </div>
    
      </div>
    
<?php
           }
           


 include '../vues/v_carousel_entreprises.php';
 include '../vues/v_footer.html';
?>
      



         
          
