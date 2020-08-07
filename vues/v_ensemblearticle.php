<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
include '../vues/v_entete.php';
?>
<br><br>
<h2 class="ctr"><?php echo $titre["titre"]; ?></h2>
<br>
<div class='wrapper-articlismariages'>
    <a href="<?php echo $article[0]["href"] ;?>"><img src="<?php echo $article[0]["img"] ;?>" alt="" class="ctr" style="margin-left: 3%;padding: 15px;  "></a> 
   <div class='wrapper-articlismariages1'>
       <img src="<?php echo $article[1]["img"] ;?>" alt="" class="ctr" style="margin-left: 3%;padding: 15px; height: 33%;  ">
       <div style='margin-left:5%;'>
           <h4 class='ctr' STYLE="MARGIN-LEFT: 20%;"><?php echo $article[1]["titre"] ;?></h4>
           <p class='ctr' STYLE="MARGIN-LEFT: 21%;"><?php echo $article[1]["texte"] ;?></p>
       </div>
       <div style='margin-left:5%;'>
           <h4 class='ctr' STYLE="MARGIN-LEFT: 20%;"><?php echo $article[2]["titre"] ;?></h4>
           <p class='ctr' STYLE="MARGIN-LEFT: 21%;"><?php echo $article[2]["texte"] ;?></p>
       </div>
       <a <?php echo $article[3]["href"] ;?>> <img src="<?php echo $article[3]["img"] ;?>" alt="" class="ctr" style="margin-left: 3%;padding: 15px; height: 100%;  "> </a>  
        <img src="<?php echo $article[3]["img"] ;?>" alt="" class="ctr" style="margin-left: 3%;padding: 15px; height: 33%; ">
       <div style='margin-left:5%;'>
           <h4 class='ctr' STYLE="MARGIN-LEFT: 20%;"><?php echo $article[3]["titre"] ;?></h4>
           <p class='ctr' STYLE="MARGIN-LEFT: 21%;"><?php echo $article[3]["texte"] ;?></p>
       </div>
   </div>
   <div class='wrapper-articlismariages2'>
       <?php    
       for($i=4;$i<7;$i++)
       {
       ?>
        <div class='wrapper-articlismariages3'>
            <img src="<?php echo $article[$i]["img"] ;?>" alt="" class="ctr" style="margin-left: 3%;padding: 15px; height: 100%;  ">
            <h3><?php echo $article[$i]["titre"] ;?></h3>
            <p><?php echo $article[$i]["texte"] ;?></p>
       </div>
       <?php
       }    
       ?>
   </div>
</div>
<?php
  include '../vues/v_footer.html';
  ?>