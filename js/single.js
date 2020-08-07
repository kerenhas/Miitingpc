/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


        $(document).ready(function ()
        {
            var reloadTime = 3000;
            var auto_refresh = setInterval
            (
              function ()
              {
            $("#reponse_ajax_accueil").load("controleurs/c_messagerie.php");
              }, reloadTime
            );
        });