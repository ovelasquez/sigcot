<?php

namespace Sigcotweb\AplicativoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sigcotweb\AplicativoBundle\Entity\Cooperativistas;
use Sigcotweb\AplicativoBundle\Form\CooperativistasType;

/**
 * Cooperativistas controller.
 *
 * @Route("/cooperativistas")
 */
class CooperativistasController extends Controller
{
    /**
     * Lists all Cooperativistas entities.
     *
     * @Route("/", name="cooperativistas")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AplicativoBundle:Cooperativistas')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Cooperativistas entity.
     *
     * @Route("/{id}/show", name="cooperativistas_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Cooperativistas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cooperativistas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Cooperativistas entity.
     *
     * @Route("/new", name="cooperativistas_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Cooperativistas();
        $form   = $this->createForm(new CooperativistasType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Cooperativistas entity.
     *
     * @Route("/create", name="cooperativistas_create")
     * @Method("POST")
     * @Template("AplicativoBundle:Cooperativistas:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Cooperativistas();
        $form = $this->createForm(new CooperativistasType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $entity->subirFoto($this->container->getParameter('sigcot.directorio.imagenes'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cooperativistas_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Cooperativistas entity.
     *
     * @Route("/{id}/edit", name="cooperativistas_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Cooperativistas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cooperativistas entity.');
        }

        $editForm = $this->createForm(new CooperativistasType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Cooperativistas entity.
     *
     * @Route("/{id}/update", name="cooperativistas_update")
     * @Method("POST")
     * @Template("AplicativoBundle:Cooperativistas:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Cooperativistas')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Cooperativistas entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new CooperativistasType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $entity->subirFoto($this->container->getParameter('sigcot.directorio.imagenes'));
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('cooperativistas_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Cooperativistas entity.
     *
     * @Route("/{id}/delete", name="cooperativistas_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AplicativoBundle:Cooperativistas')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Cooperativistas entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('cooperativistas'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
    
}
