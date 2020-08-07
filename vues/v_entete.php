<!DOCTYPE html>
<html>
    <head>
        <title>Miiting</title>
        <meta charset="UTF-8">
       <link href="fichier.css" rel="stylesheet" type="text/css"/>
       <link href="styles/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <script type="text/javascript" language="javascript" src="node_modules/jquery/dist/jquery.js"></script>
 
    </head>
    <body>
            
        <div class="wrapper-logo-entete" >
          
            <a href="accesEntreprise" class="nav-link hovcolor gras_entete" style="margin-left: 49%;">
            <img alt="logo acces entreprise" src="images/logo_acce_entreprise.png"  style="width: auto; height: 18px;" >
            Acces Entreprise
            </a>
            <a href="index" >
              <!-- Logo Image -->
            <img alt="Logo_miiting" src="logo.png"  style="width: auto; height: 55px; margin-left: 23%;">
            </a>
        </div>
        <?php
        //if(isset($_SESSION['nom']))
        if (!isset($_SESSION['nom']))
        {

        ?>
                <nav class="navbar navbar-expand-lg " >
            <div class="container " style="margin-bottom: 0.5%;margin-top: 0.5%;" >
              <ul class="navbar-nav ">    
                <li class="nav-item "><a href="connexion-1" class="nav-link hovcolor gras_entete">ENTREZ</a></li>
                <li class="nav-item "><a href="inscription" class="nav-link hovcolor gras_entete">INSCRIVEZ-VOUS</a></li>
              </ul>
          <?php
        }else
        {
          ?>
                <nav class="navbar navbar-expand-lg " style="margin-left: 3%;" >
            <div class="container " >
            <ul class="navbar-nav ">    
                <p>Bienvenue <?php  echo $_SESSION['prenom']; ?> sur votre espace personel</p>
                </ul>
            <?php
        }
        ?>

        <?php
        if (isset($_SESSION['nom']))
        {
        ?>
            <p><a href="deconnexion">SE DÉCONNECTER</a></p>    
        <?php
        }?>
        <p>
          <a class="nav-link hovcolor gras_entete" href="https://www.miiting.fr/login">CONNEXION A L'APPLICATION</a></p> 
          </div>
                  
        </nav>
          <nav class="nav justify-content-center"> <!-- alignement centre -->

              <div class="dropdown">
                    <!--<button class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</button>  bouton -->
            <a  class="nav-link active text-dark policeNewRoman  dropbtn"    href="prestation">PRESTATAIRES</a>
            <!--<a href="index">PRÉSTATAIRES</a>-->
            <!--<div class="dropdown-menu">-->
            <div class="dropdown-content"> <!-- le drop down content permet de cacher le sous menu , mais est ce que c'est  lui qui faut aller voir pour gerer qd il doit s'afficher ou pas -->
                <div class='wrapper-menuprestation'>
                        <a class=" policeNewRoman" href="prestation-2">Lieu de reception</a>
                        <a class="policeNewRoman" href="prestation-1">Traiteur</a>
                        <a class=" policeNewRoman" href="prestation-8">Musique & Animation</a>
        
                        <a class=" policeNewRoman" href="prestation-4">Photos & videos</a>
                        <a class="policeNewRoman" href="prestation-9">Robes</a>
                        <a class=" policeNewRoman" href="prestation-10">Location de voiture</a>
            
                        <a class="policeNewRoman" href="prestation-11">costumes</a>
                        <a class="policeNewRoman" href="prestation-6">Wedding Planner</a>
                        <a class=" policeNewRoman" href="prestation-7">Décoration</a>
                </div>
            </div>
            </div>
            <div class="dropdown"><!--  href="idees-8"-->
            <a  class="nav-link active text-dark policeNewRoman  dropbtn"    href="idees">IDÉES</a>
            <div class="dropdown-content"> <!-- le drop down content permet de cacher le sous menu , mais est ce que c'est  lui qui faut aller voir pour gerer qd il doit s'afficher ou pas -->
                <div class='wrapper-menuidees'>
                    <a class=" policeNewRoman font-weight-bold" href="prestation">Avant le Mariage</a>
                    <a class="policeNewRoman font-weight-bold" href="corporate">Pendant le Mariage</a>
                    <a class=" policeNewRoman font-weight-bold" href="anniversaire">Apres le Mariage</a>
                </div>
            </div>
            </div>
          <!--<a class="nav-link text-dark policeNewRoman" href="idees-8">IDÉES</a>-->
          <div class="dropdown">
              <a  class="nav-link active text-dark policeNewRoman  dropbtn"    href="mariee">BOUTIQUE DE LA MARIÉE</a>
              <div class="dropdown-content">
                  <div class='wrapper-menumariee'>
                    <a class=" policeNewRoman " href="prestation">La robe</a>
                    <a class="policeNewRoman " href="corporate">Les bijoux</a>
                    <a class=" policeNewRoman " href="anniversaire">Le maquillage</a>
                    
                    <a class=" policeNewRoman" href="anniversaire">La coiffure</a>
                    <a class="policeNewRoman" href="anniversaire">Les chaussures</a>
                    <a class=" policeNewRoman" href="anniversaire">Les accessoirs</a>  
                  </div>   
              </div>
          </div>
          <!--<a class="nav-link text-dark policeNewRoman" href="mariee"></a>-->
          <div class="dropdown">
              <a  class="nav-link active text-dark policeNewRoman  dropbtn"    href="marie">LE MARIÉ</a>
              <div class="dropdown-content">
                  <div class='wrapper-menumarie'>
                    <a class=" policeNewRoman " href="prestation">Le costume</a>
                    <a class="policeNewRoman " href="corporate">Les chaussures</a>
                    <a class=" policeNewRoman " href="anniversaire">Les accessoirs</a>
                  </div>   
              </div>
          </div>
          <!--<a class="nav-link text-dark policeNewRoman" href="marie">LE MARIÉ</a>-->
          <a class="nav-link text-dark policeNewRoman" href="communaute">COMMUNAUTÉ</a>
            <div class="dropdown">
              <a  class="nav-link active <?php 
              if(isset($_SESSION['nom'])){
                ?>
                  text-dark
                <?php
              }else
              {?>
               text-secondary
              <?php } ?> policeNewRoman  dropbtn"    href="event-2">MON ÉVENEMENT</a>
              <div class="dropdown-content">
                  <div class='wrapper-menumonevent'>
                    <a class=" policeNewRoman " href="prestation">Mes prestations</a>
                    <a class="policeNewRoman " href="corporate">Mon budget</a>
                    <a class=" policeNewRoman " href="anniversaire">Mes invités</a>
                    <a class=" policeNewRoman " href="prestation">Messagerie</a>
                  </div>   
              </div>
          </div>
          <!--<a class="nav-link text-dark policeNewRoman" href="event">MON ÉVENEMENT </a>-->
            
            <div class="dropdown">
                <a class="nav-link text-dark policeNewRoman" href="corpo">CORPORATE EVENTS</a>
              <div class="dropdown-content">
                  <div class='wrapper-menucorpoevent'>
                    <a class=" policeNewRoman " href="prestation">Préstataires</a>
                    <a class="policeNewRoman " href="corporate">Idées</a>
                    <a class=" policeNewRoman " href="anniversaire">Agence evenementielle</a>
                    <a class=" policeNewRoman " href="prestation">Team Building</a>
                    <a class=" policeNewRoman " href="prestation">Conférence</a>
                    <!--<a class=" policeNewRoman " href="prestation"></a>-->
                  </div>   
              </div>
          </div>
        </nav>

 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.0/umd/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script type='text/javascript' src='https://code.jquery.com/jquery-1.5.js'></script>  
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.7/jquery-ui.js"></script>


