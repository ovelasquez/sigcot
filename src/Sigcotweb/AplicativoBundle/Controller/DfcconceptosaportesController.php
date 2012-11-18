<?php

namespace Sigcotweb\AplicativoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sigcotweb\AplicativoBundle\Entity\Dfcconceptosaportes;
use Sigcotweb\AplicativoBundle\Form\DfcconceptosaportesType;

/**
 * Dfcconceptosaportes controller.
 *
 * @Route("/conceptosaportesc")
 */
class DfcconceptosaportesController extends Controller
{
    /**
     * Lists all Dfcconceptosaportes entities.
     *
     * @Route("/", name="conceptosaportesc")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AplicativoBundle:Dfcconceptosaportes')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Dfcconceptosaportes entity.
     *
     * @Route("/{id}/show", name="conceptosaportesc_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dfcconceptosaportes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dfcconceptosaportes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Dfcconceptosaportes entity.
     *
     * @Route("/new", name="conceptosaportesc_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Dfcconceptosaportes();
        $form   = $this->createForm(new DfcconceptosaportesType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Dfcconceptosaportes entity.
     *
     * @Route("/create", name="conceptosaportesc_create")
     * @Method("POST")
     * @Template("AplicativoBundle:Dfcconceptosaportes:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Dfcconceptosaportes();
        $form = $this->createForm(new DfcconceptosaportesType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('conceptosaportesc_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Dfcconceptosaportes entity.
     *
     * @Route("/{id}/edit", name="conceptosaportesc_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dfcconceptosaportes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dfcconceptosaportes entity.');
        }

        $editForm = $this->createForm(new DfcconceptosaportesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Dfcconceptosaportes entity.
     *
     * @Route("/{id}/update", name="conceptosaportesc_update")
     * @Method("POST")
     * @Template("AplicativoBundle:Dfcconceptosaportes:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dfcconceptosaportes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dfcconceptosaportes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DfcconceptosaportesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('conceptosaportesc_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Dfcconceptosaportes entity.
     *
     * @Route("/{id}/delete", name="conceptosaportesc_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AplicativoBundle:Dfcconceptosaportes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Dfcconceptosaportes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('conceptosaportesc'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
