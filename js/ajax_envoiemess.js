/* 
 * Script qui me permet d'envoyer un message lorsqu'on est dans une conversation
 * l'utlisateur clique sur le bouton envoyer
 * et on envoie l'idconv + le texte qui est dans textarea a la page controleurs/c_envoimess.php
 * cette page va permettre d'inserer le message a la bdd et d'envoyer un mail au receveur pour lui dire que il a recu un nouveau message
 * il faut ensuite ajouter un message non lu
 * @author Hassan Keren
 */

//
//var envoie = document.getElementById("envoyer");
//
////envoie.onclick= function() {
////    //mettre la page qui va envoyer le message et qui va recharger la page de la conversation
////       $(".newmess").load("controleurs/c_envoimess.php");
////}

$(document).ready(function(){
var envoie = document.getElementById("envoyer");

   envoie.onclick= function() {

        $.post(
            'controleurs/c_envoimess.php', // Un script PHP que l'on va créer juste après
            {
                message : $("#envoyermess").val(),  // Nous récupérons la valeur de nos inputs que l'on fait passer à connexion.php
                idconv : $("#idconv").val()
            },
            function(data){
 //Dans le data, y'a la liste des messages avec le nouveau message et le textare
                if(data !== 'Success'){
                  $("#messages").html(data);
                }
                else{
                  }
            },
            'text' // Nous souhaitons recevoir "Success" ou "Failed", donc on indique text !
         );

    };

});

//      $("#resultat").html("<p>Le message a LOLLL ete envoye !</p>");

