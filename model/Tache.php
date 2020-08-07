<?php

  /**
   *Classe qui permet d'instancier une Tache
   *@author Daniel Soudry
   */
  class Tache
  {
    /**
     *Variable Id de la tache (integer)
     */
    private $idTache;
    /**
     *Variable libellé de la tache (varchar)
     */
    private $libelle;
    /**
     *Variable échéance de la tache (date)
     */
    private $echeance;
    /**
     *Variable description de la tache (varchar)
     */
    private $description;
    /**
     *Variable avancement de la tache (integer)
     */
    private $avancement;
    /**
     *Variable fait de la tache (boolean)
     */
    private $fait;
    /**
     *Variable clé étrangère de la tache (id de la famille) (integer)
     */
    private $idFamille;

    function __construct($unLib, $uneEcheance, $uneDes,$unAvancement, $unFait, $unIdFamille, $unIdTache=0)
    {
      $this->idTache = $unIdTache;
      $this->libelle = $unLib;
      $this->echeance = $uneEcheance;
      $this->description = $uneDes;
      $this->avancement = $unAvancement;
      $this->fait = $unFait;
      $this->idFamille = $unIdFamille;
    }

    /**
     *Fonction qui renvoie l'id de la tache
     */
    public function getIdTache()
    {
        return $this->idTache;
    }

    /**
     *Fonction qui renvoie le libellé de la tache
     */
    public function getLibelle()
    {
        return $this->libelle;
    }
    /**
     *Fonction qui modifie le libellé de la tache
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     *Fonction qui renvoie l'échéance de la tache
     */
    public function getEcheance()
    {
        return $this->echeance;
    }

    /**
     *Fonction qui modifie l'échéance de la tache
     */
    public function setEcheance($echeance)
    {
        $this->echeance = $echeance;

        return $this;
    }

    /**
     *Fonction qui renvoie la description de la tache
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     *Fonction qui modifie la description de la tache
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     *Fonction qui renvoie la description de la tache
     */
    public function getAvancement()
    {
        return $this->avancement;
    }

    /**
     *Fonction qui modifie la description de la tache
     */
    public function setAvancement($avancement)
    {
        $this->avancement = $avancement;

        return $this;
    }

    /**
     *Fonction qui renvoie si la tache est faite ou pas
     */
    public function getFait()
    {
        return $this->fait;
    }

    /**
     *Fonction qui modifie l'état de la tache
     */
    public function setFait($fait)
    {
        $this->fait = $fait;

        return $this;
    }

    /**
     *Fonction qui renvoie la clé étrangère de la tache
     */
    public function getIdFamille()
    {
        return $this->idFamille;
    }

    public function setIdFamille($idFamille)
    {
        $this->idFamille = $idFamille;

        return $this;
    }

}



?>
