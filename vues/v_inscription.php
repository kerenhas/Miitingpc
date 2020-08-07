<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

?>

<html>
    <head>
       <meta charset="utf-8">
        <!-- importer le fichier de style -->
        <link rel="stylesheet" href="fichier.css" media="screen" type="text/css" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<!--        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>-->
    </head> 
    <body style="background-image: url(images_miiting/images_connexion/photo_page.jpeg); -webkit-background-size: cover; /* pour anciens Chrome et Safari */
  background-size: cover; /* version standardisée */">
    <div id="container-insc">
            <!-- logo -->
           <a class="ctr"href="index" ><img alt="Logo_miiting" src="logo.png"  style="width: auto; height: 60px;top: 10%;left: 45%;position: absolute;" alt="" > </a>   
            <br><br>
            <!-- formulaire d'inscription -->
         <form method="post" id="form-connexion"  action="inscription" >
          <div class="wrapper-inscription">  
           <img src="images_miiting/images_inscription/inscrivez_vous.jpeg" alt="" class="ctr" style="height: 100%; width: 100%; ">
           <!--<div class="wrapper-inscriptionform">
               <h2 class="ctr" >Inscription</h2> 
                <div  class="form-group wrapper-inscriptionmail">
                      <label  for="email">Nom:</label>
                      <input  style="margin: auto"  type="text" class="lifne form-control" id="email" name="nom" value="<?php //echo $nom ?>">
                </div>

                <div  class="form-group wrapper-inscriptionnomm">
                      <label for="email">Prénom:</label>
                        <input  style="margin: auto" class="form-control" id="email" name="prenom" value="<?php// echo $prenom ?>">
                 </div>

                <div  class="form-group wrapper-inscriptionmail">
                      <label  for="email">Email:</label>
                        <input  style="margin: auto" type="email" class="form-control" id="email" name="email" value="<?php// echo $email ?>">
                </div>
                <div  class="form-group wrapper-inscriptiontelmdp">
                      <label  for="telephone">Téléphone:</label>
                        <input  style="margin: auto"  class="form-control" id="tel"  name="tel" value="<?php //echo $tel ?>">
                </div>
                <div  class="form-group wrapper-inscriptiontelmdp">
                      <label for="mdp">Mot de passe :</label>
                        <input  style="margin: auto"  type="mdp" class="form-control" id="mdp"  name="mdp" value="<?php //echo $mdp?>">
                </div>              
                <div style="margin-left: 2%" class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="condition" name="condition">
                    <label class="custom-control-label" for="condition"  >Accepter les conditions générales <a href='legal'> d'utilisation</a></label>
                </div>
               <button style="margin: auto;margin-top: 0%;" type="submit" class="btn btn-info">Soumettre</button>
             
                <p class="ctr" >Déjà inscrit(e) ? <a href="connexion-1">Accédez</a>   </p>

           </div>
 -->       
 <div>
   <!-- mettre une div qui permet de mettre tous les nom d'un cote et les input de l'autre , de sorte que ts est aligne-->
        <div class="wrapper-inscription-aligne">
        <!-- nom -->
        <label  for="nom" class="insci-label">Nom:</label>
        <input  style="margin: auto"  type="text" class="lifne form-control" id="email" name="nom" value="<?php echo $nom ?>">

        <!-- prenom -->
        <label for="prenom"  class="insci-label">Prénom:</label>
        <input  style="margin: auto" class="form-control" id="email" name="prenom" value="<?php echo $prenom ?>">
        
        <!-- mail -->
        <label  for="email"  class="insci-label">Email:</label>
        <input  style="margin: auto" type="email" class="form-control" id="email" name="email" value="<?php echo $email ?>">
   
        <!-- telephone -->
        <label  for="telephone"  class="insci-label">Téléphone:</label>
        <input  style="margin: auto"  class="form-control" id="tel"  name="tel" value="<?php echo $tel ?>">

        <!-- Mot de passe -->
        <label for="mdp"  class="insci-label">Mot de passe :</label>
        <input  style="margin: auto"  type="mdp" class="form-control" id="mdp"  name="mdp" value="<?php echo $mdp?>">
     
      </div>

      <!-- accepeter les conditions de miiting -->
      <div style="margin-left: 2%" class="custom-control custom-checkbox">
              <input type="checkbox" class="custom-control-input" id="condition" name="condition">
              <label class="custom-control-label" for="condition"  >Accepter les conditions générales <a href='legal'> d'utilisation</a></label>
      </div>
      <!-- bouton d'inscrire -->
          <center><button style="margin: auto;margin-top: 7%;margin-bottom: 3%;" type="submit" class="btn btn-info" name="inscription" id="inscription">Inscription</button></center>
           
      <p class="ctr" >Déjà inscrit(e) ? <a href="connexion-1">Accédez</a>   </p>

        </div>
  </form>
   </div>
    </body>
</html>
