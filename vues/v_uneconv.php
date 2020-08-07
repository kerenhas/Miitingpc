<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../vues/v_eventmenu.php';
?>

<!-- menu horisontable avec le nom de tous les prestataires contactes + le nombre de message non lu lorsque l'utilisateur est receveur-->
<div class="wrapper-menutache">
  <div class="vertical-menu">
       <!--faire une boucle pour avoir toutes les familles dans le menu-->
       <?php 
       for($i=0;$i<count($tabprestaconv);$i++)
       {
           ?>
            <a href="detailFamille-<?php echo $tabprestaconv[$i]['idconv'] ?>" ><?php echo  $tabprestaconv[$i]['libellepresta']; ?></a> <!--mettre comme href l'id de la famille -->
       <?php
       }
       ?>
  </div> 
  <div>
      <p>ensemble de vos message</p> 
  </div>

</div>
<?php
  include '../vues/v_footer.html';
?>
