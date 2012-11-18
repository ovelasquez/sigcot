<?php

namespace Sigcotweb\AplicativoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sigcotweb\AplicativoBundle\Entity\Caprestamos;
use Sigcotweb\AplicativoBundle\Form\CaprestamosType;

/**
 * Caprestamos controller.
 *
 * @Route("/prestamoscajadeahorro")
 */
class CaprestamosController extends Controller
{
    /**
     * Lists all Caprestamos entities.
     *
     * @Route("/", name="prestamoscajadeahorro")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AplicativoBundle:Caprestamos')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Caprestamos entity.
     *
     * @Route("/{id}/show", name="prestamoscajadeahorro_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Caprestamos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caprestamos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Caprestamos entity.
     *
     * @Route("/new", name="prestamoscajadeahorro_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Caprestamos();
        $form   = $this->createForm(new CaprestamosType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Caprestamos entity.
     *
     * @Route("/create", name="prestamoscajadeahorro_create")
     * @Method("POST")
     * @Template("AplicativoBundle:Caprestamos:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Caprestamos();
        $form = $this->createForm(new CaprestamosType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('prestamoscajadeahorro_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Caprestamos entity.
     *
     * @Route("/{id}/edit", name="prestamoscajadeahorro_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Caprestamos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caprestamos entity.');
        }

        $editForm = $this->createForm(new CaprestamosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Caprestamos entity.
     *
     * @Route("/{id}/update", name="prestamoscajadeahorro_update")
     * @Method("POST")
     * @Template("AplicativoBundle:Caprestamos:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Caprestamos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caprestamos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CaprestamosType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('prestamoscajadeahorro_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Caprestamos entity.
     *
     * @Route("/{id}/delete", name="prestamoscajadeahorro_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AplicativoBundle:Caprestamos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Caprestamos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('prestamoscajadeahorro'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
