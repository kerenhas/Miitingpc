<?php
/*
 * Fenetre qui s'ouvre quand il veut contacter un prestataire
 */
  //include '../vues/v_eventmenu.php';
?>
<link href="../styles/style_modal_addconversation.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- Trigger/Open The Modal -->
<button id="myBtn">Open Modal</button>

<!-- The Modal -->
<div id="myModal" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h4 class="policeNewRoman ctr">Contacter mettre le nom du prestataire</h4>  
               <p>Vous etes <?php  echo $_SESSION['prenom'].$_SESSION['nom']." : "; ?></p>
               <p>Remplissez ce formulaire et Le Studio Prestige Event vous contactera dans les plus brefs délais.
                   Toutes les données que vous nous soumettez seront traitées de manière confidentielle. </p>
               <!--<form action="event-2" method="post" enctype="multipart/form-data">-->
               <form action="nouvelleconversation-<?php echo $_GET['idpresta'] ;?>" method="post" enctype="multipart/form-data">
                   <div class="form-group row">
                        <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                             <input type="text" id="mail" name="mail" class="form-control" id="inputPassword" placeholder="email" value="<?php echo $mail;?>">
                         </div>
                   </div>
                   <!--mettre la date de l'evenement selon son id avant-->
                   <p>Date de l'evenement</p> <input type="date" name="date" style="margin-right: auto ;" id="date" value="<?php echo $date ;?>"> 
                   <!--type de l'evenement-->
                   <label class="radio-inline"><input type="radio" name="event" value="mariage" <?php if($typeevent = 3){ echo "checked";
                   }
                   ?>>Mariage</label>
                   <label class="radio-inline"> <input type="radio" name="event" value="anniv"  <?php if($typeevent = 1){ echo "checked";
                   }
                   ?>>Anniversaire</label>
                   <label class="radio-inline"> <input type="radio" name="event" checked value="corpo" <?php if($typeevent = 2){ echo "checked";
                   }
                   ?>>Corporate event</label>
                   
                   <!--le message-->
                   <p>Ecrivez un message</p>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="message"></textarea>
                    <!--envoyer-->
                   <button type="submit" class="btn btn-light" name="nouvelleconnexion">Enregistrer</button>
               </form>
  </div>

</div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
     <script type="text/javascript" src='js/add_conversation.js'></script>