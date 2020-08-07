<?php include '../vues/v_entete.php';
include '../vues/v_eventmenu.php';?>

<div class="divCenter">

    <h1>Ajouter une tache</h1>

    <form class="" action="ajouterTache-<?php echo $idF ;?>" method="post">

      <table class="table table-hover" style="width:40%;">
        <tbody>
          <tr>
            <th>Nom</th>
            <td><input type="text" name="inputNom" ></td>
          </tr>
          <tr>
            <th>Echéance</th>
            <td><input type="date" name="inputDate"> </td>
          </tr>
          <tr>
            <th>Description</th>
            <td><textarea name="inputDescription" rows="6" cols="50"></textarea></td>
          </tr>
          <tr>
            <th>Fait</th>
            <td><input type="checkbox" name="inputFait" ></td>
          </tr>
          <tr>
            <th>Avancement</th>
            <td>
                <input class="range_css" type="range" name="inputAvancement" value="0" max="100" min="0" step="1">
                <!--<span class="spanAvancement"><?php // echo "( ".$tblParamTache[0]['avancement']." % )"; ?></span>-->
            </td>
          </tr>
        </tbody>
      </table>

   <input type="submit" name="inputNewTache" value="Enregistrer" class="btn btn-primary">

      <!--<p class="marg20"><a href="../controller/c_app.php?idF=<?php ?>"><button type="button" class="btn btn-light">Retour</button></a></p>-->

    </form>

</div>

<?php
  include '../vues/v_footer.html'; 
?>