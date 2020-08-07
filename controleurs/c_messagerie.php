<?php

/* 
 * page pour que des que l'utilisateur clique sur nous contacter d'un prestataire
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();

$event=$pdo->getimg($_SESSION['idevent']);

//verifier que l'utilisateur est bien connecter quand il clique sur un "contacter" d'un prestataire
 if (!isset($_SESSION['nom'])) // si il est pas connecter
{
    echo '<script type="text/javascript">window.alert("Pour accéder à votre evenement, veuillez vous connecter..");</script>'; 
    include '../vues/v_connexion.php';
}
else
{  

  
    //faire une requete pour avoir l'ensemble des noms des prestataires contactes en fonction de l'evenement et de l'utilisateur
    $tabprestaconv=$pdo->getprestaconv($_SESSION['id'], $_SESSION['idevent']);

$listconv=array();

setlocale(LC_TIME, "fr_FR", "French");


//requete pour avoir toutes les conversation quand c'est lui le receveur 
$message=$pdo->getMessageRecu($_SESSION['id'], $_SESSION['idevent']);


//requete qui calcule le nombre de messages recus
 $nbrMessagesRecus=$pdo->getNbrMessagesRecus($_SESSION['id'], $_SESSION['idevent']); 


//requete qui permet d'avoir le nombre de messages envoyes
 $nbrMessagesEnvoyes=$pdo->getNbrMessagesEnvoyes($_SESSION['id'], $_SESSION['idevent']);

 //requete pour avoir la liste des prestataires que l'utilisateur peut contacter 
$prestataires=$pdo-> getPrestataire();


 if(count($nbrMessagesRecus)<>0){
    include '../vues/v_messagerieeli.php'; 
 }else{
    include '../vues/v_messagerie_no_mess.php';   
    //include '../vues/v_messagerie_send_mess.php'; 
 }

 
if(isset($_POST['nouvelleconnexion']))
{

    $idpresta=$_POST['idpresta'];
    // TODO AJOUTER UN OBJET 
    $pdo->newConv($_SESSION['id'],$idpresta,$_SESSION['idevent'],$_POST['objet']);

    
     // on recupere l'idcov
     $idconv=$pdo->getidconv($_SESSION['id'],$idpresta,$_SESSION['idevent'],$_POST['objet']);

    

    //   requete qui insere le message a la base de donne
      try{
        $pdo->newMessage($_POST['message'],$idconv[0]['idconv'],$_SESSION['id'],$idpresta);
        } catch(Exception $e) {
            echo $e->getMessage();
        }

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

}

}