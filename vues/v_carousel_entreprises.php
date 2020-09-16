<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
?>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<div class="bs-example backimage">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Carousel indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" ></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>         
        </ol>
            <!-- Wrapper for carousel items -->
         <div class="carousel-inner">        
             <div class="carousel-item active" > 
                 <div class="container" >
                     <div class="wrapper-carousel">
                        <?php  
                           for($i=0;$i<4;$i++)
                           {
                        ?>
                        <div class="card mb-2" style="margin-left: 10px;">
                            <img class="card-img-top"
                            src="<?php echo $carspreta[$i]['logo'];?>" alt="Card image cap">
                            <div class="card-body">
                              <h4 class="card-title"><?php echo $carspreta[$i]['libelle'];?></h4>
                              <p class="card-text"> <?php echo fonctionsUtils::tronque($carspreta[$i]['description'], 80); ?></p>        
                             </div>
                        </div> 
                        <?php
                
                           }
                        ?>
                      </div>
                 </div>
              </div>
              <div class="carousel-item" > 
                   <div class="container" >
                       <div class="wrapper-carousel">
                        <?php  
                            for($i=4;$i<8;$i++)
                            {
                        ?>
                         <div class="card mb-2" style="margin-left: 10px;">
                         <img class="card-img-top" src="<?php echo $carspreta[$i]['logo'];?>" alt="Card image cap">
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $carspreta[$i]['libelle'];?></h4>
                                <p class="card-text"><?php echo fonctionsUtils::tronque($carspreta[$i]['description'], 80); ?></p>        
                            </div>
                        </div>
                         <?php
                            }
                         ?>
                         </div>
                    </div>
            </div>
        </div>
    <!-- Carousel controls -->
    <a class="carousel-control-prev" href="#myCarousel" data-slide="prev">
     <span class="carousel-control-prev-icon"></span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" data-slide="next">
     <span class="carousel-control-next-icon"></span>
    </a>
    </div>
</div>