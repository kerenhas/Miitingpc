function prestation($id){
    $(".presta").load("controleurs/c_prestation.php", { 
        idprestation :   $id 
        });

        window.location.reload();
}
