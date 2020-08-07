function changeEvent($id)
{
    $(".event").load("controleurs/c_mesevents.php", { // N'oubliez pas l'ouverture des accolades !
    id :   $id, 
  });

}