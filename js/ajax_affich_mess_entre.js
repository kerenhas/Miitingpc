function getIdConv($idconv)
{
//$idconv est l'id de la conversation qu'il faut envoyer dans la page c_conversation
   $(".la_conv").load("controleurs/c_conversation_entre.php", 
   {
   idconv : $idconv    
   });
   
}
