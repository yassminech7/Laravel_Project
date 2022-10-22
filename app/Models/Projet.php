<?php
namespace App\Models;
class Projet{
    private $identifiant;
    private $titre;
    private $prix;
    private $description;
    private $delai_livraison;

    public function __construct($identifiant,$titre,$prix,$description,$delai_livraison)
    {
        $this->identifiant=$identifiant;
        $this->titre=$titre;
        $this->prix=$prix;
        $this->description=$description;
        $this->delai_livraison=$delai_livraison;
    }

    public function setident($identifiant)
    { $this->identifiant=$identifiant; }
    public function getident()
    { return $this->identifiant; }

    public function settitre($titre)
    { $this->titre=$titre; }
    public function gettitre()
    { return $this->titre; }

    public function setprix($prix)
    { $this->prix=$prix; }
    public function getprix()
    { return $this->prix; }

    public function setdesc($description)
    { $this->description=$description; }
    public function getdesc()
    { return $this->description; }

    public function setliv($delai_livraison)
    { $this->delai_livraison=$delai_livraison; }
    public function getliv()
    { return $this->delai_livraison; }

}