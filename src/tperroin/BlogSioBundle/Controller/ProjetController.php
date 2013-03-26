<?php

namespace tperroin\BlogSioBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use tperroin\BlogSioBundle\Entity\Projet;
use tperroin\BlogSioBundle\Form\ProjetType;

/**
 * Projet controller.
 *
 */
class ProjetController extends Controller
{
    /**
     * Lists all Projet entities.
     *
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('tperroinBlogSioBundle:Projet')->findAll();

        return $this->render('tperroinBlogSioBundle:Projet:index.html.twig', array(
            'entities' => $entities,
        ));
    }

    /**
     * Finds and displays a Projet entity.
     *
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('tperroinBlogSioBundle:Projet')->find($id);
        
        

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render(sprintf('tperroinBlogSioBundle:Projet:show.html.twig', $this->getRequest()->getRequestFormat()), array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),     ));
    }

    /**
     * Displays a form to create a new Projet entity.
     *
     */
    public function newAction()
    {
        $entity = new Projet();
        $form   = $this->createForm(new ProjetType(), $entity);

        return $this->render('tperroinBlogSioBundle:Projet:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Creates a new Projet entity.
     *
     */
    public function createAction(Request $request)
    {
        $entity  = new Projet();
        $form = $this->createForm(new ProjetType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('projet_show', array('id' => $entity->getId())));
        }

        return $this->render('tperroinBlogSioBundle:Projet:new.html.twig', array(
            'entity' => $entity,
            'form'   => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Projet entity.
     *
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('tperroinBlogSioBundle:Projet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projet entity.');
        }

        $editForm = $this->createForm(new ProjetType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('tperroinBlogSioBundle:Projet:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Edits an existing Projet entity.
     *
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('tperroinBlogSioBundle:Projet')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Projet entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new ProjetType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('projet_edit', array('id' => $id)));
        }

        return $this->render('tperroinBlogSioBundle:Projet:edit.html.twig', array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Projet entity.
     *
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('tperroinBlogSioBundle:Projet')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Projet entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('projet'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
