<?php

  /**
   *Classe qui permet d'instancier une Famille
   *@author Daniel Soudry
   */
  class Famille
  {
    /**
     *Variable Id de la famille (integer)
     */
    private $idFamille;
    /**
     *Variable libellé de la famille (varchar)
     */
    private $libelle;

    function __construct($unLib, $unIdFamille=0)
    {
      $this->idFamille = $unIdFamille;
      $this->libelle = $unLib;
    }

    /**
     *Fonction qui renvoie l'id de la famille
     */
    public function getIdFamille()
    {
        return $this->idFamille;
    }

    /**
     *Fonction qui modifie l'id de la famille
     */
    public function setIdFamille($idFamille)
    {
        $this->idFamille = $idFamille;

        return $this;
    }

    /**
     *Fonction qui renvoie le libellé de la famille
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     *Fonction qui modifie le libellé de la famille
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }



}



?>
