
function getMessagesRecus()
{
  window.location.reload();
}

function getMessagesEnvoyes()
{
  $(".messagerie").load("controleurs/c_messagerie_mess_envoyes_entreprise.php");
}

function repondre(idconv, idmessage){
  $(".messagerie").load("controleurs/c_messagerie_send_mess_entreprise.php", { // N'oubliez pas l'ouverture des accolades !
  idconv :   idconv, 
  idmessage: idmessage
});
}


function envoyer(idconv, idmessage){
  
      $(".messagerie").load("controleurs/c_message_enregistrer_entreprise.php", { 
      message : $("#envoyermess").val(),
      idconv :   idconv, 
      idmessage: idmessage
      });
}

  
  


