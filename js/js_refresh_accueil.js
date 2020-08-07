/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


//cette page permet le rafraichissement du champs discussion toute les sedondes
var auto_refresh = setInterval
(
  function ()
  {
    $(".reponse_ajax_accueil").load("../controleurs/c_messagerie.php").fadeIn("slow");
  }, 2000
);
document.getElementById('reponse_ajax_accueil').innerHTML='ne reviens pas dddddd 0';


