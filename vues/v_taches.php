<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../vues/v_eventmenu.php';
?>
<H3>les taches a faire...</H3>


<div class="wrapper-menutache">
  <div class="vertical-menu">
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
    <?php
// nous permet de boucler sur toutes les id des familles, si l'id des famillles est
//  egale au id des cles etrangere des taches alors on affichera
for($i=0;$i<count($tblFamille);$i++)
{
 ?>   
    <h5><?php echo $tblFamille[$i]['libelle']; ?></h5>
   <a href="ajouterTache-<?php echo $tblFamille[$i]['id'] ;?>">Ajouter une tache</a>
        <table class="table table-bordered">
          <tbody>
            
             
                  <?php
    for($j=0; $j<count($tblTaches);$j++)
    {
        if($tblTaches[$j]['idFamille']==$tblFamille[$i]['id'])
        { ?><tr>
                <td>
                <!-- Default unchecked -->
              
                   
                    <label class="custom-control-label" for="defaultUnchecked" > <?php echo $tblTaches[$j]['libelle'];?> </label>
           

                </td>
                 <td class="listtache"><a href="edittaches-<?PHP echo $tblTaches[$j]['id'];?>">
                         <button type="button" name="" class="btn btn-info"><i class="fa fa-angle-double-right"></i></button>
                     </a>
                 </td> 
                   <td><a href="supprimertache-<?php echo $tblTaches[$j]['id'];?>">
                           <SPAN class="glyphicon glyphicon-ok">voila qu'est ce que je met, une case ????</SPAN>
                                   <!--<button type="button" name="" class="btn btn-danger">-->
                                 <!--</button>-->
                       </a></td>
        </tr>
        <?php
        } ?>
               <?php
    }
    ?>
                   
          </tbody>
        </table>
<?php
}
        ?>
        
</div>
</div>
<?php
  include '../vues/v_footer.html'; 
?>

<script type="text/javascript" src="js/tacheFait.js"></script>