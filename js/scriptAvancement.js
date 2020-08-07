$(document).ready(function ()
{

  $(".range_css").change(function ()
  {
    var av = $(".range_css").val();

    $(".spanAvancement").html("( "+ av +" % )")
  });

});



