<?php

  require '../model/req.php';
  require '../model/functions.php';

  $cnx = RequeteSQL::activeCnx();

  $idFamille = $_GET['idF'];
  $tblFamille = RequeteSQL::getAllFamille($cnx);
  $laFamille = RequeteSQL::getLaFamille($cnx, $idFamille);

  if(isset($_POST['inputNewTache']))
  {
    $idFamille = $_POST['inputFamille'];
    $nom = addslashes($_POST['inputNom']);
    $echeance = $_POST['inputDate'];
    $description = addslashes($_POST['inputDescription']);
    $avancement = $_POST['inputAvancement'];

    //pour gerer le fait ou pas
    if ($avancement == 100 OR isset($_POST['inputFait']))
    {
      $fait = 1;
      $avancement = 100;
    }
    else
    {
      $fait = 0;
    }

    if (!empty($idFamille) AND !empty($nom) AND !empty($echeance) AND !empty($description))
    {
      $insertTache = RequeteSQL::insertTache($cnx, $nom, $echeance, $description,$avancement, $fait, $idFamille);
      header("Location: c_app.php?idF=$idFamille");
    }
    else
    {
      echo "<p style='color:red;'>Erreur, remplissez tous les champs !</p>";
    }


  }

  require '../view/v_newTache.php';

?>
