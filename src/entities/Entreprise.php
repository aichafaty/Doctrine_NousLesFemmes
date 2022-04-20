<?php

//namespace src\entities;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
/**
 * @ORM\Entity
 * @ORM\Table(name="entreprise")
 */
class Entreprise{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    private $id;
    /**
     * @ORM\Column(type="string")
     */
    private $nom_entreprise;

    /**
     * @ORM\Column(type="string")
     */
    private $nom_repondant;

    /**
     * @ORM\Column(type="string")
     */
    private $email_repondant;

    /**
     * @ORM\Column(type="string")
     */
    private $siege_social;

    /**
     * @ORM\Column(type="date")
     */
    private $date_creation;

    /**
     * @ORM\Column(type="string")
     */
    private $registre_commerce;

    /**
     * @ORM\Column(type="string")
     */
    private $ninea;

    /**
     * @ORM\Column(type="string")
     */
    private $domaine;

    /**
     * @ORM\Column(type="string")
     */
    private $page_web;

    /**
     * @ORM\Column(type="string")
     */
    private $organigramme;

    /**
     * @ORM\Column(type="integer")
     */
    private $cotisation;


    /**
     *Many entreprises have one quartier. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Quartier", inversedBy="entreprises")
     *@ORM\JoinColumn(name="quartier_id", referencedColumnName="id")
     */

    private $quartier;
    /**
     * Many entreprises have one statut_juridique. This is the owning side.
     *@ORM\ ManyToOne(targetEntity="Statut_juridique", inversedBy="entreprises")
     * @ORM\JoinColumn(name="statut_id", referencedColumnName="id")
     */
    private $statut_juridique;




    public function __construct()
    {

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getNomEntreprise()
    {
        return $this->nom_entreprise;
    }

    /**
     * @param mixed $nom_entreprise
     */
    public function setNomEntreprise($nom_entreprise)
    {
        $this->nom_entreprise = $nom_entreprise;
    }

    /**
     * @return mixed
     */
    public function getNomRepondant()
    {
        return $this->nom_repondant;
    }

    /**
     * @param mixed $nom_repondant
     */
    public function setNomRepondant($nom_repondant)
    {
        $this->nom_repondant = $nom_repondant;
    }

    /**
     * @return mixed
     */
    public function getEmailRepondant()
    {
        return $this->email_repondant;
    }

    /**
     * @param mixed $email_repondant
     */
    public function setEmailRepondant($email_repondant)
    {
        $this->email_repondant = $email_repondant;
    }

    /**
     * @return mixed
     */
    public function getSiegeSocial()
    {
        return $this->siege_social;
    }

    /**
     * @param mixed $siege_social
     */
    public function setSiegeSocial($siege_social)
    {
        $this->siege_social = $siege_social;
    }

    /**
     * @return mixed
     */
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * @param mixed $date_creation
     */
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;
    }

    /**
     * @return mixed
     */
    public function getRegistreCommerce()
    {
        return $this->registre_commerce;
    }

    /**
     * @param mixed $registre_commerce
     */
    public function setRegistreCommerce($registre_commerce)
    {
        $this->registre_commerce = $registre_commerce;
    }

    /**
     * @return mixed
     */
    public function getNinea()
    {
        return $this->ninea;
    }

    /**
     * @param mixed $ninea
     */
    public function setNinea($ninea)
    {
        $this->ninea = $ninea;
    }

    /**
     * @return mixed
     */
    public function getDomaine()
    {
        return $this->domaine;
    }

    /**
     * @param mixed $domaine
     */
    public function setDomaine($domaine)
    {
        $this->domaine = $domaine;
    }

    /**
     * @return mixed
     */
    public function getPageWeb()
    {
        return $this->page_web;
    }

    /**
     * @param mixed $page_web
     */
    public function setPageWeb($page_web)
    {
        $this->page_web = $page_web;
    }

    /**
     * @return mixed
     */
    public function getOrganigramme()
    {
        return $this->organigramme;
    }

    /**
     * @param mixed $organigramme
     */
    public function setOrganigramme($organigramme)
    {
        $this->organigramme = $organigramme;
    }

    /**
     * @return mixed
     */
    public function getCotisation()
    {
        return $this->cotisation;
    }

    /**
     * @param mixed $cotisation
     */
    public function setCotisation($cotisation)
    {
        $this->cotisation = $cotisation;
    }

    /**
     * @return mixed
     */
    public function getQuartier()
    {
        return $this->quartier;
    }

    /**
     * @param mixed $quartier
     */
    public function setQuartier($quartier)
    {
        $this->quartier = $quartier;
    }

    /**
     * @return mixed
     */
    public function getStatutJuridique()
    {
        return $this->statut_juridique;
    }

    /**
     * @param mixed $statut_juridique
     */
    public function setStatutJuridique($statut_juridique)
    {
        $this->statut_juridique = $statut_juridique;
    }


}

?>
