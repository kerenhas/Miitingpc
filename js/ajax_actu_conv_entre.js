/* 
 * Permet d'actualiser la page messagerie, notamment au niveau des conversations
 * @author Keren Hassan
 */


$(document).ready(function ()
{
    var reloadTime = 3000;
    var auto_refresh = setInterval
    (
      function ()
      {
         
   $(".vertical-menu").load("controleurs/c_messagerie_div_entreprise.php");
      }, reloadTime
    );
});