<?php

namespace Sigcotweb\AplicativoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sigcotweb\AplicativoBundle\Entity\Dccargos;
use Sigcotweb\AplicativoBundle\Form\DccargosType;

/**
 * Dccargos controller.
 *
 * @Route("/cargoscooperativistas")
 */
class DccargosController extends Controller
{
    /**
     * Lists all Dccargos entities.
     *
     * @Route("/", name="cargoscooperativistas")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AplicativoBundle:Dccargos')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Dccargos entity.
     *
     * @Route("/{id}/show", name="cargoscooperativistas_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dccargos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dccargos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Dccargos entity.
     *
     * @Route("/new", name="cargoscooperativistas_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Dccargos();
        $form   = $this->createForm(new DccargosType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Dccargos entity.
     *
     * @Route("/create", name="cargoscooperativistas_create")
     * @Method("POST")
     * @Template("AplicativoBundle:Dccargos:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Dccargos();
        $form = $this->createForm(new DccargosType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cargoscooperativistas_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Dccargos entity.
     *
     * @Route("/{id}/edit", name="cargoscooperativistas_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dccargos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dccargos entity.');
        }

        $editForm = $this->createForm(new DccargosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Dccargos entity.
     *
     * @Route("/{id}/update", name="cargoscooperativistas_update")
     * @Method("POST")
     * @Template("AplicativoBundle:Dccargos:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dccargos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dccargos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DccargosType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cargoscooperativistas_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Dccargos entity.
     *
     * @Route("/{id}/delete", name="cargoscooperativistas_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AplicativoBundle:Dccargos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Dccargos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cargoscooperativistas'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
