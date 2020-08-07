<?php

  require '../model/req.php';
  require '../model/functions.php';

  $cnx = RequeteSQL::activeCnx();

  $tblFamille = RequeteSQL::getAllFamille($cnx);

  //si l'utilisateur a ajouté des nouvelles familles
  if(isset($_POST['ctrFamille']))
  {
      $nombreFamille = $_POST['ctrFamille'];

      for ($i=1; $i <= $nombreFamille; $i++)
      {
        $tblNewFamille[$i] = addslashes($_POST['inputNewFamille'.$i]);

        if (!empty($tblNewFamille[$i]))
        {
          $insertFamille = RequeteSQL::insertFamille($cnx, $tblNewFamille[$i]);
        }
      }
  }

  //pour vérifier les changements et les sauvegarder dans la base de données
  foreach ($tblFamille as $indice => $f)
  {
    if(isset($_POST['input'.$f['idFamille']]))
    {
      $nNomFamille[$f['idFamille']] = addslashes($_POST['input'.$f['idFamille']]);

      if(!empty($nNomFamille[$f['idFamille']]))
      {
        if ($nNomFamille[$f['idFamille']] != $f['libFamille'])
        {
          $updateFamille = RequeteSQL::updateFamille($cnx,$f['idFamille'],$nNomFamille[$f['idFamille']]);
        }
      }
    }
  }

  header("Location: c_famille.php");

?>
