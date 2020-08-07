<?php

/* 
 * Page pour l'inscription d'une page sur le ite Miiting
 * @author Keren Hassan 
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
// session_start();

//On va faire une requete pour avoir la liste des intitules de prestations proposes : 
 $prestationIntitule=$pdo->getPrestationIntitule();

 // requetes pour avoir les questions frequentes
 $questions = $pdo->getQuestionsIntitule();

 //Quand il clique sur le bouton
 if (isset($_POST['enregistrer']))
 {
        //Requete qui enregistre le noouveau prestataire 
        $tact=$pdo->InsertNewPrestataire($_POST['mail'],$_POST['mdp'],$_POST['libelle'],$_POST['ville'],$_POST['adr'],$_POST['siret'],$_POST['coco'],nl2br($_POST['description']),$_POST['presta'],$_POST['cont_nom'],$_POST['cont_email'],$_POST['cont_tel'],$_POST['contact'],$_POST['tarifs']);

        //chercher l'id du prestataire
        $idpresta=$pdo->getCnxPresta($_POST['mail'],$_POST['mdp']);

       //  avec l'id du presta  _ requete pour l'inserer les repondes du fact 
       for($i=1;$i<5;$i++)
       {
              if(!empty($_POST["question$i"]))
              {
                     $pdo->insertFaq($idpresta[0]['id'],$i, $_POST["question$i"]);
              }
              
       }

        //Mettre son id dans une session
       //   $_SESSION['id']= $idpresta[0]['id'];

        //Envoie faire la page d'accueil
       //   header('Location: controleurs/c_accueilEntreprise.php');

       // verification de l'adresse mail

       $to = $_POST['mail'];
       $subject = 'Inscription Miiting';
       $message = '<html>';
       $message .= '<head><title>Mail de confirmation</title></head>';
       $message .= '<body> ';
       $message .= '<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSQhKdbAMCMqOUesnAL49UQ0UDdTFELgxPEgxkYXJAqtlEMJnEG&usqp=CAU" alt="logo miitig"></center>'.
       $_POST['libelle'].'

       <br><br>Vous venez de vous inscrire sur le site de Miiting et nous vous en remercions.<br>
       Afin de confirmer cette inscription, merci de bien vouloir cliquer sur le lien suivant: <a href="https://www.miiting.net/controleurs/c_activation_entreprise.php?mail='.$_POST['mail'].'&id='.$idpresta[0]['id'].'" >ici </a>
       ';
       $message .= '<br><br>A bientôt dans votre espace,<br>';
       $message .= "<strong>L'équipe MIITING</strong>";
       $message .= '</body></html>';


       $headers ='From: "Miiting"<adresse@fai.fr>'."\n";
       $headers .='Reply-To: adresse_de_reponse@fai.fr'."\n";
       $headers .= 'MIME-Version: 1.0'."\n"; 
       $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";

       $headers .='Content-Transfer-Encoding: 8bit';

       mail($to, $subject, $message, $headers);     


         
       echo '<script type="text/javascript">window.alert("Pour finaliser votre inscription, confirmez votre mail");</script>'; 
       


 }

include '../vues/v_inscription_entreprise_1.php';
?>