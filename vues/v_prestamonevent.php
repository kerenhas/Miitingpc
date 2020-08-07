<!-- on va mettre l'ensemble des prestations demandes souhaites avec un lien autre qui redirigera
vers la page prestations avec l'ensemble des prestations-->
    <?php
    include '../vues/v_eventmenu.php';
   


// si il a zero prestataires demandes et zero prestataires prit
if(count($prestalibelle)== 0 )
{?>
    <center><h4 class="policeNewRoman " style="margin-top: 4%; margin-bottom: 4%;">Vous n'avez pas encore contacter, vos prestataires.. ->demander a jordan que mettre a chq pages
    finalement ici , je met l'ensemble des prestations demandes de ce renseigner oua lors des prestations pris 
    pareille pr qd je cliques sur prestataires dans le sous menus 
    
    <a href="prestation">Commencez !! </a></h4></center>
<?php
}else
{

        ?>
        <div class="wrapper-menuprestevent">
        <div class="vertical-menu">
            <!--faire une boucle pour avoir toutes les familles dans le menu-->
            <?php 
            for($i=0;$i<count($prestalibelle);$i++)
            {
                ?>
                    <a href="detailFamille-<?php echo $prestalibelle[$i]['id']; ?>" ><?php echo   $prestalibelle[$i]['prestalibelle']; ?></a> <!--mettre comme href l'id de la famille -->
            <?php
            }
            ?>
        </div> 
        <div>
            <p class='policeNewRoman ctr' >Répertoire de prestataires de mariage : la plus grande liste d’entreprises spécialisées dans le mariage,
                avec tous les tarifs et toutes les promotions à portée de main pour l’organisation de votre grand jour. Trouvez les professionnels que vous recherchez pour réaliser le mariage de vos rêves et personnalisez chaque détail pour vous offrir des noces parfaites,
                à votre image.</p>
                <?php
                if(count($prestalibelle)>4)
                {
                ?>
                <div class='wrapper-prestation'>    
                    <?php
                    for($i=0;$i<count($prestalibelle);$i++)
                        { ?>
                        <div>
                            <a class="sanslien" href="prestaevent-<?php echo $prestalibelle[$i]['id']; ?>-<?php echo $id; ?>"><img src="img3.jpeg" class="blur" alt=""style="margin: 50px;padding: 15px; height: 100%; width: 100%;   border-radius: 50%; "></a> 
                                <p class="policeNewRoman ideeTexte1" style="position:relative;margin: 2px;padding: 5px ;left: 24%;bottom: 80%;font-size: 34px;font-style: italic;"><?php echo $prestalibelle[$i]['prestalibelle'];?></p>
                            </div>          
                        <?php
                        }
                        ?>
                    </div>
                <?php
                }else
                {
                ?>
                <div class='wrapper-prestationevent'>    
                <?php
                for($i=0;$i<count($prestalibelle);$i++)
                {
                ?>
                <div>
                    <a class="sanslien" href="prestaevent-<?php echo $prestalibelle[$i]['id']; ?>-<?php echo $id; ?>"><img src="img3.jpeg" class="blur" alt=""style="margin: 50px;padding: 15px; height: 100%; width: 100%;   border-radius: 50%; "></a> 
                    <p class="policeNewRoman ideeTexte1" style="position:relative;margin: 2px;padding: 5px ;left: 24%;bottom: 80%;font-size: 34px;font-style: italic;"><?php echo $prestalibelle[$i]['prestalibelle'];?></p>
                </div>          
                    <?php
                    }
                    ?>
                </div>
                <?php
                }
                ?>
            </div>
        </div>
<?php
}
    include '../vues/v_carousel_entreprises.php';
    include '../vues/v_footer.html'; 
?>

  </body>