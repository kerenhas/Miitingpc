<?php
/**
 * page de la vue de la boutique de la mariée
 */
include '../vues/v_entete.php';
?>
 <link href="styles/styleboutique.css" rel="stylesheet" type="text/css"/>

<script>
function refuserToucheEntree(event)
{
    // Compatibilité IE / Firefox
    if(!event && window.event) {
        event = window.event;
    }
    // IE
    if(event.keyCode == 13) {
        event.returnValue = false;
        event.cancelBubble = true;
    }
    // DOM
    if(event.which == 13) {
        event.preventDefault();
        event.stopPropagation();
    }
}
</script>

    <!-- mettre la bordure pour la mariee -->
    <img src="images_miiting/images_boutique_mariee/bordure1.PNG" alt="bordure de la mariee" style="width: 100%;">
   
    

    <div style="position: relative; ">
       
       <form action="prestataires" method="POST" >
             <div class="container">
               <div  style="position: relative; bottom: 15em; right: 9%;">
                 <input type="text"  style="width: 47%; height: 30%;" class="form-control" placeholder="Ou ?">
                 <input style="width: 47%; height: 30%;" placeholder="Que recherchez vous ?" class="form-control" name="search" id="search" type="text" autocomplete="off" onkeypress="refuserToucheEntree(event);" />

                 <div id="results" style="background-color: white;position: absolute; left: 48%; width: 46%;">

                 </div>
               </input>
              <button  style="position: absolute; bottom: 25%; left: 95%; width: 20%;"  type="btn" name="rechercher" id="rechercher" class="btn btn-info">Rechercher</button> 
               </div>
            </div>
       </form>
    
    </div>


    <!-- texte sur la mariieeee QUI DOIT AVOIR LA MEME TAILLE QUE LA PUBLICITE -->
    <div style="margin-top: -6em; " class="policeNewRoman">
      <!-- <img src="images_miiting/images_boutique_mariee/appli.jpg" alt="publicite pour l'application miiting" style="height: 87%; position: absolute;"> -->
        <center><p >La robe est l’icône du mariage aux yeux de la mariée. Ce choix si difficile et qui rend toutes les femmes incertaines jusqu’au « jour j ». </p></center>
        <center><p>Miiting Vous aide dans votre choix en vous apportant les dernières tendances, les classiques, les prestataires les plus fiables. </p></center>
        <center><p>Cette rubrique vous permettra de tout savoir sur la « Robe » du plus beau jour de votre vie.</p></center>
    </div>

    <!-- les prestataires -->
    <center><h2 style="text-decoration:underline;" class="policeNewRoman">Les prestataires<h2></center>

        <!-- publicite -->
     <img style=" width: 19%;  margin-left: 3%; position: absolute; " src="images_miiting/images_boutique_mariee/appli.jpg" alt="pub ">
     <img style=" width: 19%; top: 84em; margin-left: 3%; position: absolute; " src="images_miiting/images_boutique_mariee/pub.jpeg" alt="pub ">

    <!-- les magasins -->
    <div class="wrapper-boutiquemag" style=" margin-top: 4%; margin-left: 27%;">
               <!-- image -->
        <img style="width: 82%; " src="images_miiting/images_boutique_mariee/mags2.png" alt="nommag">
        <!-- titre -->
        <div>
        <h2 class="colordore policeNewRoman">Valerian Hughes</h2>
        <!-- texte descriptif--> 
        <p class="policeNewRoman" style="font-size: 20px;">Une autre idée du luxe avec Valerian Hughes !
        Une alliance entre sobriété et élégance.
        La parisienne est une femme indépendante et chic, elle rayonne sur son quotidien …
        </p>
        </div>
    </div>
    <div class="wrapper-boutiquemag" style="margin-left:27%; margin-top: 2%;">
        <!-- image -->
        <img style="width: 82%; " src="images_miiting/images_boutique_mariee/mag1.JPG" alt="nommag">
        <!-- titre -->
        <div>
        <h2 class="colordore policeNewRoman" >Confidence Mariage</h2>
        <!-- texte descriptif--> 
        <p class="policeNewRoman" style="font-size: 20px;">Nous avons été choisie par les plus grands créateurs pour les diffuser en Île-de-France. Nous sommes revendeur de robes de mariée en region parisienne et en tant que multimarques, nous diffusons plus de …</p>
        </div>
    </div>
      <!-- Le blog de la mariée-->
    <center><h2 style="text-decoration:underline;" class="policeNewRoman">Le blog de la mariée<h2></center>
    <center><p class="policeNewRoman" style="font-size: 20px;">Les articles pour vous conseiller dans votre choix de robe, les tendances, la sélection et les conseils.</p></center>
    <center><a href="presta?id=9"><img style="margin-top: 3%;" class="rond" src="images_miiting/images_boutique_mariee/blog.jpg" alt="img blog"></a></center>

    <!-- Article-->
    <div class="article policeNewRoman">
    <h3><strong>Comment trouver sa robe ?</strong></h3>
    <p>Jupe bustier ou robe? Classique ou originale? Blanc ou ivoire ? Marque de créateur ou de fabricant ? Étole ou boléro ? La richesse des critères de choix de la robe de mariée vous complique parfois la tache. Pourtant, comment imaginer l'épouser dans une robe qui ne serait pas la robe de vos rêves? 
    <br>Pour trouver la robe parfaite, suivez nos conseils. Pas de panique! Qu'on se le dise, choisir une robe de mariée ne s’apparente pas à un sport de combat ! ….
    </p>
    </div>

    <!-- Autre article -->
    <div>
    <center><a href="communaute-article"><img src="images_miiting/images_boutique_mariee/art.png" style="position: relative; -webkit-filter: blur(3px);filter: blur(3px);-webkit-transition: .3s ease-in-out;" class="flou" alt="image un article"></a>
       <!-- texte sur l'image -->
       <p style="position: absolute; left: 42%; top: 199em; text-align: center;">Comment trouver la robe idéale ?</p>
       </center>
    </div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script type="text/javascript" language="javascript" src="js/ajax_search_nav.js"></script> 
  <?php
  include '../vues/v_footer.html';
  ?>