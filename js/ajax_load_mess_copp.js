function getMessagesRecus()
{
  // Rachager la page pour avoir tous les messages recus 
  // donc il s'agit de la page c_messagerie
window.location.reload();
}

function getMessagesEnvoyes()
{
  // Rachager la page pour avoir tous les messages recus 
  // donc il s'agit de la page c_messagerie
  $(".messagerie").load("controleurs/c_messagerie_mess_envoyes.php");
}

function repondre(idconv, idmessage){
  $(".messagerie").load("controleurs/c_messagerie_send_mess.php", { // N'oubliez pas l'ouverture des accolades !
  idconv :   idconv, 
  idmessage: idmessage
});

}


function envoyer(idconv, idmessage){
  window.location.reload();
      $(".messagerie").load("controleurs/c_message_enregistrer.php", { 
      message : $("#envoyermess").val(),
      idconv :   idconv, 
      idmessage: idmessage
      });
}
