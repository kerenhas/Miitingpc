 <div class="reponse_ajax_accueil" id='reponse_ajax_accueil'>  
    <?php
    /* 
     * ensemble des messages recus 
     * avec toutes les conversations
     * @author Keren Hassan
     */
    include '../vues/v_eventmenu.php';
    ?>
    <!-- menu horisontable avec le nom de tous les prestataires contactes + le nombre de message non lu lorsque l'utilisateur est receveur-->
    <div class="wrapper-menutache">
      <div class="vertical-menu">
           <!--faire une boucle pour avoir toutes les conversations dans le menu-->
           <?php 
           for($i=0;$i<count($listconv);$i++)
           {
               ?>
           <a id="conv" onclick="getIdConv('<?php echo $listconv[$i]['idconv'] ;?>');" ><?php echo  $listconv[$i]['libellepresta']." ".$listconv[$i]['nbmess']."messages non lu"; ?></a> 
           <?php
           }
           ?>
      </div> 
      <div class="la_conv">  
              <!-- le ajax recevra la liste des discussion et les affichera ici -->
      </div> 
      </div>
    <?php
      include '../vues/v_footer.html';
   ?>

   </body>
 </head>
</div>

   <!--pour actualiser toutes les conversations--> 
   <script type="text/javascript" language="javascript" src="js/ajax_actu_conv.js"></script> 
   <!--pour afficher la conversations,  les messages quand il clique sur une conversation-->
   <script type="text/javascript" language="javascript" src="js/ajax_affich_mess.js"></script> 

