<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
//  session_start();

// ce qu'il faudra faire quand y'a plusieurs evenements c'est d'afficher les differentes evenements, donc rajouter un onglet at menu "mes events" et 
// l'utilisateur choisira l'evenement qu'il voudra gerer et la 
// en fonction de ce qu'il va selectionner je choisirais l'id de l'event
// mais pour l'instatnt on fais comme ci que y'a qu'un event
// $id=$pdo->getIdEvent($_SESSION['id']);

$events=$pdo->getEvents($_SESSION['id']);


if(isset($_POST['id'])){
    // mettre l'id de l'evenement dans une cle de session pour le recuperer
   $_SESSION['idevent'] =$_POST['id'];


}
//   include '../vues/v_mesevents.php'; 
  //  include '../vues/v_evnement-prestataire.php'; 
   include '../vues/v_mesevenements.php'; 
