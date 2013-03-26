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
            ->add('contenu', 'textarea', array('required' => false,'attr' => array('class' => 'ckeditor')))
            ->add('image', 'file', array('label' => 'Image', 'required' => false))
                
            ->add('teaser')
                ->end()
        ;
    }
 
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('date')
            ->add('auteur')
            ->add('titre')
            ->add('contenu')
            ->add('image')
            ->add('teaser')
        ;
    }
 
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->addIdentifier('id')
            ->add('date')
            ->add('auteur')
            ->add('titre')
            ->add('contenu')
            ->add('image')
            ->add('teaser')
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
