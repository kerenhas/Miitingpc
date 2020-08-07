<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../vues/v_entete.php';
//include '../vues/v_carousselle_accueil.php';
?>
<html>
    <body>
        <br>
        <h2 class="ctr rouge"><?php echo $article['titre'] ;?></h2>
         <img src="<?php echo $article['img'] ;?>" alt="" class="ctr" style="margin-left: 23%;padding: 15px; height: 50%; width: 50%; ">
         <p class="ctr"><?php echo $article['texte'] ;?></p>
         <br>
         <br>
    </body>
<?php
    include '../vues/v_carouel_articles.php';

  include '../vues/v_footer.html';
?>
</html>