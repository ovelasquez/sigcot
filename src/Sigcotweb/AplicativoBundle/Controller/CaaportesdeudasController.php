<?php

namespace Sigcotweb\AplicativoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sigcotweb\AplicativoBundle\Entity\Caaportesdeudas;
use Sigcotweb\AplicativoBundle\Form\CaaportesdeudasType;

/**
 * Caaportesdeudas controller.
 *
 * @Route("/aportesaprestamos")
 */
class CaaportesdeudasController extends Controller
{
    /**
     * Lists all Caaportesdeudas entities.
     *
     * @Route("/", name="aportesaprestamos")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AplicativoBundle:Caaportesdeudas')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Caaportesdeudas entity.
     *
     * @Route("/{id}/show", name="aportesaprestamos_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Caaportesdeudas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caaportesdeudas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Caaportesdeudas entity.
     *
     * @Route("/new", name="aportesaprestamos_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Caaportesdeudas();
        $form   = $this->createForm(new CaaportesdeudasType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Caaportesdeudas entity.
     *
     * @Route("/create", name="aportesaprestamos_create")
     * @Method("POST")
     * @Template("AplicativoBundle:Caaportesdeudas:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Caaportesdeudas();
        $form = $this->createForm(new CaaportesdeudasType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('aportesaprestamos_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Caaportesdeudas entity.
     *
     * @Route("/{id}/edit", name="aportesaprestamos_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Caaportesdeudas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caaportesdeudas entity.');
        }

        $editForm = $this->createForm(new CaaportesdeudasType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Caaportesdeudas entity.
     *
     * @Route("/{id}/update", name="aportesaprestamos_update")
     * @Method("POST")
     * @Template("AplicativoBundle:Caaportesdeudas:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Caaportesdeudas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Caaportesdeudas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CaaportesdeudasType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('aportesaprestamos_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Caaportesdeudas entity.
     *
     * @Route("/{id}/delete", name="aportesaprestamos_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AplicativoBundle:Caaportesdeudas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Caaportesdeudas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('aportesaprestamos'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
