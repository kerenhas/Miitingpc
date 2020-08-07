<?php

/**
 *Classe de requête SQL
 */
class RequeteSQL
{
  //Fonction qui établie la connexion avec la base de données
  static function activeCnx()
  {
    if (file_exists('utils/autoloader.php'))
    {
      require 'utils/autoloader.php';
    }
    else
    {
      if (file_exists('../utils/autoloader.php'))
      {
        require '../utils/autoloader.php';
      }
    }

    Autoloader::register();
    $dbh = Connexion::seConnecter();
    $cnx = $dbh->getCnx();

    return $cnx;
  }

  //Fonction qui renvoie la liste des familles
  static function getAllFamille($cnx)
  {
    $selectFamille = $cnx->query("SELECT `idFamille`, `libFamille` FROM `famille`");
    $tblFamille = $selectFamille->fetchAll();

    return $tblFamille;
  }

  //Fonction qui renvoie une famille
  static function getLaFamille($cnx, $idF)
  {
    $selectFamille = $cnx->query("SELECT `idFamille`, `libFamille` FROM `famille` WHERE `idFamille` = $idF");
    $tblFamille = $selectFamille->fetch();

    return $tblFamille;
  }

  //Fonction qui insert une nouvelle famille
  static function insertFamille($cnx, $nom)
  {
    $insertFamille = $cnx->query("INSERT INTO `famille`(`libFamille`) VALUES ('$nom')");
  }

  //Fonction qui renvoie la liste des taches d'une famille
  static function getTacheFamille($cnx, $idF)
  {
    $selectTacheFamille = $cnx->query("SELECT `idTache`, `libTache`, `echeance`, `description`, `avancement`, `fait`, `fk_idFamille`
                                       FROM `tache`
                                       WHERE fk_idFamille = $idF");
    $tblTache = $selectTacheFamille->fetchAll();

    return $tblTache;
  }

  //Fonction qui renvoie la tache à partir de son Id
  static function getTache($cnx, $idT)
  {
    $selectTache = $cnx->query("SELECT `idTache`, `libTache`, `echeance`, `description`, `avancement`, `fait`, `fk_idFamille`
                                       FROM `tache`
                                       WHERE idTache = $idT");
    $laTache = $selectTache->fetch();

    return $laTache;
  }

  //Fonction qui supprime une tache à partir de son Id
  static function delTache($cnx, $idT)
  {
    $deleteTache = $cnx->query("DELETE FROM `tache` WHERE idTache = $idT");
  }

  //Fonction qui renvoie la famille à laquelle appartient une tache
  static function getFamilleDeLaTache($cnx, $idT)
  {
    $selectFamille = $cnx->query("SELECT idFamille, libFamille FROM tache t, famille f WHERE t.idtache = $idT and f.idFamille = t.fk_idFamille");
    $laFamille = $selectFamille->fetch();

    return $laFamille;
  }

  //Fonction qui insert la tache
  static function insertTache($cnx, $nom, $echeance, $description, $avancement, $fait, $idf)
  {
    $insertTache = $cnx->query("INSERT INTO `tache`(`libTache`, `echeance`, `description`, `avancement`, `fait`, `fk_idFamille`)
                                VALUES ('$nom', '$echeance', '$description', '$avancement', '$fait', '$idf')");
  }

  //Fonction qui modifie la tache
  static function updateTache($cnx, $id, $nom, $echeance, $description, $avancement, $fait, $idf)
  {
    $updateTache = $cnx->query("UPDATE `tache` SET `libTache`='$nom',`echeance`='$echeance',`description`='$description',`avancement`='$avancement',`fait`=$fait,`fk_idFamille`=$idf WHERE idTache = $id");
  }

  //Fonction qui modifie une famille à partir de l'idFamille
  static function updateFamille($cnx, $idF, $nom)
  {
    $updateFamille = $cnx->query("UPDATE `famille` SET `libFamille`= '$nom' WHERE idFamille = $idF");
  }

  //Fonction qui supprime une famille à partir de l'idFamille
  static function deleteFamille($cnx, $idF)
  {
    $deleteFamille = $cnx->query("DELETE FROM `famille` WHERE idFamille = $idF");
  }
}


?>
