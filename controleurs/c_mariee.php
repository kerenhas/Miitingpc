<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
$prestataire=$pdo->getPrestataire();
$bijoux=$pdo->getbijoux();
//$evjf=$pdo->getevjf(); // faire la requete
$maquicoiff=$pdo->getmaquicoiff();
$robes=$pdo->getrobes();
//include '../vues/v_mariee.php';
include '../vues/v_bmariee.php';


