<?php

/* 
 * affichage d'une conversation, avec l'ensemble des messages
 * plus la possibiliter de reenvoyer un message, et de repondre
 * @author Keren Hassan 
 */
?>
<div style="border:1px dotted blue;">
<!-- Faire une entete pour chaque conversation avec le nom de l'utilisateur, le titre de l'evenement  -->
<h3 class='ctr policeNewRoman'><?php echo $libelleEvent[0]['nomutil']." ".$libelleEvent[0]['prenomutil']." - ". $libelleEvent[0]['libtype'];?></h3>
 <!--Nom du receptioniste 
<p><?php //echo $nomreceptio[0]['libelle']; ?></p>-->
</div>
<br>
<form action="conversation" method="POST">
    <div id="messages" class="messages">

    <div style="padding: 1%; border:1px dotted grey;">
    <?php
    // le premier message
 echo ucfirst($tabmess[0]['mess']);
        ?> <div style="margin-left: 74%;"><?php echo "de" ;
        if($tabmess[0]['envoyeur']==$_SESSION['id'] )
        {
            echo " vous";
            
        }
        else{
            echo $libelleEvent[0]['nomutil']." ".$libelleEvent[0]['prenomutil'];
        }
        echo " à ";
        if($tabmess[0]['receveur']==$_SESSION['id'] )
        {
            echo "vous ";
        }
        else {
            $libelleEvent[0]['nomutil']." ".$libelleEvent[0]['prenomutil'];
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
           echo  $libelleEvent[0]['nomutil']." ".$libelleEvent[0]['prenomutil'];
        }
        echo " à ";
        if($tabmess[$i]['receveur']==$_SESSION['id'] )
        {
            echo "vous ";
        }
        else {
          echo  $libelleEvent[0]['nomutil']." ".$libelleEvent[0]['prenomutil'];
     }
              echo" le ".$tabmess[$i]['date']." a ".$tabmess[$i]['heure'] ;?><br></div>
        
    </div>
    <?php
    }
    ?>
   </div>
    <div style="position: absolute;" class="resultat" id="resultat">
   </div>
           <!--on met un champ cache pour avoir l'idconversation-->
   <input id="idconv" name="idconv"  type="hidden" value="<?php echo  $tabmess[0]['idconversation'] ?>">

</form>

<!-- permet l'envoie d'un noveau message -->
  <script type="text/javascript" language="javascript" src="js/ajax_envoiemess.js"></script> 

  