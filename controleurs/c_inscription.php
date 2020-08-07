<?php

/* 
 * Page d'inscription pour un utilisateur.
 * Requete qui permet de recuperer les donnes du formuliare plus envoyer le mail et enregistrer l'utilisateur ns la bdd
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
include '../model/fct.inc';


$nom=" ";
$prenom=" ";
$email=" ";
$tel=" ";
$mdp=" " ;

 if (isset($_POST['inscription']))
 {
   //verifier que ts les champs sont remplis
   $nom=$_POST['nom'];
   $prenom=$_POST['prenom'];
   $email=$_POST['email'];
   $tel=$_POST['tel'];
   $mdp=$_POST['mdp'];
//verification que les informations ont bien ete saisit
if( empty($_POST['nom'])|| empty($_POST['prenom'])|| empty($_POST['email'])|| empty($_POST['mdp']))
 {
   echo '<script type="text/javascript">window.alert("Veuillez saisir les informations  svp");</script>'; 

 }
 // verification pour les conditions ou envoie de la requete
 else
 {
     //on peut lancer la requete
   if(isset($_POST['condition']))
     {
//          try
//            {

//             // envoyer le mail de confirmation d'email 

//             // renvoyer a la page d'index sans qu'il soit connecter


//             // si il a cliquer sur le lien du mail alors c'est bon 
//               // on pourra alors mettre la requete inscription pour enregister l'utilisateur a la bse de donnee

//               // comment aire pour voir si il a clier sur le lien 
//               // si c'est le cas ca envois vers une page du site avec son email et le ts 
//               // du coup si ilclique dessus on va dans un lien qui enregistre l'inscription et qui renvoit la page d'accueil

//            //    $to      = 'kerenhassan2000@gmail.com';
//            //   $subject = 'le TEST';
//             // Le message
//             /*$message = "Bonjour, vous vous êtes inscrit à Miting\r\nPour valider votre inscription cliquer sur ce lien, sinon ne répondez pas \r\n apres je le met".$_POST['prenom']." encore qq fleche";
//               $headers = 'From: kerenhassan2000@example.com' . "\r\n" .
//               'Reply-To: kerenhassan2000@example.com' . "\r\n" .
//               'X-Mailer: PHP/' . phpversion();

//               mail($to, $subject, $message, $headers);

// */

//               $to = 'kerenhassan2000@gmail.com';
//               $subject = 'le TEST';
         

//                 $message = '<html>';
//                 $message .= '<head><title>Titre du message</title></head>';
//                 $message .= '<body><p>Contenu du message. Les balises <strong>HTML</strong> peuvent être utilisée.</p></body>';
//                 $message .= '</html>';
                
//                 $headers ='From: "nom"<adresse@fai.fr>'."\n";
//                 $headers .='Reply-To: adresse_de_reponse@fai.fr'."\n";
//                 $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
//                 $headers .='Content-Transfer-Encoding: 8bit';

//                 mail($to, $subject, $message, $headers);     

//                 $message .= '<head><title>Mail de confirmation</title></head>';
//                 $message .= '<body> ';
//                 $message .= $_POST['nom'].' '.$_POST['prenom'].'
                
//                  <br><br>Vous venez de vous inscrire sur le site de Miiting et nous vous en remercions.<br>
//                 Afin de confirmer cette inscription, merci de bien vouloir cliquer sur le lien suivant: <a href="http://miitine.cluster028.hosting.ovh.net/Miiting/controleurs/c_activation.php?mail='.$_POST['email'].'&id='.$id['id'].'" >ici </a>
//                ';
//                $message .= '<br><br>A bientôt dans votre espace,<br>';
//                 $message .= "<strong>L'équipe MIITING</strong>";
//                 $message .= '</body></html>';
      
      
//                 $headers ='From: "Miiting"<adresse@fai.fr>'."\n";
//                 $headers .='Reply-To: adresse_de_reponse@fai.fr'."\n";
//                 $headers .= 'MIME-Version: 1.0'."\n"; 
//                 $headers .='Content-Type: text/html; charset="iso-8859-1"'."\n";
                
//                 $headers .='Content-Transfer-Encoding: 8bit';
       
//                 mail($to, $subject, $message, $headers);    
//              //requete qui insere le nouveau utilisateur 
//                    $inscription=$pdo->inscription($_POST['mdp'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['tel']);
//                    // il faut entrer le nm de l'utilisateur dans une session avat de l'envoyer vers la page event parsqu'il sinn il va etre renvoyer vers la conexion
//                    //donc on met le nom dans une session
//                  //recuperer son id
//                  $id=$pdo->getLatsId($_POST['email']);
//                    connecterfirst($nom, $prenom,$id[0]['id']);
//            }
//            catch(Exception $e)
//            {
//                    die('Erreur : '.$e->getMessage());
//            }
     

          try
          {

          // je fais l'inscription mais je met actif à zero
          $inscription=$pdo->inscription($_POST['mdp'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['tel']);


          //je recupere l'id de l'utilisateur et son login
          $id=$pdo->getLatsId($_POST['email']);       

          $to = $_POST['email'];
          $subject = 'Inscription Miiting';
          $message = '<html>';
          $message .= '<head><title>Mail de confirmation</title></head>';
          $message .= '<body> ';
          $message .= '<center><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcSQhKdbAMCMqOUesnAL49UQ0UDdTFELgxPEgxkYXJAqtlEMJnEG&usqp=CAU" alt="logo miitig"></center>'.
          $_POST['nom'].' '.$_POST['prenom'].'

          <br><br>Vous venez de vous inscrire sur le site de Miiting et nous vous en remercions.<br>
          Afin de confirmer cette inscription, merci de bien vouloir cliquer sur le lien suivant: <a href="https://www.miiting.net/controleurs/c_activation.php?mail='.$_POST['email'].'&id='.$id['id'].'" >ici </a>
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
          //  header('Location: index');

            //requete qui insere le nouveau utilisateur 
              //   $inscription=$pdo->inscription($_POST['mdp'],$_POST['nom'],$_POST['prenom'],$_POST['email'],$_POST['tel']);
                  // il faut entrer le nm de l'utilisateur dans une session avat de l'envoyer vers la page event parsqu'il sinn il va etre renvoyer vers la conexion
                  //donc on met le nom dans une session
                //recuperer son id
              //$id=$pdo->getLatsId($_POST['email']);
              //connecterfirst($nom, $prenom,$id[0]['id']);
          }
          catch(Exception $e)
          {
                  die('Erreur : '.$e->getMessage());
          }

         $nom=" ";
         $prenom=" ";
         $email=" ";
         $tel=" ";
         $mdp=" " ;           
        //  header('Location: index'); // permet d'acceder directement a la page evenement de l'utilisateur
     }
     else 
      {
     echo '<script type="text/javascript">window.alert("Veuillez accepter les conditions generales d utilisations svp");</script>'; 

      }

 }
 }

include '../vues/v_inscription.php';
