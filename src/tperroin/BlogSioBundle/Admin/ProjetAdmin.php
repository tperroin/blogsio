<?php

// src/tperoin/BlogSioBundle/Admin/ProjetAdmin.php
 
namespace tperroin\BlogSioBundle\Admin;
 
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\AdminBundle\Form\FormMapper;
 
class ProjetAdmin extends Admin
{
    // setup the default sort column and order
    protected $datagridValues = array(
        '_sort_order' => 'DESC',
        '_sort_by' => 'created_at'
    );
 
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('date')
            ->add('auteur')
            ->add('titre')
            ->add('teaser')
            ->add('presentation', 'textarea', array('required' => false,'attr' => array('class' => 'ckeditor')))
            ->add('ressources', 'textarea', array('required' => false,'attr' => array('class' => 'ckeditor')))
            ->add('dossierTechnique', 'textarea', array('required' => false,'attr' => array('class' => 'ckeditor')))
            ->add('configSources', 'textarea', array('required' => false,'attr' => array('class' => 'ckeditor')))
            ->add('activitesCompetences', 'textarea', array('required' => false,'attr' => array('class' => 'ckeditor')))
            ->add('bilan', 'textarea', array('required' => false,'attr' => array('class' => 'ckeditor')))
                ->end()
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('date')
            ->add('auteur')
            ->add('titre')
            ->add('teaser')
            ->add('presentation')
            ->add('ressources')
            ->add('dossierTechnique')
            ->add('configSources')
            ->add('activitesCompetences')
            ->add('bilan')
             
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('date')
            ->add('auteur')
            ->add('titre')
            ->add('teaser')
            ->add('presentation')
            ->add('ressources')
            ->add('dossierTechnique')
            ->add('configSources')
            ->add('activitesCompetences')
            ->add('bilan')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'view' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }
    

}
