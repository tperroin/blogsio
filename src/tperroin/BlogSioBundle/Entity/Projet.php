<?php

namespace tperroin\BlogSioBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Projet
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Projet
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="teaser", type="string", length=255)
     */
    private $teaser;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="auteur", type="string", length=255)
     */
    private $auteur;

    /**
     * @var string
     *
     * @ORM\Column(name="presentation", type="string", length=255)
     */
    private $presentation;

    /**
     * @var string
     *
     * @ORM\Column(name="ressources", type="string", length=255)
     */
    private $ressources;

    /**
     * @var string
     *
     * @ORM\Column(name="dossierTechnique", type="string", length=255)
     */
    private $dossierTechnique;

    /**
     * @var string
     *
     * @ORM\Column(name="configSources", type="string", length=255)
     */
    private $configSources;

    /**
     * @var string
     *
     * @ORM\Column(name="activitesCompetences", type="string", length=255)
     */
    private $activitesCompetences;

    /**
     * @var string
     *
     * @ORM\Column(name="bilan", type="string", length=255)
     */
    private $bilan;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     * @return Projet
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;
    
        return $this;
    }

    /**
     * Get titre
     *
     * @return string 
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set teaser
     *
     * @param string $teaser
     * @return Projet
     */
    public function setTeaser($teaser)
    {
        $this->teaser = $teaser;
    
        return $this;
    }

    /**
     * Get teaser
     *
     * @return string 
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     * @return Projet
     */
    public function setDate($date)
    {
        $this->date = $date;
    
        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set auteur
     *
     * @param string $auteur
     * @return Projet
     */
    public function setAuteur($auteur)
    {
        $this->auteur = $auteur;
    
        return $this;
    }

    /**
     * Get auteur
     *
     * @return string 
     */
    public function getAuteur()
    {
        return $this->auteur;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     * @return Projet
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;
    
        return $this;
    }

    /**
     * Get presentation
     *
     * @return string 
     */
    public function getPresentation()
    {
        return $this->presentation;
    }

    /**
     * Set ressources
     *
     * @param string $ressources
     * @return Projet
     */
    public function setRessources($ressources)
    {
        $this->ressources = $ressources;
    
        return $this;
    }

    /**
     * Get ressources
     *
     * @return string 
     */
    public function getRessources()
    {
        return $this->ressources;
    }

    /**
     * Set dossierTechnique
     *
     * @param string $dossierTechnique
     * @return Projet
     */
    public function setDossierTechnique($dossierTechnique)
    {
        $this->dossierTechnique = $dossierTechnique;
    
        return $this;
    }

    /**
     * Get dossierTechnique
     *
     * @return string 
     */
    public function getDossierTechnique()
    {
        return $this->dossierTechnique;
    }

    /**
     * Set configSources
     *
     * @param string $configSources
     * @return Projet
     */
    public function setConfigSources($configSources)
    {
        $this->configSources = $configSources;
    
        return $this;
    }

    /**
     * Get configSources
     *
     * @return string 
     */
    public function getConfigSources()
    {
        return $this->configSources;
    }

    /**
     * Set activitesCompetences
     *
     * @param string $activitesCompetences
     * @return Projet
     */
    public function setActivitesCompetences($activitesCompetences)
    {
        $this->activitesCompetences = $activitesCompetences;
    
        return $this;
    }

    /**
     * Get activitesCompetences
     *
     * @return string 
     */
    public function getActivitesCompetences()
    {
        return $this->activitesCompetences;
    }

    /**
     * Set bilan
     *
     * @param string $bilan
     * @return Projet
     */
    public function setBilan($bilan)
    {
        $this->bilan = $bilan;
    
        return $this;
    }

    /**
     * Get bilan
     *
     * @return string 
     */
    public function getBilan()
    {
        return $this->bilan;
    }
}
