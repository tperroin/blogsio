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
        return $this->render('tperroinBlogSioBundle:Default:projets.html.twig');
    }
    
   
}
