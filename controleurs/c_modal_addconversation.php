<?php

/* 
 * Quand on ecrit un nouveau message pour la premiere fois
 * creation d'une nouvelle 
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
// session_start();

 if(!isset($_SESSION['nom'])) // si il est pas connecter
{
    echo '<script type="text/javascript">window.alert("Pour contacter le prestataire, veuillez vous connecter svp");</script>'; 
    include '../vues/v_connexion.php';
} 
else {
    /*
    // Remplir prealablement le formulaire 
    // requete qui permet de chercher le mail
        $tabmail=$pdo->getMail($_SESSION['id']);
       $mail=$tabmail[0]['mail'];
        // requete qui permet de chercher le libelle 
        $tabdate=$pdo->getLibelleEvent($_SESSION['idevent']);
        $date=$tabdate[0]['date'];
        $typeevent=$tabdate[0]['typeevent'];    

        
}
*/
if(isset($_POST['nouvelleconnexion']))
{
     //on met la fenetre pour enregistrer la nouvelle conversation
// include '../vues/v_modal_addconversation.php';

$idpresta=$_POST['idpresta'];
    //$idpresta= $_GET['idpresta'];
    //requete qui va chercher la conv en fonction du prestataire contacter, de l'utilisatezur et de l'evenement
    $tabconv=$pdo->getconv($_SESSION['id'], $_SESSION['idevent'],$idpresta);
    
    // si le tableau est vide alors une nouvelle conversation est creer 
    if(empty($tabconv))
    {
            //creer une nouvelle conversation
      // idutilisateur, idprestataire, idlastmessage

      $pdo->newConv($_SESSION['id'],$idpresta,$_SESSION['idevent']);

     // on recupere l'idcov
      $idconv=$pdo->getidconv($_SESSION['id'],$idpresta,$_SESSION['idevent']);


      //enregistrer le message dans la table message
      //    idmessage, text, date, heure, lu, 
     //  echo $_POST['message'];

     // pour connaitre le type de l'evenement
       $idtypeevent=" ";
       if($_POST['event']=='corpo')
       {
           $idtypeevent="2";

       }
       if($_POST['event']=='anniv')
       {
           $idtypeevent="1";
       }
       if($_POST['event']=='mariage')
       {
           $idtypeevent="3";
       }
       //requete qui insere le message a la base de donne
       try{
             $pdo->newMessage($_POST['message'],$idconv[0]['idconv'],$_SESSION['id'],$idpresta);
       } catch(Exception $e) {
            echo $e->getMessage();
       }
       //envoyer un mail au receveur (ici le prestataire ) pou le prevenir du message

       //recuperer le mail du prestataire
       $mailpresta=$pdo->getMailPresta($idpresta);

       // envoie du mail
       $to      = $mailpresta[0]['mail'];
       $subject = 'Demande de prestation ';
       $message = 'Bonjour, vous venez de recevoir une demande de prestataion, allez sur miiting pour plus de detail';
       $headers = array(
           'From' => 'nepasrepondre@gmail.com',
           'Reply-To' => 'miiting@gmail.com',
           'X-Mailer' => 'PHP/' . phpversion()
       );

       //mail($to, $subject, $message, $headers);
    
       header('Location: prestation');
    }
    else
    {
            // si non on le renvoit a la page de messagerie du prestataire concerne
         echo '<script type="text/javascript">window.alert("Vous avez deja une conversation avec ce prestataire pour cet evenement ");</script>'; 
       
         // on recupere l'idcov
      $idconv=$pdo->getidconv($_SESSION['id'],$idpresta,$_SESSION['idevent']);

           //requete qui insere le message a la base de donne
           try{
            $pdo->newMessage($_POST['message'],$idconv[0]['idconv'],$_SESSION['id'],$idpresta);
      } catch(Exception $e) {
           echo $e->getMessage();
      }

        // include '../controleurs/c_messagerie.php';
         header('Location: prestation');
       
    }
    
   
   // include '../controleurs/c_prestation.php';
}

}
 