<?php

/* 
 * Page qui enregistre le message envoyer
 * envoie un mail au receveur 
 * et recharge la page de v_conversation
 * @author Keren Hassan
 */

require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
// session_start();
include '../model/fct.inc';
  
//message inserer 
$text = nl2br($_POST['message']);

   //idconversation
$idconv=$_POST['idconv'];

//si le texte n'est pas remplie
if($_POST['message'] == NULL)
{
   echo "Veuillez remplir le message";
}
else
 {
 
    //idenvoyeur
    $idenvoyeur = $_SESSION['id'];
    
    $idreceveur = $pdo->getIdEnvoyeur($idconv,$idenvoyeur);
    // si $idreceveur est vide ca veut dire qu'il a jamais envoye de message donc 
    // on va faire une autre requete pour avoir du coup l'envoyeur des autres messages 
    if(count($idreceveur)==0)
    {
        $idreceveur =$pdo->getIdReceveur($idconv,$idenvoyeur);
    }
    
    
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
/*
    //requete qui recupere l'id du receveur, grace a l'id de la conversation et l'idutilisatuer
    $idreceveur = $pdo->getIdEnvoyeur($idconv,$idenvoyeur);
var_dump($idreceveur);
    //Requete qui renregsite un nouveaux messages
    $pdo->newMessage($text,$idconv,$idenvoyeur,$idreceveur[0]['receveur']);

    //Requete pour voir si le receveur est prestataire
    $mail=$pdo->getMailPresta($idreceveur[0]['receveur']);
    //si le tableau est vide ca veut dire que le receveur est client et nn ps prestataire
    if(empty($mail))
    {
        //Alors il est utilisateur du coup on cherche son mail chez les utilisateurs
        $mail=$pdo->getMailUtilisateur($idreceveur[0]['receveur']);
    }
    */
 }
  //Nous permet, que des qu'on envoie un message , ils'affiche avec les autres et ensuite y'a de nouveau le texte vide
 //requete qui recuperer les messages en fonction de la date 
$tabmess=$pdo->getmess($idconv);
//Recuperer le nom de l'utilisateur
$nomreceptio = $pdo->getNomReceptioniste($idconv,$_SESSION['id']);
?> 

<form action="conversation" method="POST">
    <div id="messages" class="messages">

    <div style="padding: 1%; border:1px dotted grey;">
    <?php
    /*
    // le premier message
     echo ucfirst($tabmess[0]['mess'])." le ".$tabmess[0]['date']." a ".$tabmess[0]['heure'] ;?>
     </div>
     <!--possibiliter d'ecrire un message-->
     <div class="form-group">
        <textarea class="form-control" id="envoyermess" name="envoyermess" rows="3" placeholder="Ecrivez un message"></textarea>
     </div>
     <button type="button" class="btn btn-light"   name="envoyer" id="envoyer" >Envoyer</button><br><br>
     <?php
    for($i=1;$i<count($tabmess);$i++)
    {
        ?>
    <div style="  border:1px dotted grey;">
     <?PHP
        echo ucfirst($tabmess[$i]['mess'])."<br>"." le ".$tabmess[$i]['date']." a ".$tabmess[$i]['heure'] ;?><br>
    </div>
    <?php
    }
    */
    ?>
        <?php
    // le premier message
 echo ucfirst($tabmess[0]['mess']);
        ?> <div style="margin-left: 74%;"><?php echo "de" ;
        if($tabmess[0]['envoyeur']==$_SESSION['id'] )
        {
            echo " vous";
            
        }
        else{
            echo $nomreceptio[0]['libelle'];
        }
        echo " à ";
        if($tabmess[0]['receveur']==$_SESSION['id'] )
        {
            echo "vous ";
        }
        else {
           echo $nomreceptio[0]['libelle'];
     }
              echo" le ".$tabmess[0]['date']." a ".$tabmess[0]['heure'] ;?><br></div>
        
     </div>
     <!--possibiliter d'ecrire un message-->
     <div class="form-group">
        <textarea class="form-control" id="envoyermess" name="envoyermess" rows="3" placeholder="Ecrivez un message"></textarea>
     </div>
     <button type="button" class="btn btn-light"   name="envoyer" id="envoyer" >Envoyer</button><br><br>
     <?php
    for($i=1;$i<count($tabmess);$i++)
    {
        ?>
    <div style="  border:1px dotted grey;">
     <?PHP
        echo ucfirst($tabmess[$i]['mess']);
        ?> <div style="margin-left: 74%;"><?php echo "de" ;
        if($tabmess[$i]['envoyeur']==$_SESSION['id'] )
        {
            echo " vous";
            
        }
        else{
            echo $nomreceptio[0]['libelle'];
        }
        echo " à ";
        if($tabmess[$i]['receveur']==$_SESSION['id'] )
        {
            echo "vous ";
        }
        else {
           echo $nomreceptio[0]['libelle'];
     }
              echo" le ".$tabmess[$i]['date']." a ".$tabmess[$i]['heure'] ;?><br></div>
        
    </div>
    <?php
    }
    ?>
   </div>
   <div class="resultat" id="resultat">
   </div>
           <!--on met un champ cache pour avoir l'idconversation-->
   <input id="idconv" name="idconv"  type="hidden" value="<?php echo  $tabmess[0]['idconversation'] ?>">

</form>

<!-- permet l'envoie d'un noveau message -->
  <script type="text/javascript" language="javascript" src="js/ajax_envoiemess.js"></script> 
 
