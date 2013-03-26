<?php

namespace tperroin\BlogSioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('tperroinBlogSioBundle:Default:index.html.twig');
    }
    
    public function projetsAction()
    {
        
        $em = $this->getDoctrine()->getEntityManager();
 
        $entities = $em->getRepository('tperroinBlogSioBundle:Projet')->findAll();
    
        return $this->render('tperroinBlogSioBundle:Projet:index.html.twig', array(
        'entities' => $entities));
    }
    
   
}
