<?php
/**
 * page qui recoit le formulaire lorsque c'est le premierer evenement qui vient d'etre créer
 * ou ême qd on a creer l'evenement
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
// session_start();

if(isset($_POST['enregistrer']))
{
    echo "je sis la";
    // pour connaitre le type de l'evenement
    // $idtypeevent=" ";
    // if($_POST['event']=='corpo')
    //     {
    //     $idtypeevent="2";
            
    //     }
    // if($_POST['event']=='anniv')
    //     {
    //     $idtypeevent="1";
        
    //     }
    // if($_POST['event']=='mariage')
    //     {
    //         $idtypeevent="3";
    //     }
    try
        {  
        $pdo->addevent($_POST['date'], $_POST['nbinvites'], $_POST['ville'],$_SESSION['id'],$_POST['nomevent']);
        }
    catch (Exception $ex) 
     {
      die('Erreur : '.$e->getMessage());
      }
       
    //    //il faut recuperer l'id de l'evenement, pour pouvoir enregistrer dans la table demandeclient l'id de levenement car un utilisateur peut avoir plusisuers evenement 
    //    // et faire donc plusieurs demande client
        $idevent=$pdo->getIdEvenement($_SESSION['id'], $_POST['date']);
var_dump($idevent);
        $img=$_FILES['coco']['type'];
if (strlen($img) != 0) {

    $file_name = $_FILES['coco']['name']; // le nom du fichier
                     
    mkdir("../cloud/event".$idevent[0]['id']); // on creer un dossier ou seront stques les dossiers de chq evenement
    $file_destination = '/cloud/event'.$idevent[0]['id'].'/';
    $file_url = '..'.$file_destination;

    $uploadfile = $file_url . basename($_FILES['coco']['name']);

    //S'assure que le fichier filename est un fichier téléchargé par HTTP POST. Si le fichier est valide, il est déplacé jusqu'à destination. 
    //move_uploaded_file($file_name, $file_url );
    if (move_uploaded_file($_FILES['coco']['tmp_name'], $uploadfile)) {
        echo "Le fichier est valide, et a été téléchargé
            avec succès. Voici plus d'informations :\n";
    }
    $filebdd='cloud/event'.$idevent[0]['id'].'/';
    //met dans la base de donnée le lien vers le dossier dans lequel se trouve l'image
    $pdo->updateforimg($filebdd.$_FILES['coco']['name'], $idevent[0]['id']);
          
}
              
         



    //    // on ajoute traiteur a la liste des demandes
        if(!empty($_POST['traiteur']))
        {
            $idprestation="1";
            $pdo->adddemandeclient($_SESSION['id'],$idprestation,$idevent[0]['id']);
        }
        if(!empty($_POST['Photographe']))
        {
            $idprestation="4";
            $pdo->adddemandeclient($_SESSION['id'],$idprestation,$idevent[0]['id']);
        }
        if(!empty($_POST['salle']))
        {
            $idprestation="2";
            $pdo->adddemandeclient($_SESSION['id'],$idprestation,$idevent[0]['id']);
        }
        // on envois faire la page monevenemnt avec le nouvel evenemtn comme evenement principale
        $_SESSION['idevent'] = $idevent[0]['id'];
        header('Location: event-2');
}
else
{
    include '../vues/v_noEvent.php';
}

?>