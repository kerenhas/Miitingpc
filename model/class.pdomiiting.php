<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of class
 *
 * @author Aurélie
 */
class PdoMiiting
{
    // base de donnnee locale
    private static $serveur = 'mysql:host=localhost';
    private static $bdd = 'dbname=miiting0807';
    private static $user = 'root';
    private static $mdp = '';
    private static $monPdo;
    private static $monPdoMiiting = null;

// base sur OVH
    // private static $serveur = 'mysql:host=miitinemiiting.mysql.db';
    // private static $bdd = 'dbname=miitinemiiting';
    // private static $user = 'miitinemiiting';
    // private static $mdp = 'Raphael55'; 
    // private static $monPdo;
    // private static $monPdoMiiting= null;
  

    private function __construct()
    {
        session_start();
        PdoMiiting::$monPdo = new PDO(
            PdoMiiting::$serveur . ';' . PdoMiiting::$bdd,
            PdoMiiting::$user,
            PdoMiiting::$mdp
        );
        PdoMiiting::$monPdo->query('SET CHARACTER SET utf8');
    }

    public function __destruct()
    {
        PdoMiiting::$monPdo = null;
    }


    public static function getPdoMiiting()
    {
        if (PdoMiiting::$monPdoMiiting == null) {
            PdoMiiting::$monPdoMiiting = new PdoMiiting();
        }
        return PdoMiiting::$monPdoMiiting;
    }                                                          //**********************//

