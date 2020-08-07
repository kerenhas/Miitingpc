<a> </a>
<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
   
include '../vues/v_entete.php';
//include '../vues/v_carousselle_accueil.php';
?>
<div class="backimage" style="height: 200px;width: 100%;">
    <p class="ctr">boutique du marié</p>
</div>
<div class="wrapper-marieeboutique">
    <div>
        <img src="images/bijoux.jpg" alt="" class="ctr imgmariee rond">
            <p class="policeNewRoman" style="bottom: 53%;font-size: 40px;left: 42%; position:relative;">Bijoux</p>
    </div>
    <div>
        <img src="images/evg.jpg" alt="" class="ctr imgmariee rond">
        <p class="policeNewRoman" style="bottom: 53%;font-size: 40px;left: 45%; position:relative;">EVJF</p>
    </div>
    <div>
        <img src="images/voit.jpg" alt="" class="ctr imgmariee rond">
        <p class="policeNewRoman" style="bottom: 53%;font-size: 40px;left: 28%; position:relative;">Location de Voitures</p>
    </div>
    
    <!-- bijoux -->
     <div class="wrapper-marieeboutiquedescrip">
       <?php
       for($i=0; $i<3; $i++)
       {
       ?>
                  <img src="<?php echo $bijoux[$i]['logo'];?>" alt="" class="ctr imgmariee rond">
           <div class="wrapper-marieeboutiquetitre" >
               <h4 class="ctr rouge" style="padding: 15px;"><?php echo $bijoux[$i]['libelle'];?></h4>
                <p class="ctr imgmariee"><?php echo $bijoux[$i]['description'];?></p><br>
                   <a href="<?php echo $bijoux[$i]['contact'];?>" class="btn btn-outline-danger" role="button" aria-pressed="true">Contacter</a>
           </div>
       <?php
       }
       ?>

     </div>
       <!-- evjf-->
      <div class="wrapper-marieeboutiquedescrip">
           <img src="IMG2.jpeg" alt="" class="ctr imgmariee rond">
           <div class="wrapper-marieeboutiquetitre">
               <h4 class="ctr rouge" style="padding: 15px;">Pronovias</h4>
                <p class="ctr imgmariee">Choisir une robe de mariée dans laquelle vous vous sentirez belle, qui mettra en valeur votre silhouette
               et s´ inscrira parfaitement dans votre thème de mariage n´est pas une tache facile.</p><br>
                   <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Contacter</a>
           </div>
                   <img src="img3.jpeg" alt="" class="ctr imgmariee rond">
           <div class="wrapper-marieeboutiquetitre">
               <h4 class="ctr rouge" style="padding: 15px;">Pronovias</h4>
                <p class="ctr imgmariee">Choisir une robe de mariée dans laquelle vous vous sentirez belle, qui mettra en valeur votre silhouette
               et s´ inscrira parfaitement dans votre thème de mariage n´est pas une tache facile.</p><br>
                   <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Contacter</a>
           </div>
                             <img src="img3.jpeg" alt="" class="ctr imgmariee rond">
           <div class="wrapper-marieeboutiquetitre">
               <h4 class="ctr rouge" style="padding: 15px;">Pronovias</h4>
                <p class="ctr imgmariee">Choisir une robe de mariée dans laquelle vous vous sentirez belle, qui mettra en valeur votre silhouette
               et s´ inscrira parfaitement dans votre thème de mariage n´est pas une tache facile.</p><br>
                   <a href="#" class="btn btn-outline-danger" role="button" aria-pressed="true">Contacter</a>
           </div>
     </div>
   
      <!--location de voitures-->
          <div class="wrapper-marieeboutiquedescrip">
       <?php
       for($i=0; $i<3; $i++)
       {
       ?>
                  <img src="<?php echo $voiture[$i]['logo'];?>" alt="" class="ctr imgmariee rond">
           <div class="wrapper-marieeboutiquetitre" >
               <h4 class="ctr rouge" style="padding: 15px;"><?php echo $voiture[$i]['libelle'];?></h4>
                <p class="ctr imgmariee"><?php echo $voiture[$i]['description'];?></p><br>
                   <a href="<?php echo $voiture[$i]['contact'];?>" class="btn btn-outline-danger" role="button" aria-pressed="true">Contacter</a>
           </div>
       <?php
       }
       ?>

     </div>

</div>
<div class="wrapper-autremariee">
         <h2 class="ctr bleu">...</h2>
      <h2 class="ctr bleu">...</h2>
      <h2  class="ctr bleu">...</h2> 
</div>

<!--Boutique de costume-->
<div>
    <img src="images/costume3.jpg" alt=""  style="height:40%; width: 100%;"> 
     <p class="policeNewRoman" style="bottom: 105px;font-size: 40px; position:relative;">Le costume</p>
</div>
<div class="ctr wrapper-robemariee">
       <?php
       for($i=0; $i<3; $i++)
       {
       ?>
            <img src="<?php echo $costume[$i]['logo'];?>" alt="" class="ctr imgmariee rond"> 
        <div class="wrapper-marieeboutiquetitre">
               <h4 class="ctr rouge" style="padding: 15px;"><?php echo $costume[$i]['libelle'];?></h4>
                <p class="ctr imgmariee"><?php echo $costume[$i]['description'];?></p><br>
                   <a href="<?php echo $costume[$i]['contact'];?>" class="btn btn-outline-danger" role="button" aria-pressed="true">Contacter</a>
           </div>

       <?php
       }
       ?>

</div>
    <h2  class="ctr bleu">...</h2> 
  <?php
  include '../vues/v_footer.html';
  ?>
