<?php

// src/tperroin/BlogSioBundle/DataFixtures/ORM/LoadProjetData.php
namespace tperroin\BlogSioBundle\DataFixtures\ORM;
 
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use tperroin\BlogSioBundle\Entity\Projet;
 
class LoadProjetData extends AbstractFixture implements OrderedFixtureInterface
{
  public function load(ObjectManager $em)
  {
    $projet = new Projet();
    $projet->setTitre('Moskito');
    $projet->setDate(new Date());
    $projet->setContenu('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
    $projet->setTeaser('Projet de ouff!!!!!');
    $projet->setAuteur('moi');
    
    $projet1 = new Projet();
    $projet1->setTitre('Moskito1');
    $projet1->setDate(new Date());
    $projet1->setContenu('Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in.');
    $projet1->setTeaser('Projet de ouff!!!!!');
    $projet1->setAuteur('moi');
  
    $em->persist($projet);
    $em->persist($projet1);
 
    $em->flush();
  }
 
  public function getOrder()
  {
    return 2; // the order in which fixtures will be loaded
  }
}