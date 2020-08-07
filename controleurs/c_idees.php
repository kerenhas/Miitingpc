<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../model/class.pdomiiting.php';
$pdo =  PdoMiiting::getPdoMiiting();
$themes = $pdo->getthemesidees(); //permet de retrouver les themes des idees, pour cjque themes il y aura plusieurs articles
$article = $pdo->getarticleidees(); // retourne les articles eux meme ecrit par les utilisateurs, donc qui sont affiches sur la page idees
$articlepro = $pdo->getarticleideespro();
$form = $_GET['form'];
if ($form == "1") {

    $nom = $_POST['nom'];
    $article = $_POST['article'];
    $email = $_POST['email'];
    if (!empty($nom)) {
        if (!empty($email)) {
            if (!empty($article)) {
                ini_set('display_errors', 1);

                error_reporting(E_ALL);

                $from = "kerenhassan2000@gmail.com";

                $to = "kerenhassan2000@gmail.com";

                $subject = "Vérification PHP mail";

                $message = "PHP mail marche";

                $headers = "From:" . $from;

                //    mail($to,$subject,$message, $headers);

                //    echo "L'email a été envoyé.";

            } else {
                echo '<script type="text/javascript">window.alert("saisir votre article SVP");</script>';
            }
        } else {
            echo '<script type="text/javascript">window.alert("saisir votre mail SVP");</script>';
        }
    } else {
        echo '<script type="text/javascript">window.alert("saisir votre nom SVP");</script>';
    }
}
include '../vues/v_idees.php';
