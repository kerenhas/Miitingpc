<?php

/* 
 * Quand on clique sur acces entreprise , texte explicatif, possibilite d'inscprition (le lien) et la connexion
 * @author Keren Hassan 
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();


//Recuperer la connexion, savoir si il est bien connecter quand il appuie sur le bouton de connexion
if (isset($_POST['connecter']))
{
    //on recupere ce qui a ete saisie et on verifie qu'il y a bien un utilisateur
    $tblUser=$pdo->getCnxPresta($_POST["mail"],$_POST['mdp']);
     //si $tblUser est vide ca veut dire que y'a pas d'utilistauer avc ce login est mdp
    if(empty($tblUser))
    {
        echo '<script type="text/javascript">window.alert("login ou mdp incorrecte");</script>'; 
    }else
    {
        //sinn on enregsitre dans une cle de session l'id de l'utilisateur
        $_SESSION['id']=$tblUser[0]['id'];
        header('Location: accueilEntreprise');
    }
}

// include '../vues/v_accesEntreprise.php';
include '../vues/v_acces_entreprise_connexion.php';