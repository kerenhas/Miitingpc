<?php

/**
 * page qd il clique dans le menu avec l'ensemble des prestations
 * pour qu'il puissent choisir l'intitule de la prestaion qu'il veut selectionne
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
//  session_start();

  include '../vues/v_prestation_accueil.php'; 

