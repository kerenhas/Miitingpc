<?php include '../vues/v_entete.php';
include '../vues/v_eventmenu.php';?>

<div class="divCenter">

    <h1>Editer la tache</h1>

    <form class="" action="edittaches-<?PHP echo $id?>" method="post">

      <table class="table table-hover" style="width:40%;">
        <tbody>
<!--          <tr>
            <th>
              <select class="" name="inputFamille">
                <option value="<?php // echo $t1->getIdFamille(); ?>"><?php // echo $laFamille['libFamille']; ?></option>

                <?php

//                  foreach ($tblFamille as $f)
//                  {
//                    ?>
                    <option value="//<?php // echo $f['idFamille']; ?>"><?php // echo $f['libFamille']; ?></option>
                    //<?php
//                  }

                ?>
              </select>
            </th>
          </tr>-->
          <tr>
            <th>Nom</th>
            <td><input type="text" name="inputNom" value="<?php echo $tblParamTache[0]['libelle']; ?>"></td>
          </tr>
          <tr>
            <th>Echéance</th>
            <td><input type="date" name="inputDate" value="<?php  echo $tblParamTache[0]['echeance'];?>"> </td>
          </tr>
          <tr>
            <th>Description</th>
            <td><textarea name="inputDescription" rows="6" cols="50"><?php  echo $tblParamTache[0]['description'];?></textarea></td>
          </tr>
          <tr>
            <th>Fait</th>
            <td><input type="checkbox" name="inputFait" value="" <?php if( $tblParamTache[0]['fait'] != 0){echo "checked";} ?>></td>
          </tr>
          <tr>
            <th>Avancement</th>
            <td>
                <input class="range_css" type="range" name="inputAvancement" value="<?php echo $tblParamTache[0]['avancement']; ?>" max="100" min="0" step="1">
                <span class="spanAvancement"><?php echo "( ".$tblParamTache[0]['avancement']." % )"; ?></span>
            </td>
          </tr>
        </tbody>
      </table>

      <input type="submit" name="inputEditTache" value="Enregistrer" class="btn btn-primary">

      <p class="marg20"><a href="../controller/c_app.php?idF=<?php ?>"><button type="button" class="btn btn-light">Retour</button></a></p>

    </form>

</div>

<?php
  include '../vues/v_footer.html'; 
?>
<script type="text/javascript" src="js/scriptAvancement.js"></script>
