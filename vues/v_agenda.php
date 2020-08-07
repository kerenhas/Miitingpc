<?php
/*
*dans cette page, on aura l'ensemble des evenements auquel le prestataire participe
* @author Keren Hassan
*/
include '../vues/v_entrep_entete.php';

// Mettre un menu avec l'nsemble des evenements auquel le prestataire participe 


// quand il clique sur l'evenement il peut voir differentes chose: nom et prenom u client, date et lieu de l'evenement, 
//prix deja paye ....

// il faut aussi qu'il puisse ajouter un evenement a son agenda ( donc faire un petit formulaire) 
?>
<!-- btn qui permet de creer un nouvel evenement une fois que e contrat a ete signe-->
<form action="agenda" method="POST">
 <button type="submit" style="margin-left: 35%; " name="creer" id="creer" class="btn btn-light">Créer un evenement</button>
 </form>
<!-- menu horisontable avec le nom de tous les evenements-->
<div class="wrapper-menutache">
      <div class="vertical-menu">
           <!--faire une boucle pour avoir tous les evenements-->
           <?php 
           for($i=0;$i<count($event);$i++)
           {
               ?>
           <a id="conv" onclick="getIdConv('<?php echo $event[$i]['idevent'] ;?>');" ><?php echo  $event[$i]['nom']." ".$event[$i]['prenom']." _ ".$event[$i]['typeevent'] ; ?></a> 
           <?php
           }
           ?>
      </div> 

      <div class="event">  
              <!-- le ajax recevra la liste des discussion et les affichera ici -->
      </div> 

</div>

      <?php
      include '../vues/v_footer.html';
   ?>

   </body>
 </head>
  <!--pour afficher le detail de l'evenement-->
  <script type="text/javascript" language="javascript" src="js/ajax_affich_event.js"></script> 