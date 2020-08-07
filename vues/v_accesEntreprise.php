<?php

/* 
 * Page de l'acces en entreprise
 */
?>
<html>
    <head>
        <title>Miiting</title>
        <meta charset="UTF-8">
       <link href="fichier.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type="text/javascript" language="javascript" src="node_modules/jquery/dist/jquery.js"></script>
    </head>
    <body>
<!-- on a deja un menu avec seulement le logo de cote -->
<nav class="navbar navbar-light bg-light navbar-expand-lg"> 
       <a href="index"><!-- Logo Image --><img alt="Logo_miiting" src="logo.png"  style="width: auto; height: 60px;" alt="" ></a>
       <p><a href="https://www.miiting.fr/login">CONNEXION A L'APPLICATION</a></p> 
</nav>

<!--Puis on va mettre une petite bordure avec une image de fonc et le formulaire de connexion(ne pas oublier le lien pour l'inscription) -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/back-img.jpg" alt="First slide">
      <!--  le formulaire de connexion -->
       <div class="carousel-caption d-none d-md-block">
            <form action="accesEntreprise" method="POST">
               <div class="simple-login-container" style="padding-bottom: 5%;">
                    <h2>Connexion</h2>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input name="mail" id="mail" type="text" class="form-control" placeholder="Enter your Mail">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                            <input name="mdp" id="mdp" type="password" placeholder="Enter your Password" class="form-control">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 form-group">
                           <button  type="submit" name="connecter" id="connecter" class="btn btn-light">Connecter</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <a style="color: #000" href="inscription_entreprise"><strong>Inscription</strong></a>
                        </div>
                    </div>
                </div>
           </form>
        </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<!--Puis on va mettre un petit texte pour connaitre les avantages d'etre prestataire chez miiting-->
<h4 class="policeNewRoman ctr">Quels sont nos services ?</h4>
<p class="policeNewRoman">Une vitrine complète où des milliers de mariés intéressés découvriront vos services<br>

Une plateforme de communication et marketing de référence dans le secteur des mariages en ligne

Une équipe de professionnels à votre service qui développera votre entreprise</p>



<!--Enfin on va mettre notre footer habituelle-->
  </body>
  <?php
  include '../vues/v_footer.html';
  ?>
</html>