<?php

include '../vues/v_eventmenu.php';
/* 
 * Des qu'on clique sur la famille dans le menu va s'afficher cette page avec le titre de la famille et toutes les taches de cette famille
 */

//on affiche toutes les taches avec le titre de la famille

?>


<div class="wrapper-menutache">
  <div class="vertical-menu" >
       <!--faire une boucle pour avoir toutes les familles dans le menu-->
       <?php 
       for($i=0;$i<count($tblFamille);$i++)
       {
           ?>
            <a href="detailFamille-<?php echo $tblFamille[$i]['id'] ?>" ><?php echo  $tblFamille[$i]['libelle']; ?></a> <!--mettre comme href l'id de la famille -->
       <?php
       }
       ?>
  </div> 
<div>
    <h4>Mes Taches  </h4>
   <a href="ajouterTache-<?php echo $idF ;?>">Ajouter une tache</a>
        <table class="table table-bordered">
         <tbody>
            <?php
               for($j=0; $j<count($tblTaches);$j++)
               {
             ?><tr>
                   <td>
                      <label class="custom-control-label" for="defaultUnchecked" > <?php echo $tblTaches[$j]['libelle'];?> </label>
                   </td>
                    <td class="listtache"><a href="edittaches-<?PHP echo $tblTaches[$j]['id'];?>">
                         <button type="button" name="" class="btn btn-info"><i class="fa fa-angle-double-right"></i></button>
                         </a>
                    </td> 
                     <td><a href="supprimertache-<?php echo $tblTaches[$j]['id'];?>">
                      <SPAN class="glyphicon glyphicon-ok">voila qu'est ce que je met, une case ????</SPAN>
                     </a>
                     </td>
               </tr>
                   <?php
              } ?>           
          </tbody>
        </table>

        
</div>
</div>
<?php
  include '../vues/v_footer.html'; 
?>

<script type="text/javascript" src="js/tacheFait.js"></script>

