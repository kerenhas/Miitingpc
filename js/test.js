/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

    
    //recupere ce qu'il y a dans test
var test =document.getElementById('test');
alert(test.innerHTML);

//affiche a l'endoit ou y'a 'id tot ne reviens pas ...
document.getElementById('toto').innerHTML='ne reviens pas 0';

// peut etre faire quand y'a l'evenement select alors la ca affiche la conversation
// je fais un peu comme ca en nommant tous les champs du menu horizontale par un id est ensuite des qu'il est selectionne je creer un 
//evenemtn qui affiche tous les messages

// mais comment recupeer l'id de la conversation et ou faire la requete ? 


/*
<span id="clickme">Cliquez-moi !</span>

<script>

    var element = document.getElementById('clickme');

    element.onclick = function() {
        alert("Vous m'avez cliqué !");
    };

</script>
*/