<?php
//On va d'abord mettre une entete avec le logo, le service clientete et la deconnexion
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
    <body class="policeNewRoman">
<!-- on a deja un menu avec seulement le logo de cote -->
<nav class="navbar navbar-light bg-light navbar-expand-lg"> 
       <a href="../index"><!-- Logo Image --><img alt="Logo_miiting" src="logo.png"  style="width: auto; height: 60px;" alt="" ></a>
       <!--service clientetel (numero de telephone )-->
       <p style="left: 84%; position: absolute; color: blue;">Service clientèle:  06553377288 </p>  
       <p><a href="deconnexion" style="TOP: 25%;position: absolute;left: 77%;color: blue;">SE DÉCONNECTER</a></p>    
</nav>

<!-- On va faire une sorte de menu avec des logos...accueil, mssagerie, mes evenements, vitrine -->

<br><br>
<div class="ctr"  style=" border-bottom:1px dashed green; border-top:1px dashed green;">
<nav class="ctr navbar navbar-expand-lg" style=" width: 70em; margin-left: 18%;" >
    
    <ul class="navbar-nav ">
        <li class="nav-item active" style="margin-right: 10%;"> 
            <img src="logo_organiser/events.jpg" alt="" style="height: 55%;width: 115px; ">
            <a class="nav-link" href="">Accueil</a>          
        </li>
        <li class="nav-item" style="margin-right: 10%;">
            <img src="logo_organiser/todo.jpg" alt="" style="height: 55%;width: 115px; ">
            <a class="nav-link" href="agenda">Agenda</a>  
        </li>
        <li class="nav-item" style="margin-right: 10%;">
             <img src="logo_organiser/table.jpg" alt="" style="height: 55%;width: 115px; ">
            <a class="nav-link" href="vitrine">Vitrine</a>  
        </li>
        <li class="nav-item" style="margin-right: 10%;">
             <img src="logo_organiser/table.jpg" alt="" style="height: 55%;width: 115px; ">
            <a class="nav-link" href="mamessagerie_prestataire">Messagerie</a>  
        </li>
    </ul>
           
</nav>
</div>


