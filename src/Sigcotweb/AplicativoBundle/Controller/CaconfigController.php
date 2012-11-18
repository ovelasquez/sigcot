<?php

namespace Sigcotweb\AplicativoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sigcotweb\AplicativoBundle\Entity\Caconfig;
use Sigcotweb\AplicativoBundle\Form\CaconfigType;

/**
 * Caconfig controller.
 *
 * @Route("/configcajadeahorro")
 */
class CaconfigController extends Controller
{
    /**
     * Lists all Caconfig entities.
     *
     * @Route("/", name="configcajadeahorro")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AplicativoBundle:Caconfig')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Caconfig entity.
     *
     * @Route("/{id}/show", name="configcajadeahorro_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Caconfig')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caconfig entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Caconfig entity.
     *
     * @Route("/new", name="configcajadeahorro_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Caconfig();
        $form   = $this->createForm(new CaconfigType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Caconfig entity.
     *
     * @Route("/create", name="configcajadeahorro_create")
     * @Method("POST")
     * @Template("AplicativoBundle:Caconfig:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Caconfig();
        $form = $this->createForm(new CaconfigType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('configcajadeahorro_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Caconfig entity.
     *
     * @Route("/{id}/edit", name="configcajadeahorro_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Caconfig')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caconfig entity.');
        }

        $editForm = $this->createForm(new CaconfigType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Caconfig entity.
     *
     * @Route("/{id}/update", name="configcajadeahorro_update")
     * @Method("POST")
     * @Template("AplicativoBundle:Caconfig:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Caconfig')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caconfig entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CaconfigType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('configcajadeahorro_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Caconfig entity.
     *
     * @Route("/{id}/delete", name="configcajadeahorro_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AplicativoBundle:Caconfig')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Caconfig entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('configcajadeahorro'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
