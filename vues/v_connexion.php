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
    <body  style=" background-image: url(images_miiting/images_connexion/photo_page.jpeg); -webkit-background-size: cover; /* pour anciens Chrome et Safari */
  background-size: cover; /* version standardisée */"> 
         <div id="container-connexion">
            <!-- zone de connexion -->
            <a class="ctr"href="index" style="padding: 28%;"><img alt="Logo_miiting" src="logo.png"  style="width: auto; height: 60px;margin-bottom: -5%;" alt="" > </a>
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
                <a href="inscription-1" class="ctr" id="gris" style="margin: 4px;">Inscription</a><br>
                <a id="gris" href="accesEntreprise">Vous êtes un professionnel ?</a>


            </form>
        </div>
    </body>
</html>
