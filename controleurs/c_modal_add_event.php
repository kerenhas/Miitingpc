<?php
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
// session_start();


//enregistrer les valeurs du nouvel event dans la bdd

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

    try
    {
       
      $pdo->addevent($_POST['date'], $_POST['nbinvites'], $_POST['ville'],$_SESSION['id'],$idtypeevent,$_POST['nomevent']);
    }
    catch (Exception $ex) 
    {
     die('Erreur : '.$e->getMessage());
    }
   
    //il faut recuperer l'id de l'evenement, pour pouvoir enregistrer dans la table demandeclient l'id de levenement car un utilisateur peut avoir plusisuers evenement 
    // et faire donc plusieurs demande client
    $idevent=$pdo->getIdEvenement($_SESSION['id'], $_POST['date']);
    // on ajoute traiteur a la liste des demandes ET LES AUTREES PRESTATIONS QUIL A COCHE
    if(!empty($_POST['traiteur']))
    {
        $idprestation="1";
        $pdo->adddemandeclient($_SESSION['id'],$idprestation,$idevent[0]['id']);
    }

// Testons si le fichier a bien été envoyé et s'il n'y a pas d'erreur
    if (isset($_FILES['coco']) AND $_FILES['coco']['error'] == 0)
    {
        // Testons si le fichier n'est pas trop gros
        if ($_FILES['coco']['size'] <= 1000000)
        {
                // Testons si l'extension est autorisée
                $infosfichier = pathinfo($_FILES['coco']['name']);
                $extension_upload = $infosfichier['extension'];
                $extensions_autorisees = array('jpg', 'jpeg', 'gif', 'png');
                if (in_array($extension_upload, $extensions_autorisees))
                {
                // faire la requete qui permet d'inserer l'image dans la table evenement
                // qui permet d'inserer ts ce qu'il veut dans la table evenement et dans la table demande prestation
       
               echo $_FILES['coco']['type'];
                }
        }
    }
    
    
    //remettre dans la page mon event avec le bonne id de l'event
    // mettre le bon id dans la session puis envoyer dans la page de mon event
    
    $_SESSION['idevent'] =  $idevent[0]['id'];
//    header("Location: addevent");

    
    
    