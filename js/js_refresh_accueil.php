<script>
//cette page permet le rafraichissement du champs discussion toute les sedondes
//var reloadTime = 3000;
//var auto_refresh = setInterval
//(
//  function ()
//  {
//   $("#reponse_ajax_accueil").load("controleurs/c_messagerie_div.php");
////alert("toto");
//  }, reloadTime
//);
//
//// la fonction setInterval permet de refaire une instruction ts les laps de temps donc setInterval(instruction, tps );
////ici donc de refaire la fonction tous les 2000
//
//$('#tata').click(function(){
//    alert("je suis about");
//    //affiche a l'endoit ou y'a 'id tot ne reviens pas ...
//document.getElementById('toto').innerHTML='ne reviens pas 0';
//$("#reponse_ajax_accueil").load("controleurs/c_messagerie_div.php",function() {
//  alert( "Load was performed." );});
// //  $("#div1").load("controleurs/c_messagerie_div.php");
//});

        $(document).ready(function ()
        {
           $("#btn").click(function(){
//               alert('single');
            $('#single').load('../controleurs/single.php'); 
           });
        });
</script>
