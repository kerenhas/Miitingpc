<?php

/* page de connexion
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
    </head>
    <body class="back-form"> 
         <div id="container-insc">
            <!-- zone de connexion -->
            <a class="ctr" href="index" style="padding: 28%;">
                <img alt="Logo_miiting" src="logo.png"  style="width: auto; height: 60px;" alt="" > </a>
            <br><br>
            <form id="form-connexion" action="connexion-2" method="POST">
                <h1 id="hh">Connexion</h1>
                
                <label><b>Mail d'utilisateur</b></label>
                <input type="text" placeholder="Entrer le mail d'utilisateur" name="email" required>
                <!--<input type="email" placeholder="Entrer votre email" name="email" required>-->

                <label><b>Mot de passe</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" required>

                <input type="submit" id='submit' value='LOGIN' >
                <?php
                if(isset($_GET['erreur'])){
                    $err = $_GET['erreur'];
                    if($err==1 || $err==2)
                        echo "<p style='color:red'>Utilisateur ou mot de passe incorrect</p>";
                }
                ?>
                <a class="ctr" id="gris" style="margin: 90px;">Mot de passe oublié ?</a><br><br>
                <p id="gris"> Vous êtes un professionnel ?</p> 
                <a href="entreprise">Accès entreprises</a>

                
                        <div class="wrapper-inscription">  
           <img src="img3.jpeg" alt="" class="ctr" style="height: 100%; width: 100%; ">
           <div class="wrapper-inscriptionform">
               <h2 class="ctr" >Inscription</h2> 
                
                 <div class="wrapper-inscriptionnom">
<!--                   <div  class="form-group">
                      <label style="margin-left: 2%" >Nom :</label>
                      <input  style="margin-left: 2%" type="nom" class="form-control" id="nom" name="nom"  value="<?php //echo $nom ?>">
                    </div> -->
                <div style="margin-left: 2%" class="form-group wrapper-inscriptionnomm">
                      <label for="email">Nom:</label>
                        <input type="email" class="lifne form-control" id="email" name="nom" value="<?php //echo $nom ?>">
                </div>
<!--                    <div style="margin-left: 10%" class="form-group">
                   
                      <label style="margin-left: 2%">Prénom :</label>
                      <input style="margin-left: 2%" type="prenom" class="form-control" id="prenom"  name="prenom" value="<?php //echo $prenom ?>">
                    </div> -->

                <div style="margin-left: 2%" class="form-group wrapper-inscriptionnomm">
                      <label for="email">Prénom:</label>
                        <input type="email" class="form-control" id="email" name="prenom" value="<?php// echo $prenom ?>">
                </div>
               

                <div style="margin-left: 2%" class="form-group wrapper-inscriptionmail">
                      <label for="email">Email:</label>
                        <input type="email" class="form-control" id="email" name="email" value="<?php //echo $email ?>">
                </div>
                <div style="margin-left: 2%" class="form-group wrapper-inscriptiontelmdp">
                      <label for="telephone">Téléphone:</label>
                        <input  class="form-control" id="tel"  name="tel" value="<?php // echo $tel ?>">
                </div>
                <div style="margin-left: 2%" class="form-group wrapper-inscriptiontelmdp">
                      <label for="mdp">Mot de passe :</label>
                        <input type="mdp" class="form-control" id="mdp"  name="mdp" value="<?php // echo $mdp?>">
                </div>              
                <div style="margin-left: 2%" class="custom-control custom-checkbox">
                    <input type="checkbox" class="custom-control-input" id="condition" name="condition">
                    <label class="custom-control-label" for="condition"  >Accepter les conditions générales <a href='legal'> d'utilisation</a></label>
                </div>
               <button type="submit" class="btn btn-info">Soumettre</button>
                <!--<p class="ctr"  style="color: #269abc;"><input type="submit" value="Soumettre"></p>-->    
                <p class="ctr" style="margin-left: 2%">Déjà inscrit(e) ? <a href="connexion">Accédez</a>   </p>
           </div>
          
        </div>

            </form>
        </div>
    </body>
</html>
