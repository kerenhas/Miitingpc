<?php

  require '../model/req.php';
  require '../model/functions.php';

  $cnx = RequeteSQL::activeCnx();

  // Si l'utilisateur a sélectionné une famille on la récupère
  if(isset($_POST['inputFamille']))
  {
    if (!empty($_POST['inputFamille']))
    {
      $idF = $_POST['inputFamille'];
      $laFamille = RequeteSQL::getLaFamille($cnx,$idF);

      $tblTache = RequeteSQL::getTacheFamille($cnx, $idF);
    }
    // sinon on passe ces varibles à 0 et null
    else
    {
      $idF = 0;
      $tblTache = null;
    }
  }
  //sinon on voit si un id est passé par l'URL
  else
  {
    if (isset($_GET['idF']))
    {
      $idF = $_GET['idF'];

      $laFamille = RequeteSQL::getLaFamille($cnx,$idF);

      $tblTache = RequeteSQL::getTacheFamille($cnx, $idF);
    }
    // sinon on passe ces varibles à 0 et null
    else
    {
      $idF = 0;
      $tblTache = null;
    }
  }

  //pour avoir un compteur et afficher le numéro de la tâtche
  if($tblTache != null)
  {
    foreach ($tblTache as $indice => $t)
    {
      $indice = $indice + 1;
      $num[$indice] = $indice;
    }
  }

  $tblFamille = RequeteSQL::getAllFamille($cnx);
  require '../vues/v_app.php';

?>
