<?php

namespace Sigcotweb\AplicativoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sigcotweb\AplicativoBundle\Entity\Caaportes;
use Sigcotweb\AplicativoBundle\Form\CaaportesType;

/**
 * Caaportes controller.
 *
 * @Route("/aportesdecajadeahorro")
 */
class CaaportesController extends Controller
{
    /**
     * Lists all Caaportes entities.
     *
     * @Route("/", name="aportesdecajadeahorro")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AplicativoBundle:Caaportes')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Caaportes entity.
     *
     * @Route("/{id}/show", name="aportesdecajadeahorro_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Caaportes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caaportes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Caaportes entity.
     *
     * @Route("/new", name="aportesdecajadeahorro_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Caaportes();
        $form   = $this->createForm(new CaaportesType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Caaportes entity.
     *
     * @Route("/create", name="aportesdecajadeahorro_create")
     * @Method("POST")
     * @Template("AplicativoBundle:Caaportes:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Caaportes();
        $form = $this->createForm(new CaaportesType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('aportesdecajadeahorro_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Caaportes entity.
     *
     * @Route("/{id}/edit", name="aportesdecajadeahorro_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Caaportes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caaportes entity.');
        }

        $editForm = $this->createForm(new CaaportesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Caaportes entity.
     *
     * @Route("/{id}/update", name="aportesdecajadeahorro_update")
     * @Method("POST")
     * @Template("AplicativoBundle:Caaportes:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Caaportes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caaportes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CaaportesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('aportesdecajadeahorro_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Caaportes entity.
     *
     * @Route("/{id}/delete", name="aportesdecajadeahorro_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AplicativoBundle:Caaportes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Caaportes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('aportesdecajadeahorro'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
