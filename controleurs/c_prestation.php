<?php
/**
 * page qui permet selon la prestations choisit d'afficher tous les prestataires suivants ainsi que ceux d'autres presta
 * en guise de publicites
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();

require '../model/functions.php';
$prestatations=$pdo->getPrestationIntitule();


if(isset($_GET['idprestation']))
{

            // chercher tous les prestataires de l'id
        $prestataires=$pdo->getListePrestataire($_GET['idprestation']);


            // sauf si lenght($prestatations) = id on met un 
        $idsuivant=$_GET['idprestation']+ 1; 

        if($_GET['idprestation'] == count($prestatations))
        {
            $idsuivant=1;
        }
        // on cherche les prestataires a afficher pour une autres prestations  
        $prestatairesSuivant=$pdo->getListePrestataire($idsuivant);
}
if(isset($_POST['idprestation']))
{

            // chercher tous les prestataires de l'id
        $prestataires=$pdo->getListePrestataire($_POST['idprestation']);


            // sauf si lenght($prestatations) = id on met un 
        $idsuivant=$_POST['idprestation']+ 1; 

        if($_POST['idprestation'] == count($prestatations))
        {
            $idsuivant=1;
        }
        // on cherche les prestataires a afficher pour une autres prestations  
        $prestatairesSuivant=$pdo->getListePrestataire($idsuivant);
}
        
// }else
// {
//                  // j'ai mit au hasard 1 
//                   $idpresta=2;
//                 // chercher tous les prestataires de l'id
//                 $prestataires=$pdo->getListePrestataire($idpresta);
//                 // var_dump($prestataires);
//                     // sauf si lenght($prestatations) = id on met un 
//                 $idsuivant=$idpresta + 1; 
        
//                 if($idpresta == count($prestatations))
//                 {
//                     $idsuivant=1;
//                 }
//                 // on cherche les prestataires a afficher pour une autres prestations  
//                 $prestatairesSuivant=$pdo->getListePrestataire($idsuivant);
              
// }
//pour le carousel des prestataires
$carspreta=$pdo->getPrestataire();
// include '../vues/v_prestation.php';
require '../vues/v_prestataire.php';
