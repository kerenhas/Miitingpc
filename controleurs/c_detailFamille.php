<?php

/* 
Des qu'on clique sur la famille dans le menu va s'afficher cette page avec le titre de la famille et toutes les taches de cette famille
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
// session_start();

//recuperation de l'id de la famille grace a l'url 
$idF=$_GET['id'];

//recuperer l'id evenement
 $id=$pdo->getIdEvent($_SESSION['id']);
 
//Requete qui va chercher l'ensemble des taches pour cette famille
$tblTaches=$pdo->getTacheFamille($idF);

// ON RECUPERE TOUTES LES FAMILLES pour le menu vertical
$tblFamille=$pdo->getAllFamille();

  include '../vues/v_detailFamille.php';  