    public function getPrestataire()
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT prestataire.id AS id, prestataire.libelle AS libelle, prestataire.logo AS logo, prestataire.description AS description,'
                . ' prestataire.adr AS adr, prestataire.cont_tel AS tel '
                . 'FROM prestataire '
        );
        $requetePrepare->execute();
        $prestataire = array();
        return $requetePrepare->fetchAll();
    }

    public function getPrestaireMariage($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT prestataire.libelle AS libelle, prestataire.logo AS logo, prestataire.description AS description,'
                . ' prestataire.adr AS adr, prestataire.tel AS tel '
                . 'FROM prestataire '
                . 'WHERE prestataire.id= :unId '
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        $prestataire = array();
        return $requetePrepare->fetchAll();
    }

    public function get()
    {
        $id = 2;
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT prestataire.libelle AS libelle, prestataire.logo AS logo, prestataire.description AS description,'
                . ' prestataire.adr AS adr, prestataire.tel AS tel '
                . 'FROM prestataire INNER JOIN mariageprestataire ON prestataire.id = mariageprestataire.idprestataire '
                . 'WHERE mariageprestataire.idprestataire= :unId '
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        $prestataire = array();
        return $requetePrepare->fetchAll();
    }

    /**
     * Requete qui permet de verifier que le compte peut etre active
     */
    public function verifActivation($email, $id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT * '
                . 'FROM utilisateur '
                . 'WHERE utilisateur.mail= :unMail and utilisateur.id= :unId '
        );
        $requetePrepare->bindParam(':unMail', $email, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_INT);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }
    public function verifActivationEntreprise($email, $id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT * '
                . 'FROM prestataire '
                . 'WHERE prestataire.mail= :unMail and prestataire.id= :unId '
        );
        $requetePrepare->bindParam(':unMail', $email, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_INT);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }

    /**
     * Requete qui met a jour la table utilisateur lorsqu'il a activer son compte, mettre actif a 1
     */
    public function updateUtilisateur($id)
    {
        $actif = 1;
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'UPDATE utilisateur '
                . 'SET utilisateur.actif = :unActif '
                . 'WHERE utilisateur.id = :unId '
        );

        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unActif', $actif, PDO::PARAM_INT);
        $requetePrepare->execute();
    }

    /**
     * Requete qui met a jour la table prestataire lorsqu'il a activer son compte, mettre actif a 1
     */
    public function updateUtilisateurEntreprise($id)
    {
        $actif = 1;
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'UPDATE prestataire '
                . 'SET prestataire.actif = :unActif '
                . 'WHERE prestataire.id = :unId '
        );

        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unActif', $actif, PDO::PARAM_INT);
        $requetePrepare->execute();
    }


    public function getListePrestataire($id)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT prestataire.tarifs as tarif, prestataire.cont_nom as nom_contact, prestation.libelle as prestation_libelle,  prestataire.libelle AS libelle, prestataire.logo AS logo, prestataire.description AS description,'
                . ' prestataire.adr AS adr, prestataire.cont_tel AS tel, prestataire.id AS id '
                . 'FROM prestataire INNER JOIN prestation ON prestataire.idprestation = prestation.id '
                . 'WHERE prestation.id= :unId '
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        $prestataire = array();
        return $requetePrepare->fetchAll();
    }

    public function getLibellePrestataire($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT prestation.libelle AS libelle '
                . 'FROM prestation '
                . 'WHERE prestation.id= :unId '
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }


    /**
     * Retourne les informations d'un visiteur ppour verifier sa connexion
     *
     * @param String $email email du visiteur
     * @param String $password   Mot de passe du visiteur
     *
     * @return l'id, le nom et le prÃ©nom sous la forme d'un tableau associatif
     */
    public function getInfosVisiteur($email, $password)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT utilisateur.nom AS nom, utilisateur.prenom AS prenom, utilisateur.id AS id '
                . 'FROM utilisateur '
                . 'WHERE utilisateur.mail= :unMail AND utilisateur.mdp= :unMdp '
        );
        $requetePrepare->bindParam(':unMail', $email, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unMdp', $password, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }
    /**
     * Permet l'inscription d'un utilisateur, donc enregistrement dans la base de donnée
     *
     * @param String $nom nom du visiteur
     * @param String $prenom   prenom du visiteur
     * @param String $mdp   Mot de passe du visiteur
     * @param String $email  email du visiteur
     * @param String $tel  telephone du visiteur
     */
    public function inscription($mdp, $nom, $prenom, $email, $tel)
    {
        $actif = 0;

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'INSERT INTO utilisateur (mdp, nom, prenom, mail, tel, actif)'
                . 'VALUES(:unMdp, :unNom, :unPrenom, :unMail, :unTel, :unActif)'
        );

        $requetePrepare->bindParam(':unMdp', $mdp, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unNom', $nom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unPrenom', $prenom,  PDO::PARAM_STR);
        $requetePrepare->bindParam(':unMail', $email, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unTel', $tel, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unActif', $actif, PDO::PARAM_INT);

        $requetePrepare->execute();
    }

    /**
     * requete qui permet de recuperer le dernier id de la table utilisateur
     * pour le connecter
     */
    public function getLatsId($email)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT max(id) as id '
                . 'FROM utilisateur '
                . 'WHERE utilisateur.mail= :unMail '
        );
        $requetePrepare->bindParam(':unMail', $email, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }

    /**
     * Permet l'inscription desmiiting d'or
     *
     * @param String $nom nom du visiteur
     * @param String $prenom   prenom du visiteur
     * @param String $mdp   Mot de passe du visiteur
     * @param String $email  email du visiteur
     * @param String $tel  telephone du visiteur
     */
    public function inscriptionmmitingor($nom, $email, $prenom, $tel, $societe, $activite, $siret, $apropos)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'INSERT INTO miitingor (nom, prenom, siret, activite, apropos, societe, tel, mail)'
                . 'VALUES(:unNom, :unPrenom, :unSiret, :uneActivite, :unPropos, :uneSociete, :unTel, :unMail)'
        );

        $requetePrepare->bindParam(':uneActivite', $activite, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unPropos', $apropos, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unNom', $nom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unPrenom', $prenom,  PDO::PARAM_STR);
        $requetePrepare->bindParam(':unMail', $email, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unTel', $tel, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unSiret', $siret, PDO::PARAM_INT);
        $requetePrepare->bindParam(':uneSociete', $societe, PDO::PARAM_INT);

        $requetePrepare->execute();
    }

    /**
     * Retourne les themes des articles des idees
     *
     *
     * @return l'img, le alt et le titre, href sous la forme d'un tableau associatif
     */
    public function getthemesidees()
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT themesidees.img AS img, themesidees.titre AS titre, themesidees.alt AS alt, themesidees.href '
                . 'FROM themesidees '
        );
        $requetePrepare->execute();
        $themes = array();
        return $requetePrepare->fetchAll();
    }
    /**
     * Retourne les articles des idees pour c'est a vous la parole
     *donc qd le blogue est 0
     *
     * @return l'id, le nom et le prÃ©nom sous la forme d'un tableau associatif
     */
    public function getarticleidees()
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT article.img AS img, article.titre AS titre, article.alt AS alt, article.texte AS texte '
                . 'FROM article '
                . 'WHERE article.blogue= 0 '
        );
        $requetePrepare->execute();

        $article = array();
        return $requetePrepare->fetchAll();
    }

    /**
     * Retourne les articles des idees pour qui sont ecrit par des professionels
     *donc qd le blogue est 1
     *
     * @return l'id, le nom et le prÃ©nom sous la forme d'un tableau associatif
     */
    public function getarticleideespro()
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT article.img AS img, article.titre AS titre, article.alt AS alt, article.texte AS texte '
                . 'FROM article '
                . 'WHERE article.blogue= 1 '
        );
        $requetePrepare->execute();

        $article = array();
        return $requetePrepare->fetchAll();
    }

    /**
     * Retourne les articles des idees pour qui sont ecrit par des professionels
     *donc qd le blogue est 1 avec le bon id selon le theme selectionnes
     *
     * @return l'id, le nom et le prÃ©nom sous la forme d'un tableau associatif
     */
    public function getarticleideesthemes($id)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT article.img AS img, article.titre AS titre, article.alt AS alt, article.texte AS texte, article.href AS href, article.id AS id '
                . 'FROM article '
                . 'WHERE article.idtheme= :unId AND article.blogue= 0'
        );

        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        $article = array();
        return $requetePrepare->fetchAll();
    }

    /**
     * Retourne le titre du theme d'idees
     *
     * @return le titre du theme
     */
    public function gettitre($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT themesidees.titre AS titre '
                . 'FROM themesidees '
                . 'WHERE themesidees.id= :unId '
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }

    /**
     * Retourne les details de l'article selon l'article selectionne grace a son id
     *
     * @return le titre du theme
     */
    public function getarticle($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT article.titre AS titre, article.img AS img, article.texte AS texte '
                . 'FROM article '
                . 'WHERE article.id= :unId '
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetch();
    }

    /**
     * Retourne les prestataires bijoutier
     * dans la table prestation l'id des pretations est 13
     *
     * @return le titre du theme
     */
    public function getbijoux()
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT libelle AS libelle, description AS description, logo AS logo, contact AS contact '
                . 'FROM prestataire '
                . 'WHERE prestataire.idprestation= 13 '
        );
        $requetePrepare->execute();
        $bijoux = array();
        return $requetePrepare->fetchAll();
    }

    /**
     * Retourne les prestataires maquillage et coiffure
     * dans la table prestation l'id des pretations est 13
     *
     * @return le titre du theme
     */
    public function getmaquicoiff()
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT libelle AS libelle, description AS description, logo AS logo, contact AS contact '
                . 'FROM prestataire '
                . 'WHERE prestataire.idprestation= 12 OR prestataire.idprestation= 14 '
        );
        $requetePrepare->execute();
        $maquicoiff = array();
        return $requetePrepare->fetchAll();
    }

    /**
     * Retourne les prestataires robe
     * dans la table prestation l'id des pretations est 9
     *
     * @return le titre du theme
     */
    public function getrobes()
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT libelle AS libelle, description AS description, logo AS logo, contact AS contact '
                . 'FROM prestataire '
                . 'WHERE prestataire.idprestation= 9 '
        );
        $requetePrepare->execute();
        $robes = array();
        return $requetePrepare->fetchAll();
    }
    /**
     * Retourne les prestataires voiture
     * dans la table prestation l'id des pretations est 9
     *
     * @return le titre du theme
     */
    public function getvoitures()
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT libelle AS libelle, description AS description, logo AS logo, contact AS contact '
                . 'FROM prestataire '
                . 'WHERE prestataire.idprestation= 10 '
        );
        $requetePrepare->execute();
        $voitures = array();
        return $requetePrepare->fetchAll();
    }
    /**
     * Retourne les prestataires costume
     * dans la table prestation l'id des pretations est 9
     *
     * @return le titre du theme
     */
    public function getcostume()
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT libelle AS libelle, description AS description, logo AS logo, contact AS contact '
                . 'FROM prestataire '
                . 'WHERE prestataire.idprestation= 11 '
        );
        $requetePrepare->execute();
        $costume = array();
        return $requetePrepare->fetchAll();
    }
    /**
     * Requete qui permet d'inserer dans la table evenement une image de l'evenement
     * ainsi que le nombre d'invites', la date, la ville, le type d'evenement
     */
    public function addevent($date, $nbinvite, $ville, $idutilisateur, $idevent, $nomevent)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
                'INSERT INTO evenement(libelle, date, ville, bninvite, idutilisateur, idevent )'
                    . 'VALUES(:unLibelle, :uneDate, :uneVille, :unNbInvite, :unUtilisateur, :unIdEvent)'
            );

        $requetePrepare->bindParam(':uneDate', $date, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unNbInvite', $nbinvite, PDO::PARAM_INT);
        $requetePrepare->bindParam(':uneVille', $ville, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unUtilisateur', $idutilisateur,  PDO::PARAM_INT);
        $requetePrepare->bindParam(':unIdEvent', $idevent, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unLibelle', $nomevent, PDO::PARAM_STR);


        $requetePrepare->execute();
    }

    /**
     * requete qui permet de savoir quelle est l'id de l'evenement 
     * pour enregistrer la demande des prestataires avec l'id de l'evenement
     */

    public function getIdEvenement($idutilisateur, $date)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT id AS id '
                . 'FROM evenement '
                . 'WHERE evenement.idutilisateur= :unIdUtilisateur and evenement.date= :uneDate '
        );

        $requetePrepare->bindParam(':unIdUtilisateur', $idutilisateur, PDO::PARAM_INT);
        $requetePrepare->bindParam(':uneDate', $date, PDO::PARAM_STR);
        $requetePrepare->execute();
        $idevenement = array();
        return $requetePrepare->fetchAll();
    }

    /**
     * Permet d'inserer dans la table demandeclient toutes les prestations que le client souhaiterer qu'on lui propose
     */
    public function adddemandeclient($idutilisateur, $idprestation, $idevent)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
                'INSERT INTO demandeclient(idclient, idprestation, idevent)'
                    . 'VALUES(:unIdUtilisateur, :unIdPrestation, :unIdEvent)'
            );

        $requetePrepare->bindParam(':unIdUtilisateur', $idutilisateur, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unIdPrestation', $idprestation, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unIdEvent', $idevent, PDO::PARAM_INT);
        $requetePrepare->execute();
    }

    /**
     * Permet d'avoir l'image et les prestations choisit pour tel utilisateur en attend qu'il at les choix pr plusieur evenement
     */
    public function getIdEvent($idutilisateur)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT id AS id '
                . 'FROM evenement '
                . 'WHERE evenement.idutilisateur= :unIdUtilisateur '
        );

        $requetePrepare->bindParam(':unIdUtilisateur', $idutilisateur, PDO::PARAM_STR);
        $requetePrepare->execute();

        return $requetePrepare->fetch();
    }

    /**
     * permet d'avoir l'image de l'evenement
     * @param type $id
     * @return le src de l'image
     */
    public function getimg($id)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT image AS image, date as date, libelle as libelle, ville, bninvite as nbinvite, image '
                . 'FROM evenement '
                . 'WHERE evenement.id= :unIdEvent '
        );
        $requetePrepare->bindParam(':unIdEvent', $id, PDO::PARAM_INT);
        $requetePrepare->execute();
        $img = array();
        return $requetePrepare->fetchAll();
    }


    /**
     * return les prestatairs demandes^par l'utilisateur dans son formulaire de pre inscription
     * 
     */
    public function getdemande($id)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT prestation.libelle AS prestalibelle, prestation.logo AS logo, prestation.id AS id '
                . 'FROM prestation inner join demandeclient on prestation.id=demandeclient.idprestation '
                . 'WHERE demandeclient.idevent= :unIdEvent '
        );
        $requetePrepare->bindParam(':unIdEvent', $id, PDO::PARAM_INT);
        $requetePrepare->execute();
        $libelleprestation = array();
        return $requetePrepare->fetchAll();
    }



    //Fonction qui renvoie la liste des familles
    public function getAllFamille()
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            ' SELECT idFamille AS id, libFamille AS libelle '
                . 'FROM famille'
        );
        $requetePrepare->execute();
        $tblFamille = array();
        return $requetePrepare->fetchAll();
        return $tblFamille;
    }

    public function getlaFamille($idF)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT idFamille, libFamille '
                . 'FROM famille '
                . 'WHERE idFamille= :unId '
        );
        $requetePrepare->bindParam(':unId', $idF, PDO::PARAM_INT);
        $requetePrepare->execute();
        $tblFamille = array();
        return $requetePrepare->fetchAll();
        return $tblFamille;
    }

    public function getTacheFamille($idF)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            ' SELECT idTache AS id, libTache AS libelle, fk_idFamille AS idFamille '
                . 'FROM taches '
                . 'WHERE fk_idFamille=:unId '
        );
        $requetePrepare->bindParam(':unId', $idF, PDO::PARAM_INT);
        $requetePrepare->execute();
        $tblTache = array();
        return $requetePrepare->fetchAll();
    }

    public function getTachesFamille()
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT distinct famille.libFamille AS libfamille, taches.libtache AS idtache '
                . 'FROM famille right join taches ON taches.fk_idFamille = famille.idFamille '
                . 'order by libfamille '
        );
        //            $requetePrepare->bindParam(':unId', $idF, PDO::PARAM_INT);
        $requetePrepare->execute();
        $tblFamille = array();
        return $requetePrepare->fetchAll();
        return $tblFamille;
    }

    public function getAllTaches($id)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            ' SELECT idTache AS id, libTache AS libelle, fk_idFamille AS idFamille, fait, description, echeance, avancement '
                . 'FROM taches '
                . 'WHERE taches.idevent = :unIdEvent '
        );

        $requetePrepare->bindParam(':unIdEvent', $id, PDO::PARAM_INT);
        $requetePrepare->execute();
        $tblTache = array();
        return $requetePrepare->fetchAll();
        return $tblTache;
    }

    /**
     * compte le nombre de taches effectues
     */
    public function getNbTachesFaites($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            ' SELECT count(*) '
                . 'FROM taches '
                . 'WHERE taches.idevent = :unIdEvent and fait = 1 '
        );

        $requetePrepare->bindParam(':unIdEvent', $id, PDO::PARAM_INT);
        $requetePrepare->execute();
        $tblTache = array();
        return $requetePrepare->fetchAll();
        return $tblTache;
    }

    /**
     * compte le nombre de taches 
     */
    public function getNbTaches($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            ' SELECT count(*) '
                . 'FROM taches '
                . 'WHERE taches.idevent = :unIdEvent '
        );

        $requetePrepare->bindParam(':unIdEvent', $id, PDO::PARAM_INT);
        $requetePrepare->execute();
        $tblTache = array();
        return $requetePrepare->fetchAll();
        return $tblTache;
    }

    public function updateTache($id, $libelle, $echeance, $description, $avancement, $fait)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'UPDATE taches '
                . 'SET taches.libTache = :libelle, '
                . 'taches.echeance = :echeance, '
                . 'taches.description = :description, '
                . 'taches.avancement = :avancement, '
                . 'taches.fait = :fait '
                . 'WHERE taches.idTache = :unId '
        );

        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->bindParam(':libelle', $libelle, PDO::PARAM_STR);
        $requetePrepare->bindParam(':echeance', $echeance, PDO::PARAM_STR);
        $requetePrepare->bindParam(':avancement', $avancement, PDO::PARAM_STR);
        $requetePrepare->bindParam(':description', $description, PDO::PARAM_STR);
        $requetePrepare->bindParam(':fait', $fait, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    //founction pour avoir les caracteristiques d'une taches en fonctions de son id
    public function getParamTache($id)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            ' SELECT idTache AS id, libTache AS libelle, fk_idFamille AS idFamille, echeance AS echeance, description AS description, avancement AS avancement, fait AS fait '
                . 'FROM taches '
                . 'WHERE idTache= :unId '
        );

        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_INT);
        $requetePrepare->execute();
        $tblParamTache = array();
        return $requetePrepare->fetchAll();
    }


    public function deleteTache($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'DELETE FROM taches '
                . 'WHERE taches.idTache = :unId'
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    public function ajouterTache($idFamille, $libTache, $description, $echeance, $avancement, $fait)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
                'INSERT INTO taches(libTache, echeance, description, avancement, fait, fk_idFamille )'
                    . 'VALUES(:libTache, :echeance, :description, :avancement, :fait, :fk_idFamille )'
            );

        $requetePrepare->bindParam(':libTache', $libTache, PDO::PARAM_STR);
        $requetePrepare->bindParam(':echeance', $echeance, PDO::PARAM_INT);
        //            $requetePrepare->bindParam(':id', $id, PDO::PARAM_INT);
        $requetePrepare->bindParam(':description', $description, PDO::PARAM_STR);
        $requetePrepare->bindParam(':avancement', $avancement, PDO::PARAM_INT);
        $requetePrepare->bindParam(':fait', $fait, PDO::PARAM_INT);
        $requetePrepare->bindParam(':fk_idFamille', $idFamille, PDO::PARAM_INT);
        $requetePrepare->execute();
    }


    // Requete qui permet d'voir les differents prestataires selon une prestations

    public function getPrestaires($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT prestataire.libelle AS libelle, prestataire.logo AS logo, prestataire.description AS description,'
                . ' prestataire.adr AS adr, prestataire.tel AS tel, prestataire.id AS id '
                . 'FROM prestataire '
                . 'WHERE prestataire.idprestation= :unId '
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        $prestataire = array();
        return $requetePrepare->fetchAll();
    }

    /**
     * permet d'avoir l'ensemble des questions et reponses pr chaque prestataires
     */
    public function getQuestions($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT faq.idquestion, faq.reponse, faq.id, questionspresta.question, questionspresta.id '
                . 'FROM questionspresta INNER JOIN faq ON faq.idquestion = questionspresta.id '
                . 'WHERE faq.idpresta= :unId '
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        $prestataire = array();
        return $requetePrepare->fetchAll();
    }
    /**
     * requete qui permet d'avoir la reponse selon la question et le prestataire
     */
    public function getReponsesByIdQuest($idquest, $idpresta)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT faq.idquestion, faq.reponse, faq.id, questionspresta.question, questionspresta.id '
                . 'FROM questionspresta INNER JOIN faq ON faq.idquestion = questionspresta.id '
                . 'WHERE faq.idpresta= :unId and faq.idquestion= :unIdQuest '
        );
        $requetePrepare->bindParam(':unId', $idpresta, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unIdQuest', $idquest, PDO::PARAM_STR);
        $requetePrepare->execute();
        $prestataire = array();
        return $requetePrepare->fetchAll();
    }


    //permet d'avoir l'ensemble des evenements selon l'utilisateur
    public function getEvents($idUtilisateur)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT evenement.libelle AS libelle, date, ville, bninvite, evenement.id AS id, evenement.image AS image '
                . 'FROM evenement '
                . 'WHERE evenement.idutilisateur= :unId '
        );
        $requetePrepare->bindParam(':unId', $idUtilisateur, PDO::PARAM_STR);
        $requetePrepare->execute();
        $events = array();
        return $requetePrepare->fetchAll();
    }

    //retourne les id des evenemts pour qu'on est le plusrecent et qu'il soit le plus comme ca
    public function getideventrecent($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT evenement.id AS id '
                . 'FROM evenement '
                . 'WHERE evenement.idutilisateur= :unId '
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        $idevents = array();
        return $requetePrepare->fetchAll();
    }

    //methode qui permet d'avoir le mail de l'utilisateur (utilise lorsqu'il va vouloir faire une nouvelle discussion avec un prestataire)
    public function getMail($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT utilisateur.mail AS mail '
                . 'FROM utilisateur '
                . 'WHERE utilisateur.id= :unId '
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    /**
     * requete pour avoir toutes les conversation quand c'est lui le receveur 
     */
    public function getMessageRecu($id, $idevent)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT message.idmessage, message.text, message.date, prestataire.libelle as libellepresta, prestation.libelle as libelleprestation, conversation.objet, conversation.idconversation as idconv,  message.heure, message.lu, message.idconversation, envoyeur '
                . 'FROM message, conversation, prestation, prestataire '
                . 'WHERE message.idconversation=conversation.idconversation and conversation.idprestataire=prestataire.id and prestation.id = prestataire.idprestation and message.receveur= :unId and conversation.idevent = :unIdEvent '
                . ' ORDER BY message.idmessage desc '
        );

        $requetePrepare->bindParam(':unIdEvent', $idevent, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    /**
     * requete pour avoir toutes les conversation quand c'est lui le receveur 
     */
    public function getMessageRecuPresta($id)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT message.idmessage, message.text, message.date, conversation.objet, conversation.idconversation as idconv,  message.heure, message.lu, message.idconversation, envoyeur, utilisateur.nom, utilisateur.prenom '
                . 'FROM message, conversation, utilisateur '
                . 'WHERE message.idconversation=conversation.idconversation and utilisateur.id= conversation.idutilisateur and message.receveur= :unId '
                . ' ORDER BY message.idmessage desc '
        );

        // $requetePrepare->bindParam(':unIdEvent', $idevent, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    /**
     * requete pour avoir toutes les conversation quand c'est lui le envoyeur 
     */
    public function getMessageEnvoyesPresta($id)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT message.idmessage, message.text, message.date, conversation.objet, conversation.idconversation as idconv,  message.heure, message.lu, message.idconversation, envoyeur, utilisateur.nom, utilisateur.prenom '
                . 'FROM message, conversation, utilisateur '
                . 'WHERE message.idconversation=conversation.idconversation and utilisateur.id= conversation.idutilisateur and message.envoyeur= :unId '
                . ' ORDER BY message.idmessage desc '
        );

        // $requetePrepare->bindParam(':unIdEvent', $idevent, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    /**
     * requete pour avoir toutes les conversation quand c'est lui le envoyeur 
     */
    public function getMessageEnvoyes($id, $idevent)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT message.idmessage, message.text, message.date, prestataire.libelle as libellepresta, prestation.libelle as libelleprestation, conversation.objet,conversation.idconversation as idconv,  message.heure, message.lu, message.idconversation, envoyeur '
                . 'FROM message, conversation, prestation, prestataire '
                . 'WHERE message.idconversation=conversation.idconversation and conversation.idprestataire=prestataire.id and prestation.id = prestataire.idprestation and message.envoyeur= :unId and conversation.idevent = :unIdEvent '
                . ' ORDER BY message.idmessage desc '
        );

        $requetePrepare->bindParam(':unIdEvent', $idevent, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }
    /**
     * avoir le texte du message en fonction de son id
     */
    public function  getMessage($idmessage)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT message.idmessage, message.text, message.date, prestataire.libelle as libellepresta, prestation.libelle as libelleprestation, conversation.objet,conversation.idconversation as idconv,  message.heure, message.lu, message.idconversation, envoyeur '
                . 'FROM message, conversation, prestation, prestataire '
                . 'WHERE message.idconversation=conversation.idconversation and conversation.idprestataire=prestataire.id and prestation.id = prestataire.idprestation and message.idmessage = :unId '
        );

        $requetePrepare->bindParam(':unId', $idmessage, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

        /**
     * avoir le texte du message en fonction de son id
     */
    public function  getMessageEntreprise($idmessage)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT message.idmessage, message.text, message.date,utilisateur.nom, utilisateur.prenom, conversation.objet,conversation.idconversation as idconv,  message.heure, message.lu, message.idconversation, envoyeur '
                . 'FROM message, conversation, utilisateur '
                . 'WHERE message.idconversation=conversation.idconversation and conversation.idutilisateur=utilisateur.id and message.idmessage = :unId '
        );

        $requetePrepare->bindParam(':unId', $idmessage, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    /**
     * methode qui permet d'avoir le nombre de messages recus
     */
    public function getNbrMessagesRecus($id, $idevent)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT count(*) '
                . 'FROM message, conversation '
                . 'WHERE message.idconversation=conversation.idconversation and message.receveur= :unId and conversation.idevent = :unIdEvent '
        );

        $requetePrepare->bindParam(':unIdEvent', $idevent, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    /**
     * methode qui permet d'avoir le nombre de messages recus pour le prestataire
     */
    public function getNbrMessagesRecusPresta($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT count(*) '
                . 'FROM message, conversation '
                . 'WHERE message.idconversation=conversation.idconversation and message.receveur= :unId '
        );

        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }
    /**
     * methode qui permet d'avoir le nombre de messages envoyes
     */
    public function getNbrMessagesEnvoyes($id, $idevent)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT count(*) '
                . 'FROM message, conversation '
                . 'WHERE message.idconversation=conversation.idconversation and message.envoyeur= :unId and conversation.idevent = :unIdEvent '
        );

        $requetePrepare->bindParam(':unIdEvent', $idevent, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

     /**
     * methode qui permet d'avoir le nombre de messages envoyes
     */
    public function getNbrMessagesEnvoyesPresta($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT count(*) '
                . 'FROM message, conversation '
                . 'WHERE message.idconversation=conversation.idconversation and message.envoyeur= :unId '
        );

        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    //methode qui me permet d'avoir juste le libelle de l'evenement (utilise lorsqu'il va vouloir faire une nouvelle discussion avec un prestataire)
    public function getLibelleEvent($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT evenement.date AS date, evenement.idevent AS typeevent '
                . 'FROM evenement '
                . 'WHERE evenement.id= :unId '
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    //Methoe qui insere une nouvelle conversation
    public function newConv($idutilisateur, $idpresta, $idevent, $objet)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'INSERT INTO conversation (idutilisateur, idprestataire, idevent, objet)'
                . 'VALUES(:unIdutilisateur, :unPresta, :unIdevent, :unObjet)'
        );

        $requetePrepare->bindParam(':unIdutilisateur', $idutilisateur, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unPresta', $idpresta, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unIdevent', $idevent,  PDO::PARAM_STR);
        $requetePrepare->bindParam(':unObjet', $objet,  PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    //methode qui retourne l'id de la conversation our pouvoir enregistrer les messages
    public function getidconv($idutilisateur, $idpresta, $idevent, $objet)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT idconversation as idconv '
                . 'FROM conversation '
                . 'WHERE conversation.idutilisateur= :unIdutilisateur and conversation.idprestataire= :unPresta and conversation.idevent= :unIdevent and conversation.objet= :unObjet '

        );

        $requetePrepare->bindParam(':unIdutilisateur', $idutilisateur, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unPresta', $idpresta, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unIdevent', $idevent,  PDO::PARAM_STR);
        $requetePrepare->bindParam(':unObjet', $objet,  PDO::PARAM_STR);
        $requetePrepare->execute();

        return $requetePrepare->fetchAll();
    }

    //methode qui enregistre un message dans la table message
    //je commence a l'utiliser lorsque le premier message est envoye 
    // pour ca on a prit l'id de la conversation et grace a ca on sait de quel evenemnt il s'agit donc de l'utilisateur et aussi quel prestataire est sollicite
    // on insere donc un premeir message de la table message 
    // donc le receveur est inevitablement le prestataire et l'envoyeur est l'uitlisateur
    public function  newMessage($text, $idconv, $idutilisateur, $idpresta)
    {
        date_default_timezone_set('Europe/Paris');
        $date = date("d/m/Y");
        $heure = date("H:i");
        $lu = 1;

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'INSERT INTO message (text, date, heure, lu, idconversation, receveur, envoyeur)'
                . 'VALUES(:unMessage, :uneDate, :uneHeure, :unLu, :unIdConv, :unIdReceveur, :unIdEnvoyeur)'
        );
        $requetePrepare->bindParam(':unMessage', $text, PDO::PARAM_STR);
        $requetePrepare->bindParam(':uneDate', $date, PDO::PARAM_STR);
        $requetePrepare->bindParam(':uneHeure', $heure, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unLu', $lu, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unIdConv', $idconv, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unIdEnvoyeur', $idutilisateur, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unIdReceveur', $idpresta, PDO::PARAM_STR);

        $requetePrepare->execute();
    }

    //requete qui permet d'avoir le mail d'un prestataire , pour que une fois le message lui ait envoye alors on li envoie un mail pour le prevenir
    public function getMailPresta($idpresta)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT mail as mail '
                . 'FROM prestataire '
                . 'WHERE prestataire.id= :unIdPresta '

        );

        $requetePrepare->bindParam(':unIdPresta', $idpresta, PDO::PARAM_STR);

        $requetePrepare->execute();

        return $requetePrepare->fetchAll();
    }

    public function getMailUtilisateur($idUtilisateur)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT mail as mail '
                . 'FROM utilisateur '
                . 'WHERE utilisateur.id= :unId '

        );

        $requetePrepare->bindParam(':unId', $idUtilisateur, PDO::PARAM_STR);

        $requetePrepare->execute();

        return $requetePrepare->fetchAll();
    }

    //Requete qui permet d'avoir l'ensemble des prestataires contactes, et on fait une jointure pour avoir le nom, prenom, mail
    // ainsi que le message et pour avoir l'ensemble des convesration
    // je sais pas encore pour le message si ca sert a qq choses de le prendre maintenant , avoir pkus tard 
    public function getprestaconv($idutilisateur, $idevent)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT conversation.idconversation AS idconv, conversation.idprestataire AS idpresta, prestataire.libelle AS libellepresta, prestataire.mail AS mailpresta '
                . 'FROM conversation inner join prestataire ON conversation.idprestataire = prestataire.id '
                . 'WHERE conversation.idutilisateur= :unIdUtilisateur and conversation.idevent= :unIdEvent '
        );


        $requetePrepare->bindParam(':unIdUtilisateur', $idutilisateur, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unIdEvent', $idevent, PDO::PARAM_INT);
        $requetePrepare->execute();
        $prestaconv = array();
        return $requetePrepare->fetchAll();
    }

    //requete qui va chercher la conv en fonction du prestataire contacter, de l'utilisatezur et de l'evenement
    //pour nous permettre de bien verifier qu'il n'y a aucune discussion deja creer avant de creer une autre
    public function getconv($idutilisateur, $idevent, $idpresta)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT idconversation as idconv '
                . 'FROM conversation '
                . 'WHERE conversation.idutilisateur= :unIdUtilisateur and conversation.idevent= :unIdEvent and conversation.idprestataire= :unIdPresta '

        );

        $requetePrepare->bindParam(':unIdUtilisateur', $idutilisateur, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unIdEvent', $idevent, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unIdPresta', $idpresta, PDO::PARAM_INT);

        $requetePrepare->execute();

        return $requetePrepare->fetchAll();
    }

    //Requete qui permet d'avoir le nombre de message non lu, avec le nom du prestataire, et son prenom et l'id de la conversation
    public function getComptMess($idConv, $idutilisateur)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT count(*) AS nbmess '
                . 'FROM message '
                . 'WHERE idconversation= :unIdConv and message.lu= "1" and message.receveur = :unIdUtilisateur '
                . 'group by text '

        );
        $requetePrepare->bindParam(':unIdConv', $idConv, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unIdUtilisateur', $idutilisateur, PDO::PARAM_INT);
        $requetePrepare->execute();
        $prestaconv = array();
        return $requetePrepare->fetchAll();
    }

    //Requete qui recupere ts les messages de la conversation
    public function getmess($idconv)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT idmessage as idmess, text as mess, date, heure as heure, receveur, idconversation, envoyeur '
                . 'FROM message '
                . 'WHERE message.idconversation= :unIdConv '
                . 'ORDER BY date  asc, heure desc'

        );

        $requetePrepare->bindParam(':unIdConv', $idconv, PDO::PARAM_INT);

        $requetePrepare->execute();

        return $requetePrepare->fetchAll();
    }

    //Requete qui permet de recuperer le deux emes utilisateurs de la conversation
    public function getIdEnvoyeur($idconv, $idenvoyeur)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT distinct receveur as util '
                . 'FROM message '
                . 'WHERE message.idconversation= :unIdConv and message.envoyeur=:unIdEnvoyeur'

        );

        $requetePrepare->bindParam(':unIdConv', $idconv, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unIdEnvoyeur', $idenvoyeur, PDO::PARAM_INT);
        $requetePrepare->execute();

        return $requetePrepare->fetchAll();
    }

    //Requete qui permet de recuperer le deux emes utilisateurs de la conversation qd il s'agit du premier message
    public function getIdReceveur($idconv, $idenvoyeur)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT distinct envoyeur as util '
                . 'FROM message '
                . 'WHERE message.idconversation= :unIdConv and message.receveur=:unIdEnvoyeur'

        );

        $requetePrepare->bindParam(':unIdConv', $idconv, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unIdEnvoyeur', $idenvoyeur, PDO::PARAM_INT);
        $requetePrepare->execute();

        return $requetePrepare->fetchAll();
    }
    //Requete qui permet d'avoir le nom de l'event pour pouvoir le mettre dans l'entete de chq conv( ca peut servir aussi pour qu'on envois ca dans l mail aussi)
    public function getInfoConv($idconv)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT evenement.libelle, typeevent.libelle as libtype '
                . 'FROM evenement inner join typeevent on typeevent.id = evenement.id '
                . 'WHERE evenement.id= :unIdConv '

        );

        $requetePrepare->bindParam(':unIdConv', $idconv, PDO::PARAM_INT);

        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    //Avoir le nom et prenom de du recetioniste du message
    public function getNomReceptioniste($idconv, $idenvoyeur)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT receveur, prestataire.libelle '
                . 'FROM message inner join prestataire ON message.receveur = prestataire.id '
                . 'WHERE message.idconversation= :unIdConv and message.envoyeur=:unIdEnvoyeur '

        );

        $requetePrepare->bindParam(':unIdConv', $idconv, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unIdEnvoyeur', $idenvoyeur, PDO::PARAM_INT);
        $requetePrepare->execute();

        return $requetePrepare->fetchAll();
    }

    //Requete qui met un jour si le message est lu ou pas
    public function UpdateMessageLu($idconv, $idutilisateur)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'UPDATE message '
                . 'SET message.lu = 0 '
                . 'WHERE message.idconversation = :unIdConversation '
                . 'and message.receveur = :unReceveur '
        );

        $requetePrepare->bindParam(':unIdConversation', $idconv, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unReceveur', $idutilisateur, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    //requete qui me permet de verifier si l'utilisateur(prestataire) existe bien 
    public function getCnxPresta($mail, $mdp)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT id, libelle, mail '
                . 'FROM prestataire '
                . 'WHERE prestataire.mail = :unMail and prestataire.mdp = :unMdp'

        );

        $requetePrepare->bindParam(':unMail', $mail, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unMdp', $mdp, PDO::PARAM_STR);
        $requetePrepare->execute();

        return $requetePrepare->fetchAll();
    }

    //Requete qui nous permet d'avoir l'ensemble des prestations proposes :
    public function getPrestationIntitule()
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT id, libelle '
                . 'FROM prestation '

        );
        $requetePrepare->execute();

        return $requetePrepare->fetchAll();
    }
    //Requete qui permet l'insertion d'un nouveau prestataire
    public function InsertNewPrestataire($mail, $mdp, $libelle, $ville, $adr, $siret, $coco, $description, $presta, $cont_nom, $cont_email, $cont_tel, $contact, $tarifs)
    {
        //pour l'instant le lieux je met idlieux 1;
        $idlieux = "1";
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'INSERT INTO prestataire (libelle, logo, contact, cont_tel, description, adr, idprestation, idlieux, mdp, mail, siret, cont_nom, cont_email, ville, tarifs)'
                . 'VALUES(:unLibelle, :unLogo, :unContact, :unConttel, :uneDescription, :uneAdr, :uneIdpresta, :unIdlieux, :unMdp, :unMail, :unSiret, :unCont_nom, :unCont_email, :uneVille, :unTarifs)'
        );

        $requetePrepare->bindParam(':unMail', $mail, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unMdp', $mdp, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unLibelle', $libelle,  PDO::PARAM_STR);
        $requetePrepare->bindParam(':uneVille', $ville, PDO::PARAM_STR);
        $requetePrepare->bindParam(':uneAdr', $adr, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unSiret', $siret, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unLogo', $coco, PDO::PARAM_STR);
        $requetePrepare->bindParam(':uneDescription', $description, PDO::PARAM_STR);
        $requetePrepare->bindParam(':uneIdpresta', $presta, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unCont_nom', $cont_nom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unCont_email', $cont_email, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unConttel', $cont_tel, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unContact', $contact, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unTarifs', $tarifs, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unIdlieux', $idlieux, PDO::PARAM_INT);



        $requetePrepare->execute();
    }
    //Requete qui permet d'avoir les caracteristqiue d'un prestataire
    public function getPrestaCaract($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT prestataire.logo, prestataire.libelle,cont_nom, mdp, cont_email, prestataire.contact as site, siret, prestataire.cont_tel as tel, prestataire.description as description, adr, mail, tarifs, ville, prestation.libelle as libelleprestataion, prestation.id as idprestation '
                . 'FROM prestataire INNER JOIN prestation ON prestataire.idprestation = prestation.id '
                . 'WHERE prestataire.id= :unId '
        );
        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
        $prestataire = array();
        return $requetePrepare->fetchAll();
    }

    //requete qui met un jour les info sur un prestataire en fonction de son id
    public function updateCaract($id, $mail, $libelle, $tarifs, $ville, $adr, $siret, $description, $presta, $cont_nom, $cont_email, $cont_tel, $contact)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'UPDATE prestataire '
                . 'SET libelle = :unLibelle, '
                // . 'logo = :unLogo, '
                . 'contact = :unContact, '
                . 'cont_tel = :unConttel, '
                . 'description = :uneDescription, '
                . 'adr = :uneAdr, '
                . 'tarifs = :unTarifs, '
                . 'idprestation = :uneIdpresta, '
                . 'mail = :unMail, '
                . 'siret = :unSiret, '
                . 'cont_nom = :unCont_nom, '
                . 'cont_email = :unCont_email, '
                . 'ville = :uneVille '
                . 'WHERE id = :unId '
        );

        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unMail', $mail, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unLibelle', $libelle,  PDO::PARAM_STR);
        $requetePrepare->bindParam(':unTarifs', $tarifs,  PDO::PARAM_STR);
        $requetePrepare->bindParam(':uneVille', $ville, PDO::PARAM_STR);
        $requetePrepare->bindParam(':uneAdr', $adr, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unSiret', $siret, PDO::PARAM_STR);
        // $requetePrepare->bindParam(':unLogo', $coco, PDO::PARAM_STR);
        $requetePrepare->bindParam(':uneDescription', $description, PDO::PARAM_STR);
        $requetePrepare->bindParam(':uneIdpresta', $presta, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unCont_nom', $cont_nom, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unCont_email', $cont_email, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unConttel', $cont_tel, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unContact', $contact, PDO::PARAM_STR);



        $requetePrepare->execute();
    }

    //Requete qui permet d'avoir l'ensemble des clients avec qui le prestataire a eu une conversation avec le nom de l'e
    // avec le nom de l'evenement  
    public function getclientconv($idprestataire)
    {

        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT conversation.idconversation AS idconv, conversation.idutilisateur AS idutilisateur, conversation.idevent as idevent, evenement.libelle AS libelleevent '
                . 'FROM conversation inner join evenement ON conversation.idevent = evenement.id '
                . 'WHERE conversation.idprestataire= :unIdpresta '

        );


        $requetePrepare->bindParam(':unIdpresta', $idprestataire, PDO::PARAM_INT);
        $requetePrepare->execute();
        $prestaconv = array();
        return $requetePrepare->fetchAll();
    }

    //requte qui permet d'avoir l'ensemble des caracteristique a affiche dans la conversation du cote presta
    //le nom et prenom de l'utilisateur avec le type de l'event
    public function getInfoEvent($idconv)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT evenement.libelle as libelleevent, typeevent.libelle as libtype, utilisateur.nom as nomutil, utilisateur.prenom as prenomutil '
                . 'FROM evenement, typeevent, utilisateur, conversation '
                . 'WHERE typeevent.id = evenement.idevent and evenement.idutilisateur = utilisateur.id and conversation.id= :unIdConv '

        );

        $requetePrepare->bindParam(':unIdConv', $idconv, PDO::PARAM_INT);

        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    //Requete qui permet d'avoir l'ensemble des evenements auquel le prestataire participe
    public function getevent($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT eventpresta.idevent as idevent, evenement.idutilisateur, utilisateur.nom as nom, utilisateur.prenom as prenom, evenement.date as date, evenement.ville as ville, evenement.libelle as libelle, evenement.idevent as idevent, typeevent.libelle as typeevent '
                . 'FROM eventpresta, evenement, typeevent, utilisateur '
                . 'WHERE evenement.id = eventpresta.idevent and evenement.idevent=typeevent.id and utilisateur.id=evenement.idutilisateur and eventpresta.idpresta= :unIdConv '

        );

        $requetePrepare->bindParam(':unIdConv', $id, PDO::PARAM_INT);

        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    /**
     * requete qui va chercher tous les caracteristique du prestataire que le utilisateur
     * a un contrat avec lui pour @idevent
     */

    public function getprestacontrats($idevent)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT * '
                . 'FROM eventpresta, prestataire '
                . 'WHERE prestataire.id = eventpresta.idpresta and eventpresta.idevent = :unIdConv '

        );

        $requetePrepare->bindParam(':unIdConv', $idevent, PDO::PARAM_INT);

        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }



    //Requete qui permet d'avoir tous les details d'un evenement
    public function getdetailevent($idevent)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT evenement.idutilisateur, utilisateur.nom as nom, utilisateur.prenom as prenom, evenement.date as date, evenement.ville as ville, evenement.libelle as libelle, evenement.idevent as idevent, typeevent.libelle as typeevent '
                . 'FROM evenement, typeevent, utilisateur '
                . 'WHERE evenement.idevent=typeevent.id and utilisateur.id=evenement.idutilisateur and evenement.id= :unIdEvent '

        );

        $requetePrepare->bindParam(':unIdEvent', $idevent, PDO::PARAM_INT);

        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    //requete qui me permet d'avoir l'id de l'event, et d'autre chose sur l'evenement en fonction de la date et du nom de l'utilisateur
    public function getIdEventParam($nom, $date)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT evenement.id as idevent, evenement.idutilisateur as idutil '
                . 'FROM evenement, utilisateur '
                . 'WHERE utilisateur.id=evenement.idutilisateur and evenement.date= :uneDate and utilisateur.nom= :unNom '

        );

        $requetePrepare->bindParam(':unNom', $nom, PDO::PARAM_INT);
        $requetePrepare->bindParam(':uneDate', $date, PDO::PARAM_INT);

        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    //requete qui me permet de verifier si y'a deja un contrat et si oui est ce que l'id utilisateur es a un 
    public function getContrat($idevent, $idpresta)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT * '
                . 'FROM contrat '
                . 'WHERE contrat.idevent= :unIdEvent and contrat.idpresta= :unIdPresta '

        );

        $requetePrepare->bindParam(':unIdEvent', $idevent, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unIdPresta', $idpresta, PDO::PARAM_INT);

        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    //requete qui permet d'inserer un nouveau contrat du cote prestataire
    public function insertContratPrestataire($idevent, $idpresta, $lieu, $date_signature, $budget)
    {
        $approuv_presta = 1;
        $prouv_util = 0;

        $requetePrepare = PdoMiiting::$monPdo->prepare(
                'INSERT INTO contrat (idevent, idpresta, approuv_presta, approuv_util, lieu, date_signature, budget)'
                    . 'VALUES(:unIdEvent, :IdPresta, :approuvPresta, :approuvUtil, :unLieu, :uneDateSignature, :unBudget)'
            );
        $requetePrepare->bindParam(':unIdEvent', $idevent, PDO::PARAM_INT);
        $requetePrepare->bindParam(':IdPresta', $idpresta, PDO::PARAM_INT);
        $requetePrepare->bindParam(':approuvPresta', $approuv_presta, PDO::PARAM_STR);
        $requetePrepare->bindParam(':approuvUtil', $prouv_util, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unLieu', $lieu, PDO::PARAM_STR);
        $requetePrepare->bindParam(':uneDateSignature', $date_signature, PDO::PARAM_STR);
        $requetePrepare->bindParam(':unBudget', $budget, PDO::PARAM_STR);


        $requetePrepare->execute();
    }

    // requete qui met a jour la table contrat, lorsque le contrat a deja ete creer par l'utilisateur et que le prestataire
    // la confirmer
    public function updateContratApprouvPresta($idcontrat)
    {
        $approuv_presta = 1;
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'UPDATE contrat '
                . 'SET approuv_presta = :approuvpresta '
                . 'WHERE id = :unId '
        );

        $requetePrepare->bindParam(':unId', $idcontrat, PDO::PARAM_INT);
        $requetePrepare->bindParam(':approuvpresta', $approuv_presta, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    //nous permets d'avoir les prestataires selon son nom
    public function getPrestAvecNom($libelle)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT libelle, id '
                . 'FROM prestataire '
                . 'WHERE libelle=:unLibelle '

        );

        $requetePrepare->bindParam(':unLibelle', $libelle, PDO::PARAM_STR);

        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    //permet d'avoir les prestations seon le libelle de la prestations recherches
    public function getPrestationNom($libelle)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT libelle, id '
                . 'FROM prestation '
                . 'WHERE libelle=:unLibelle '

        );

        $requetePrepare->bindParam(':unLibelle', $libelle, PDO::PARAM_STR);

        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }


    public function updateforimg($path, $id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'UPDATE evenement '
                . 'SET evenement.image = :path '
                . 'WHERE evenement.id = :id '
        );

        $requetePrepare->bindParam(':path', $path, PDO::PARAM_STR);
        $requetePrepare->bindParam(':id', $id, PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    /**
     * fonction qui permet d'avoir le nombre de conversation du prestataire
     */
    public function getNbConvPresta($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT count(*) as nbconv '
                . 'FROM conversation '
                . 'WHERE idprestataire=:unId '

        );

        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);

        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    /**
     * fonction qui permet d'avoir le nombre de conversation de contrats
     */
    public function getNbContratsPresta($id)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT count(*) as nbcontrat '
                . 'FROM contrat '
                . 'WHERE idpresta=:unId '

        );

        $requetePrepare->bindParam(':unId', $id, PDO::PARAM_STR);

        $requetePrepare->execute();
        return $requetePrepare->fetchAll();
    }

    /**
     * requete pour avoir les questions frequentes
     */
    public function getQuestionsIntitule()
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'SELECT * '
                . 'FROM questionspresta  '
        );
        $requetePrepare->execute();
        $prestataire = array();
        return $requetePrepare->fetchAll();
    }

    /**
     * requete qui insere les questions
     */
    public function insertFaq($idpresta, $idquestion, $rep)
    {
        $requetePrepare = PdoMiiting::$monPdo->prepare(
            'INSERT INTO faq(idquestion, reponse, idpresta)'
                . 'VALUES(:unIdQuest, :uneRep, :unId)'
        );

        $requetePrepare->bindParam(':unId', $idpresta, PDO::PARAM_INT);
        $requetePrepare->bindParam(':unIdQuest', $idquestion, PDO::PARAM_INT);
        $requetePrepare->bindParam(':uneRep', $rep,  PDO::PARAM_STR);
        $requetePrepare->execute();
    }

    //     /**
    //      * 
    //      */
    //     public function updatemess($path, $id)
    //     {
    //         $requetePrepare = PdoMiiting::$monPdo->prepare(         
    //             'UPDATE evenement '
    //          . 'SET evenement.image = :path ' 
    //          . 'WHERE evenement.id = :id '
    //      );

    //    $requetePrepare->bindParam(':path', $path, PDO::PARAM_STR);
    //    $requetePrepare->bindParam(':id', $id, PDO::PARAM_STR);
    //    $requetePrepare->execute();  
    //     }

}
