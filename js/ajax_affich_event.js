/* 
 *avoir l'ensemble des details de l'evenement
 * 
 * @author Keren Hassan
 */

//dans la classe, il y a l'id de la conversation qui change en fonction de la conv
// alors que l'id de toutes les conversation est le meme

//on recuperer ce qu'il a losqrue l'id est conv ( donc notre conversation )
//         var conv = document.getElementById("conv");
         // quand l'utilisateur clique dessus
//         conv.onclick = function()
//         {
//             //on recupere l'id de la conversation
//             var cheminImage = $('#conv').attr('class'); // rentre le contenu de l'attribut src dans une variable
//             alert(cheminImage);      
//         };
    
function getIdConv($idevent)
{

//$idevent qui nous permet de tous afficher les details
   $(".event").load("controleurs/c_event_param.php", 
   {
    idevent : $idevent    
   });
   
}

    
