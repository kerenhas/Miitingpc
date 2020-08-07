<center id="gris"></center>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//
//            
//            $prestataire[]=$row['libelle'];
//            $prestataire[]=$row['logo'];
//            $prestataire[]=$row['description'];
//            $prestataire[]=$row['adr'];
//            $prestataire[]=$row['tel']; 
//    
include '../vues/v_entete.php';
include '../vues/v_carousselle_accueil.php';
?>
<!DOCTYPE html>

<html>
  <head>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
<p class='policeNewRoman ctr' >Répertoire de prestataires d'anniversaire : la plus grande liste d’entreprises spécialisées dans le mariage,
    avec tous les tarifs et toutes les promotions à portée de main pour l’organisation de votre grand jour. Trouvez les professionnels que vous recherchez pour réaliser le mariage de vos rêves et personnalisez chaque détail pour vous offrir des noces parfaites,
    à votre image.</p>

<div class='wrapper-prestation'>    
    <div>       
        <a class="sanslien" href="salle-2"><img src="img3.jpeg" class="blur" alt=""style="margin: 50px;padding: 15px; height: 100%; width: 100%;   border-radius: 50%; "></a> 
         <p class="policeNewRoman ideeTexte1" style="position:relative;margin: 2px;padding: 5px ;left: 39%;bottom: 84%;font-size: 34px;font-style: italic;">Restaurant</p>
    </div>
    <div>       
        <a class="sanslien" href="traiteur-1"><img src="img3.jpeg" class="blur" alt=""style="margin: 50px;padding: 15px; height: 100%; width: 100%;   border-radius: 50%; "></a>
         <p class="policeNewRoman ideeTexte1" style="position:relative;margin: 2px;padding: 5px ;left: 39%;bottom: 84%;font-size: 34px;font-style: italic;">Bar & Pub</p>
        
    </div>
    <div>       
        <img src="img3.jpeg" class="blur" alt=""style="margin: 50px;padding: 15px; height: 100%; width: 100%;   border-radius: 50%; ">
        <p class="policeNewRoman ideeTexte1" style="position:relative;margin: 2px;padding: 5px ;left: 32%;bottom: 84%; font-size: 34px;font-style: italic;">DJ& Animation</p>
    </div>
    <div>       
        <img src="img3.jpeg" class="blur" alt=""style="margin: 50px;padding: 15px; height: 100%; width: 100%;   border-radius: 50%; ">
        <p class="policeNewRoman ideeTexte1" style="position:relative;margin: 2px;padding: 5px ;left: 30%;bottom: 84%; font-size: 34px;font-style: italic;">Photos & Vidéos</p>
    </div>
        <div>       
        <img src="img3.jpeg" class="blur" alt=""style="margin: 50px;padding: 15px; height: 100%; width: 100%;   border-radius: 50%; ">
        <p class="policeNewRoman ideeTexte1" style="position:relative;margin: 2px;padding: 5px ;left: 17%;bottom: 87%; font-size: 34px;font-style: italic;">Traiteurs & Gateaux</p>
    </div>
        <div>       
        <img src="img3.jpeg" class="blur" alt=""style="margin: 50px;padding: 15px; height: 100%; width: 100%;   border-radius: 50%; ">
        <p class="policeNewRoman ideeTexte1" style="position:relative;margin: 2px;padding: 5px ;left: 33%;bottom: 87%; font-size: 34px;font-style: italic;">Lieux insolites</p>
    </div>
    <div>       
        <img src="img3.jpeg" class="blur" alt=""style="margin: 50px;padding: 15px; height: 100%; width: 100%;   border-radius: 50%; ">
        <p class="policeNewRoman ideeTexte1" style="position:relative;margin: 2px;padding: 5px ;left: 48%;bottom: 86%; font-size: 30px;font-style: italic;">Cadeaux</p>
    </div>
    <div>       
        <img src="img3.jpeg" class="blur" alt=""style="margin: 50px;padding: 15px; height: 100%; width: 100%;   border-radius: 50%; ">
        <p class="policeNewRoman ideeTexte1 " style="position:relative;margin: 2px;padding: 5px ;left: 50%;bottom: 86%; font-size: 34px;font-style: italic;">Autres</p>
    </div>


<!--         <a class="sanslien" href="mariage"><p class="policeNewRoman" style='margin-left: 30%;' >Lieu de Réception</p>  </a>   
         <a class="sanslien" href="mariage"><p class="policeNewRoman" style='margin-left: 40%;'>Traiteur</p> </a>  
         <a class="sanslien" href="mariage"><p class="policeNewRoman" style='margin-left: 30%;'>Orchestre-DJ Live</p>  </a>   
         <a class="sanslien" href="mariage"><p class="policeNewRoman" style='margin-left: 30%;'>Photos et Vidéos</p> </a>
         <a class="sanslien" href="mariage"> <p class="policeNewRoman" style='margin-left: 30%;'>Animation</p>  </a>  
         <a class="sanslien" href="mariage"><p class="policeNewRoman" style='margin-left: 10%;'>Robe de mariée, et soirée</p> </a>    
         <a class="sanslien" href="mariage"><p class="policeNewRoman" style='margin-left: 30%;'>Location de Voiture</p> </a>                       -->
</div>
<br>
<?php
    include '../vues/v_carousel_entreprises.php';
?>

  </body>
  <?php
  include '../vues/v_footer.html';
  ?>
</html>


