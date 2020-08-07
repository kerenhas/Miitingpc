 <?php

/**
 * il s'agit du carousel de la page d'accueil avec la barre de recherche 
 * la barre de recherche ne prend pas en compte le ou mais que le que recherchez vous 
 */

 ?>

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

<div>

          <div>
            <!--Carousel Wrapper-->
            <div  id="carousel" class=" slide carousel-fade" data-ride="carousel" data-interval="2000"  >
              <!--Indicators-->
                    <!-- Carousel indicators -->
                    <ol class="carousel-indicators">
                        <!-- <li data-target="#myCarousel" data-slide-to="0" ></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>  
                        <li data-target="#myCarousel" data-slide-to="2"></li>   -->
                    </ol>
            <!--style="max-height: 800PX; max-width:100% ;"-->
              
              <!--Slides-->
              <div class="carousel-inner" role="listbox" style="position: sticky; ">
                <!-- premiere image -->
                <div class="carousel-item active" >
                  <div class="view"  >
                    <img class="d-block w-100" src="images_miiting/images_carousel_accueil/wedding_un.jpg"
                        alt="First slide"  style="object-fit: cover;" height="250px;"  >
                    <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                  
                  <div style="width: 38%; position: absolute; bottom:181%; left: 2%" class="dropdown">
                      <!--   <input type="text" style="height: 44%; bottom:30%;" class="form-control" placeholder="Ou ?"> -->
                  </div>
                  <!-- </div>-->

                    <h3 class="h3-responsive">Mariage de Paul et Janette</h3>
                    <p>Paris, 25 Octobre 2018</p>
                  </div>
                </div>
              
              <div class="carousel-item">
                  <div class="view" style="height: 40%">
                    <img class="d-block w-100" src="images_miiting/images_carousel_accueil/wedding_deux.jpg"
                      alt="Second slide" style="object-fit: cover;" height="250px;">
                    <div class="mask rgba-black-strong"></div>
                  </div>
                  <div class="carousel-caption">
                </div>
                      
              </div>

                <div class="carousel-item " >
                  <div class="view"  >
                    <img class="d-block w-100" src="images_miiting/images_carousel_accueil/wedding_trois.jpg"
                        alt="First slide"  style="object-fit: cover;" height="250px" >
                    <div class="mask rgba-black-light"></div>
                  </div>
                  <div class="carousel-caption">
                  
                  <div style="width: 38%; position: absolute; bottom:181%; left: 2%" class="dropdown">
                      <!--   <input type="text" style="height: 44%; bottom:30%;" class="form-control" placeholder="Ou ?"> -->
                  </div>
                  <!-- </div>-->

                    <h3 class="h3-responsive">Mariage de Paul et Janette</h3>
                    <p>Paris, 25 Octobre 2018</p>
                  </div>
                </div>


                </div>
              </div>
         </div>
        <div style="position: relative; ">
       
        <form action="prestataires" method="POST" >
              <div class="container">
                <div  style="position: relative; bottom: 15em;">
                  <input type="text"  style="width: 47%; height: 30%;"  placeholder="Ou ?">
                  <input style="width: 47%; height: 30%;" placeholder="Que recherchez vous ?"  name="search" id="search" type="text" autocomplete="off" onkeypress="refuserToucheEntree(event);" />

                  <div id="results" style="background-color: white;position: absolute; left: 48%; width: 46%;">

                  </div>
                </input>
               <button  style="position: absolute; bottom: 25%; left: 95%; "  type="btn" name="rechercher" id="rechercher" class="btn btn-info">Rechercher</button> 
                </div>
             </div>
        </form>
     
        </div>
    
</div>
     <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <script>
	
$('.carousel').carousel({
  interval: 2000
});
</script>

<script type="text/javascript" language="javascript" src="js/ajax_search_nav.js"></script> 
</html>