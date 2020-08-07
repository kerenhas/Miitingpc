<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Ajoute le libellé d'une erreur au tableau des erreurs
 *
 * @param String $msg Libellé de l'erreur
 *
 * @return null
 */
function ajouterErreur($msg)
{
    if (!isset($_REQUEST['erreurs'])) {
        $_REQUEST['erreurs'] = array();
    }
    $_REQUEST['erreurs'][] = $msg;
}
/**
 * Détruit la session active
 *
 * @return null
 */
function deconnecter()
{
    session_destroy();
}

 
/**
 * Enregistre dans une variable session les infos d'un visiteur
 *
 * @param String $idVisiteur ID du visiteur
 * @param String $nom        Nom du visiteur
 * @param String $prenom     Prénom du visiteur
 *
 * @return null
 */
function connecter($nom, $prenom, $id, $idevent)
{
    session_start();
    $_SESSION['id'] = $id;//on met les variables dans la superglobale que fait on de nos 4 variables est ce qu'elles sont vides ou bien elles  rentrent dans la superglobale????????
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
    $_SESSION['idevent'] = $idevent;

}
/**
 * Enregistre dans une variable session les infos d'un visiteur pour le premier connexion sans avoir d'evenement
 *
 * @param String $idVisiteur ID du visiteur
 * @param String $nom        Nom du visiteur
 * @param String $prenom     Prénom du visiteur
 *
 * @return null
 */

function connecterfirst($nom, $prenom, $id)
{
    session_start();
    $_SESSION['id'] = $id;//on met les variables dans la superglobale que fait on de nos 4 variables est ce qu'elles sont vides ou bien elles  rentrent dans la superglobale????????
    $_SESSION['nom'] = $nom;
    $_SESSION['prenom'] = $prenom;
   

}
function envoieMail($mail)
{
    $to      = $mail;
$subject = 'Notification Miiting';
$message = 'Bonjour, vous avez un nouveau message sur miiting';
$headers = array(
    'From' => 'webmaster@example.com',
    'Reply-To' => 'webmaster@example.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
}