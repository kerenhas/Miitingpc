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
$voiture=$pdo->getvoitures();
$costume=$pdo->getcostume();
include '../vues/v_bmarie.php';
