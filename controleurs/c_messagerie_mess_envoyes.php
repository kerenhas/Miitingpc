<?php
/**
 * page qui va se charger quand on va cliquer sur messages envoyes
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();

$event=$pdo->getimg($_SESSION['idevent']);
//requete qui calcule le nombre de messages non lus 
$nbrMessagesRecus=$pdo->getNbrMessagesRecus($_SESSION['id'], $_SESSION['idevent']);

//requete qui permet d'avoir le nombre de messages envoyes
$nbrMessagesEnvoyes=$pdo-> getNbrMessagesEnvoyes($_SESSION['id'], $_SESSION['idevent']);

setlocale(LC_TIME, "fr_FR", "French");
//requete qui va chercher les messages qu'il a envoyer 
$message=$pdo->getMessageEnvoyes($_SESSION['id'], $_SESSION['idevent']);

include '../vues/v_messagerieeli.php'; 