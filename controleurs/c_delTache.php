<?php

  require '../model/req.php';
  require '../model/functions.php';

  $cnx = RequeteSQL::activeCnx();

  $idTache = $_GET['id'];

  $laFamille = RequeteSQL::getFamilleDeLaTache($cnx, $idTache);
  $idF = $laFamille['idFamille'];

  $deleteTache = RequeteSQL::delTache($cnx, $idTache);

  header("Location: c_app.php?idF=$idF");




?>
