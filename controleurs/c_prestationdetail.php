<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//recuperation de l'URL 
 $url = $_SERVER['PHP_SELF']; 
 $reg = '#^(.+[\\\/])*([^\\\/]+)$#';
 define('url', preg_replace($reg, '$2', $url));
 //url contient la fin de l'url, comme par exemple c_prestation.php ou index.php
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();


//On recupere l'id pour faire la requete et trouve ls prestations voulu
if(isset($_GET['donne']))
{
    $id=$_GET['donne'];
}
else
{
    $id=$_GET['id'];
    
}
//on recuperer tous les prestataires

$prestataire=$pdo->getListePrestataire($id);
$libelle=$pdo->getLibellePrestataire($id);

$carspreta=$pdo->getPrestataire();

include '../vues/v_prestationdetail.php';

