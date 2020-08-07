<?php

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();

// on recupere la valeur inserer
 $_POST["search"];


// on lance une requet sql pr savoir si elle fait partie des prestataires
$prestataire=$pdo->getPrestAvecNom($_POST["search"]);

if(count($prestataire)==0)
{
    // on va chercher les infos de la prestation voulus et on envois vers la page prestataion avec l'id recupere
    $prestation=$pdo->getPrestationNom($_POST["search"]);
    if(count($prestation)==0)
    {
        // si nous avons pas ce qu'il a selectionner
        // on envois une pop-u pour le signaler

        //et retour a la page d'accueil
        header('Location: index');
    }else
    {
        // si il a selectionner une prestation
        header('Location: prestation-'.$prestation[0]['id']);
    }
     
}
else
{
    // on envois a la page dedié a chque prestataire
    header('Location: presentation-prestataire-'.$prestataire[0]['id']);
}
