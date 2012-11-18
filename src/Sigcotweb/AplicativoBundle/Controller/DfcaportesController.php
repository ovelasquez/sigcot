<?php

namespace Sigcotweb\AplicativoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sigcotweb\AplicativoBundle\Entity\Dfcaportes;
use Sigcotweb\AplicativoBundle\Form\DfcaportesType;

/**
 * Dfcaportes controller.
 *
 * @Route("/aportecooperativista")
 */
class DfcaportesController extends Controller
{
    /**
     * Lists all Dfcaportes entities.
     *
     * @Route("/", name="aportecooperativista")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AplicativoBundle:Dfcaportes')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Dfcaportes entity.
     *
     * @Route("/{id}/show", name="aportecooperativista_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dfcaportes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dfcaportes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Dfcaportes entity.
     *
     * @Route("/new", name="aportecooperativista_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Dfcaportes();
        $form   = $this->createForm(new DfcaportesType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Dfcaportes entity.
     *
     * @Route("/create", name="aportecooperativista_create")
     * @Method("POST")
     * @Template("AplicativoBundle:Dfcaportes:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Dfcaportes();
        $form = $this->createForm(new DfcaportesType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('aportecooperativista_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Dfcaportes entity.
     *
     * @Route("/{id}/edit", name="aportecooperativista_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dfcaportes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dfcaportes entity.');
        }

        $editForm = $this->createForm(new DfcaportesType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Dfcaportes entity.
     *
     * @Route("/{id}/update", name="aportecooperativista_update")
     * @Method("POST")
     * @Template("AplicativoBundle:Dfcaportes:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dfcaportes')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dfcaportes entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DfcaportesType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('aportecooperativista_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Dfcaportes entity.
     *
     * @Route("/{id}/delete", name="aportecooperativista_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AplicativoBundle:Dfcaportes')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Dfcaportes entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('aportecooperativista'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
