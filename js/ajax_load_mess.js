function getMessagesRecus()
{

  // Rachager la page pour avoir tous les messages recus 
  // donc il s'agit de la page c_messagerie
  // $(".messagerie").load("controleurs/c_messagerie.php");
  window.location.reload();
}

function getMessagesEnvoyes()
{

  // Rachager la page pour avoir tous les messages recus 
  // donc il s'agit de la page c_messagerie
  $(".messagerie").load("controleurs/c_messagerie_mess_envoyes.php");


}

// function getMessagesRecus()
// {

//   var newLocal = jQuery(document);
//   // Rachager la page pour avoir tous les messages recus 
//   // donc il s'agit de la page c_messagerie
//   $(document).load("controleurs/c_messagerie.php");
// }

// function getMessagesEnvoyes()
// {

//   // Rachager la page pour avoir tous les messages recus 
//   // donc il s'agit de la page c_messagerie
//   var newLocal = jQuery(document);
//   // Rachager la page pour avoir tous les messages recus 
//   // donc il s'agit de la page c_messagerie
//   $(document).load("controleurs/c_messagerie_mess_envoyes.php");
//   // jQuery(document).


// }

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


  //         $.post(
  //             'controleurs/c_messagerie_send_mess.php', // Un script PHP que l'on va créer juste après
  //             {
  //                 message : $("#envoyermess").val(),  // Nous récupérons la valeur de nos inputs que l'on fait passer à connexion.php
  //                 idconv : $("#idconv").val()
  //             },
  //             function(data){
  //  //Dans le data, y'a la liste des messages avec le nouveau message et le textare
  //                 if(data !== 'Success'){
  //                   $("#messages").html(data);
  //                 }
  //                 else{
  //                   }
  //             },
  //             'text' // Nous souhaitons recevoir "Success" ou "Failed", donc on indique text !
  //          );
  
  //     };
  
  


