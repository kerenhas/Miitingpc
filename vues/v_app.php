<?php require 'v_head.php'; ?>

<div class="divCenter">

    <h1>To do List</h1>

    <form class="" action="../controller/c_app.php" method="post">

      <select class="selectFamille" name="inputFamille">
        <?php
          // si l'id est à 0 c'est que l'utilisateur n'a pas sélectionné une nouvelle famille
          // si il est différent de 0 on affiche la famille sélectionnée
          if($idF != 0)
          {
            ?><option value="<?php echo $laFamille['idFamille']; ?>"><?php echo $laFamille['libFamille']; ?></option><?php
          }
          else
          {
            ?><option value="">Choisir une famille</option><?php
          }

          // on parcours le tableau de famille
          foreach ($tblFamille as $f)
          {
            ?><option value="<?php echo $f['idFamille']; ?>"><?php echo $f['libFamille']; ?></option> <?php
          }

        ?>
      </select>

      <!--<button type="submit" name="button" class="btn btn-success">Voir</button> <a href="../controller/c_famille.php">Gestion des Familles</a>-->

      <table class="table table-hover tableauTache" style="width:50%;">
        <thead>
          <tr>
            <th></th>
            <th>Nom</th>
            <th>Echéance</th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <?php

            if ($tblTache != null)
            {
              foreach ($tblTache as $indice => $t)
              {
                ?>
                <tr>
                  <td><?php $indice = $indice + 1; echo $num[$indice]; ?></td>
                  <td><?php echo $t['libTache']; ?></td>
                  <td><?php echo fonctionsUtils::changeFormatFr($t['echeance']); ?></td>
                  <td><?php if($t['fait'] == 0){echo "A faire";}else{echo "Fait";} ?></td>
                  <td><a href="../controller/c_editTache.php?id=<?php echo $t['idTache']; ?>"><button type="button" name="" class="btn btn-info"><i class="fa fa-angle-double-right"></i></button></a></td>
                  <td><a href="../controller/c_delTache.php?id=<?php echo $t['idTache']; ?>"><button type="button" name="" class="btn btn-danger"><i class="fa fa-times" aria-hidden="true"></i></button></a></td>
                </tr>
                <?php
              }
            }
            else
            {
              ?><td>Aucune Tâche</td> <?php
            }

          ?>

        </tbody>
      </table>

      <?php

//      if($idF != 0)
//      {
//        ?>
      <!--<a href="../controller/c_newTache.php?idF=<?php // echo $laFamille['idFamille']; ?>"><button type="button" name="" class="btn btn-primary">Ajouter une tâche</button></a>--><?php
//      }

      ?>

    </form>

</div>


<?php require 'v_footer.php'; ?>
