<?php

namespace Sigcotweb\AplicativoBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sigcotweb\AplicativoBundle\Entity\Dcfotosactivos;
use Sigcotweb\AplicativoBundle\Form\DcfotosactivosType;

/**
 * Dcfotosactivos controller.
 *
 * @Route("/fotosactivos")
 */
class DcfotosactivosController extends Controller
{
    /**
     * Lists all Dcfotosactivos entities.
     *
     * @Route("/", name="fotosactivos")
     * @Template()
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AplicativoBundle:Dcfotosactivos')->findAll();

        return array(
            'entities' => $entities,
        );
    }

    /**
     * Finds and displays a Dcfotosactivos entity.
     *
     * @Route("/{id}/show", name="fotosactivos_show")
     * @Template()
     */
    public function showAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dcfotosactivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dcfotosactivos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Displays a form to create a new Dcfotosactivos entity.
     *
     * @Route("/new", name="fotosactivos_new")
     * @Template()
     */
    public function newAction()
    {
        $entity = new Dcfotosactivos();
        $form   = $this->createForm(new DcfotosactivosType(), $entity);

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Creates a new Dcfotosactivos entity.
     *
     * @Route("/create", name="fotosactivos_create")
     * @Method("POST")
     * @Template("AplicativoBundle:Dcfotosactivos:new.html.twig")
     */
    public function createAction(Request $request)
    {
        $entity  = new Dcfotosactivos();
        $form = $this->createForm(new DcfotosactivosType(), $entity);
        $form->bind($request);

        if ($form->isValid()) {
            $entity->subirFoto($this->container->getParameter('sigcot.directorio.imagenes'));
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fotosactivos_show', array('id' => $entity->getId())));
        }

        return array(
            'entity' => $entity,
            'form'   => $form->createView(),
        );
    }

    /**
     * Displays a form to edit an existing Dcfotosactivos entity.
     *
     * @Route("/{id}/edit", name="fotosactivos_edit")
     * @Template()
     */
    public function editAction($id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dcfotosactivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dcfotosactivos entity.');
        }

        $editForm = $this->createForm(new DcfotosactivosType(), $entity);
        $deleteForm = $this->createDeleteForm($id);

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Edits an existing Dcfotosactivos entity.
     *
     * @Route("/{id}/update", name="fotosactivos_update")
     * @Method("POST")
     * @Template("AplicativoBundle:Dcfotosactivos:edit.html.twig")
     */
    public function updateAction(Request $request, $id)
    {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AplicativoBundle:Dcfotosactivos')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Dcfotosactivos entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createForm(new DcfotosactivosType(), $entity);
        $editForm->bind($request);

        if ($editForm->isValid()) {
            $entity->subirFoto($this->container->getParameter('sigcot.directorio.imagenes'));
            $em->persist($entity);
            $em->flush();

            return $this->redirect($this->generateUrl('fotosactivos_edit', array('id' => $id)));
        }

        return array(
            'entity'      => $entity,
            'edit_form'   => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        );
    }

    /**
     * Deletes a Dcfotosactivos entity.
     *
     * @Route("/{id}/delete", name="fotosactivos_delete")
     * @Method("POST")
     */
    public function deleteAction(Request $request, $id)
    {
        $form = $this->createDeleteForm($id);
        $form->bind($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AplicativoBundle:Dcfotosactivos')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Dcfotosactivos entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('fotosactivos'));
    }

    private function createDeleteForm($id)
    {
        return $this->createFormBuilder(array('id' => $id))
            ->add('id', 'hidden')
            ->getForm()
        ;
    }
}
