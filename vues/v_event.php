<!DOCTYPE html>
<html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
<!-- nom de l'evenement -->
<center><h3 style="background-color: #dcdcdc;"> <?php echo $img[0]['libelle']; ?></h3>
    <div>       
      <img src="<?php if(empty($img[0]['image']))
        {
             //image de remplacement quand il n'a pas selectionne d'image
            echo 'images/marie4.jpeg';
        }  else {
        echo $img[0]['image'];
        }
       ?>" alt="image de l'evenement" style=""></center>
         
         <!-- mettre la DATELINE -->
       <center><p class="policeNewRoman " style="color: white; background-color: black; width: 30%;">Votre evenement dans <br><?php echo $mois ; ?> moi(s) et <?php echo $jour  ?> jour(s)</p><center>
    </div>


<h3 class="policeNewRoman" style="">Mes prestataires</h3>

<div style="margin-left: 3%" class="wraper-prestademande">
    <?php
    if(count($prestalibelle) == 0)
    {
        echo "Vous n'avez pas encore de prestataires" ;?>
        <a href="prestation">Chercher des prestataires...</a>
        <?php
    }else
    {
        // en vrai on va mettre seulement 4
        for($i=0;$i<count($prestalibelle);$i++)
        {
        ?>
        <div>
            <p class="carre hov-idees"><?php echo $prestalibelle[$i]['prestalibelle'];?><br>   <img src="<?php echo $prestalibelle[$i]['logo'] ;?>"  style="height: 55%;width: 115px; "  > 
                <br> <a  href="presta-<?php echo  $prestalibelle[$i]['id']; ?>"><button type="button" class="btn btn-default" style="margin-top: 3%">Rechercher</button></a>
        
            </p>          
        </div>
        
        <?php
        }
        ?>
        <a href="prestaevent">Autres prestations...</a>
        <?php
    }
    ?>

    
    
</div>
<br><br>
<h3 class="policeNewRoman" style="margin-left: 40px">Prochaines taches...</h3>
<div style="margin-left: 3%" >
    <table class="table">
       <tbody>  
            <?php
            // en vrai on va mettre seulement 4
            for($i=0;$i<4;$i++)
            {

            ?>

            <tr>

              <td><?php echo $tblFamille[$i]['libelle'];?></td>
              <td><?php echo $tblTaches[$i]['libelle'] ;?></td>

            </tr>

            <?php
            }
            ?>
        </tbody> 
    </table>
     <a href="taches">Autres taches...</a>
</div>
 
<br>

<?php
    include '../vues/v_carousel_entreprises.php';
    include '../vues/v_footer.html'; 
?>
</body>
<script type="text/javascript" src='js/js.js'></script>
</html>

