/* 
 * quand je clique sur une conv 
 * me permet d'afficher tous les message correspondant
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
    
    function getIdConv($idconv)
    {
 
//$idconv est l'id de la conversation qu'il faut envoyer dans la page c_conversation
       $(".la_conv").load("controleurs/c_conversation.php", 
       {
       idconv : $idconv    
       });
       
    }

        
