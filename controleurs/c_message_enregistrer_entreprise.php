<?php

/**
 * permet l'enregistrement du message une fois que l'utilisatuer a clique sur envoyer
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();

$message=$_POST['message'];
$idconv=$_POST['idconv'];
$idmessage=$_POST['idmessage'];


$prestataire=$pdo->getPrestaCaract($_SESSION['id']);

//message inserer 
$text = nl2br($_POST['message']);

//si le texte n'est pas remplie
if($_POST['message'] == NULL)
{
    echo '<script type="text/javascript">window.alert("Inserer votre message");</script>'; 
}
else{
    
    //idenvoyeur
    $idenvoyeur = $_SESSION['id'];

    $idreceveur = $pdo->getIdEnvoyeur($idconv,$idenvoyeur);

       //Requete qui renregsite un nouveaux messages
       $pdo->newMessage($text,$idconv,$idenvoyeur,$idreceveur[0]['util']);
    
       //Requete pour voir si le receveur est prestataire
       $mail=$pdo->getMailPresta($idreceveur[0]['util']);
       //si le tableau est vide ca veut dire que le receveur est client et nn ps prestataire
       if(empty($mail))
       {
           //Alors il est utilisateur du coup on cherche son mail chez les utilisateurs
           $mail=$pdo->getMailUtilisateur($idreceveur[0]['util']);
       }
       
       
    //    $to = $mail[0]['mail'];
    //    $subject = 'le TEST';
  

    //      $message = '<html>';
    //      $message .= '<head><title>Titre du message</title></head>';
    //      $message .= '<body><p>Contenu du message. Les balises <strong>HTML</strong> peuvent être utilisée.</p></body>';
    //      $message .= '</html>';
         
    //      $headers ='From: "nom"<adresse@fai.fr>'."\n";
    //      $headers .='Reply-To: adresse_de_reponse@fai.fr'."\n";
    //      $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
    //      $headers .='Content-Transfer-Encoding: 8bit';

    //      mail($to, $subject, $message, $headers);     

    //      $message .= '<head><title>Mail de confirmation</title></head>';
    //      $message .= '<body> ';
    //      $message .= $_POST['nom'].' '.$_POST['prenom'].'
         
    //       <br><br>Vous avez recus un message sur miiting.<br>
    //     coonectez vous pour le lire <a href="https://www.miiting.net/connexion-1" >ici </a>
    //     ';
    //     $message .= '<br><br>A bientôt dans votre espace,<br>';
    //      $message .= "<strong>L'équipe MIITING</strong>";
    //      $message .= '</body></html>';


    //      $headers ='From: "Miiting"<adresse@fai.fr>'."\n";
    //      $headers .='Reply-To: adresse_de_reponse@fai.fr'."\n";
    //      $headers .= 'MIME-Version: 1.0'."\n"; 
    //      $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
         
    //      $headers .='Content-Transfer-Encoding: 8bit';

    //      mail($to, $subject, $message, $headers);    


       
}

//requete qui calcule le nombre de messages recus
$nbrMessagesRecus=$pdo->getNbrMessagesRecusPresta($_SESSION['id']); 


//echo $nbrMessagesRecus[0]['count(*)'];

//requete qui permet d'avoir le nombre de messages envoyes
$nbrMessagesEnvoyes=$pdo->getNbrMessagesEnvoyesPresta($_SESSION['id']);

 
// requete pour avoir le message a partir de son id
$message = $pdo->getMessageEntreprise($idmessage);

// include vers la page messagerie
include '../vues/v_messagerie_entreprise.php'; 
?>