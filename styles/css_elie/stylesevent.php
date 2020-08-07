<?php
   header('content-type: text/css');
   ob_start('ob_gzhandler');
   header('Cache-Control: max-age=31536000, must-revalidate');
   // etc. 

   $toto= "../images_miiting/images_boutique_marie/background2.png";

?>

.background {
	/* background-image: url("../images_miiting/images_boutique_marie/background2.png"); */
	background-image: url("/miiting/images_miiting/images_boutique_marie/backgroundd.png");
	height: 300px;
	background-size: cover;
	background-repeat: no-repeat;
}
