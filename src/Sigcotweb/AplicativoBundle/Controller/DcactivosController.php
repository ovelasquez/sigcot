<?php

namespace Sigcotweb\AplicativoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sigcotweb\AplicativoBundle\Entity\Dcactivos;
use Sigcotweb\AplicativoBundle\Form\DcactivosType;

/**
 * Dcactivos controller.
 *
 * @Route("/activoscooperativistas")
 */
class DcactivosController extends Controller
{
    /**
     * Lists all Dcactivos entities.
     *
     * @Route("/", name="activoscooperativistas")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AplicativoBundle:Dcactivos')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Dcactivos entity.
     *
     * @Route("/{id}/show", name="activoscooperativistas_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dcactivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dcactivos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Dcactivos entity.
     *
     * @Route("/new", name="activoscooperativistas_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Dcactivos();
        $form   = $this->createForm(new DcactivosType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Dcactivos entity.
     *
     * @Route("/create", name="activoscooperativistas_create")
     * @Method("POST")
     * @Template("AplicativoBundle:Dcactivos:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Dcactivos();
        $form = $this->createForm(new DcactivosType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('activoscooperativistas_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Dcactivos entity.
     *
     * @Route("/{id}/edit", name="activoscooperativistas_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dcactivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dcactivos entity.');
        }

        $editForm = $this->createForm(new DcactivosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Dcactivos entity.
     *
     * @Route("/{id}/update", name="activoscooperativistas_update")
     * @Method("POST")
     * @Template("AplicativoBundle:Dcactivos:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dcactivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dcactivos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DcactivosType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('activoscooperativistas_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Dcactivos entity.
     *
     * @Route("/{id}/delete", name="activoscooperativistas_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AplicativoBundle:Dcactivos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Dcactivos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('activoscooperativistas'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
