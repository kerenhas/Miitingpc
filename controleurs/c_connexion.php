<?php

/* page qui permet aux utilisateurs de se connecter
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

include '../model/class.pdomiiting.php'; 
include '../model/fct.inc';
$pdo =  PdoMiiting::getPdoMiiting();
$form=$_GET['form'];
if($form=="2")
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  if($email !== "" && $password !== "")
  {
   try
     {
     $visiteur = $pdo->getInfosVisiteur($email, $password);//dans variable visiteur ya un tableau avec les infos id, nom et prénom
     } catch (Exception $ex) 
     {
      die('Erreur : '.$e->getMessage());
     }
     if (!is_array($visiteur)) // si le mot de passe est incorecte
        {
      ajouterErreur('Login ou mot de passe incorrect');
        include '../vues/v_erreurs.php';
        }
     else // si le mot de passe est correcte 
        {
         $id = $visiteur['id'];
         $nom = $visiteur['nom'];
         $prenom = $visiteur['prenom'];
         //chercher quelle est l'id de l'evenement le plus recent 
         //ensuite l'envoyer pr qu'il soit dans la clee de session
         $idevent=$pdo->getideventrecent($id);
       
      $idevent= $idevent[count($idevent)-1]['id'];
         connecter($nom, $prenom, $id,$idevent);
       header('Location: index');//permet de renvoyer a une page avec les données existantes

        
  //           $_SESSION['username'] = $username;
        
        }
 }else
 {
 header('Location: login.php?erreur=2'); // utilisateur ou mot de passe vide
 }
}
include '../vues/v_connexion.php';