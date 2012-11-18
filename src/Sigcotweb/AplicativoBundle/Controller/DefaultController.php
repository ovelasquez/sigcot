<?php

namespace Sigcotweb\AplicativoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('AplicativoBundle:Default:index.html.twig', array('name' => $name));
    }
}
