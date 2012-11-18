<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appprodUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appprodUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // aportesdecajadeahorro
        if (rtrim($pathinfo, '/') === '/aportesdecajadeahorro') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'aportesdecajadeahorro');
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesController::indexAction',  '_route' => 'aportesdecajadeahorro',);
        }

        // aportesdecajadeahorro_show
        if (0 === strpos($pathinfo, '/aportesdecajadeahorro') && preg_match('#^/aportesdecajadeahorro/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesController::showAction',)), array('_route' => 'aportesdecajadeahorro_show'));
        }

        // aportesdecajadeahorro_new
        if ($pathinfo === '/aportesdecajadeahorro/new') {
            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesController::newAction',  '_route' => 'aportesdecajadeahorro_new',);
        }

        // aportesdecajadeahorro_create
        if ($pathinfo === '/aportesdecajadeahorro/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_aportesdecajadeahorro_create;
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesController::createAction',  '_route' => 'aportesdecajadeahorro_create',);
        }
        not_aportesdecajadeahorro_create:

        // aportesdecajadeahorro_edit
        if (0 === strpos($pathinfo, '/aportesdecajadeahorro') && preg_match('#^/aportesdecajadeahorro/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesController::editAction',)), array('_route' => 'aportesdecajadeahorro_edit'));
        }

        // aportesdecajadeahorro_update
        if (0 === strpos($pathinfo, '/aportesdecajadeahorro') && preg_match('#^/aportesdecajadeahorro/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_aportesdecajadeahorro_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesController::updateAction',)), array('_route' => 'aportesdecajadeahorro_update'));
        }
        not_aportesdecajadeahorro_update:

        // aportesdecajadeahorro_delete
        if (0 === strpos($pathinfo, '/aportesdecajadeahorro') && preg_match('#^/aportesdecajadeahorro/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_aportesdecajadeahorro_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesController::deleteAction',)), array('_route' => 'aportesdecajadeahorro_delete'));
        }
        not_aportesdecajadeahorro_delete:

        // aportesaprestamos
        if (rtrim($pathinfo, '/') === '/aportesaprestamos') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'aportesaprestamos');
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesdeudasController::indexAction',  '_route' => 'aportesaprestamos',);
        }

        // aportesaprestamos_show
        if (0 === strpos($pathinfo, '/aportesaprestamos') && preg_match('#^/aportesaprestamos/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesdeudasController::showAction',)), array('_route' => 'aportesaprestamos_show'));
        }

        // aportesaprestamos_new
        if ($pathinfo === '/aportesaprestamos/new') {
            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesdeudasController::newAction',  '_route' => 'aportesaprestamos_new',);
        }

        // aportesaprestamos_create
        if ($pathinfo === '/aportesaprestamos/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_aportesaprestamos_create;
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesdeudasController::createAction',  '_route' => 'aportesaprestamos_create',);
        }
        not_aportesaprestamos_create:

        // aportesaprestamos_edit
        if (0 === strpos($pathinfo, '/aportesaprestamos') && preg_match('#^/aportesaprestamos/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesdeudasController::editAction',)), array('_route' => 'aportesaprestamos_edit'));
        }

        // aportesaprestamos_update
        if (0 === strpos($pathinfo, '/aportesaprestamos') && preg_match('#^/aportesaprestamos/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_aportesaprestamos_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesdeudasController::updateAction',)), array('_route' => 'aportesaprestamos_update'));
        }
        not_aportesaprestamos_update:

        // aportesaprestamos_delete
        if (0 === strpos($pathinfo, '/aportesaprestamos') && preg_match('#^/aportesaprestamos/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_aportesaprestamos_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaaportesdeudasController::deleteAction',)), array('_route' => 'aportesaprestamos_delete'));
        }
        not_aportesaprestamos_delete:

        // configcajadeahorro
        if (rtrim($pathinfo, '/') === '/configcajadeahorro') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'configcajadeahorro');
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaconfigController::indexAction',  '_route' => 'configcajadeahorro',);
        }

        // configcajadeahorro_show
        if (0 === strpos($pathinfo, '/configcajadeahorro') && preg_match('#^/configcajadeahorro/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaconfigController::showAction',)), array('_route' => 'configcajadeahorro_show'));
        }

        // configcajadeahorro_new
        if ($pathinfo === '/configcajadeahorro/new') {
            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaconfigController::newAction',  '_route' => 'configcajadeahorro_new',);
        }

        // configcajadeahorro_create
        if ($pathinfo === '/configcajadeahorro/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_configcajadeahorro_create;
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaconfigController::createAction',  '_route' => 'configcajadeahorro_create',);
        }
        not_configcajadeahorro_create:

        // configcajadeahorro_edit
        if (0 === strpos($pathinfo, '/configcajadeahorro') && preg_match('#^/configcajadeahorro/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaconfigController::editAction',)), array('_route' => 'configcajadeahorro_edit'));
        }

        // configcajadeahorro_update
        if (0 === strpos($pathinfo, '/configcajadeahorro') && preg_match('#^/configcajadeahorro/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_configcajadeahorro_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaconfigController::updateAction',)), array('_route' => 'configcajadeahorro_update'));
        }
        not_configcajadeahorro_update:

        // configcajadeahorro_delete
        if (0 === strpos($pathinfo, '/configcajadeahorro') && preg_match('#^/configcajadeahorro/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_configcajadeahorro_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaconfigController::deleteAction',)), array('_route' => 'configcajadeahorro_delete'));
        }
        not_configcajadeahorro_delete:

        // prestamoscajadeahorro
        if (rtrim($pathinfo, '/') === '/prestamoscajadeahorro') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'prestamoscajadeahorro');
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaprestamosController::indexAction',  '_route' => 'prestamoscajadeahorro',);
        }

        // prestamoscajadeahorro_show
        if (0 === strpos($pathinfo, '/prestamoscajadeahorro') && preg_match('#^/prestamoscajadeahorro/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaprestamosController::showAction',)), array('_route' => 'prestamoscajadeahorro_show'));
        }

        // prestamoscajadeahorro_new
        if ($pathinfo === '/prestamoscajadeahorro/new') {
            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaprestamosController::newAction',  '_route' => 'prestamoscajadeahorro_new',);
        }

        // prestamoscajadeahorro_create
        if ($pathinfo === '/prestamoscajadeahorro/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_prestamoscajadeahorro_create;
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaprestamosController::createAction',  '_route' => 'prestamoscajadeahorro_create',);
        }
        not_prestamoscajadeahorro_create:

        // prestamoscajadeahorro_edit
        if (0 === strpos($pathinfo, '/prestamoscajadeahorro') && preg_match('#^/prestamoscajadeahorro/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaprestamosController::editAction',)), array('_route' => 'prestamoscajadeahorro_edit'));
        }

        // prestamoscajadeahorro_update
        if (0 === strpos($pathinfo, '/prestamoscajadeahorro') && preg_match('#^/prestamoscajadeahorro/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_prestamoscajadeahorro_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaprestamosController::updateAction',)), array('_route' => 'prestamoscajadeahorro_update'));
        }
        not_prestamoscajadeahorro_update:

        // prestamoscajadeahorro_delete
        if (0 === strpos($pathinfo, '/prestamoscajadeahorro') && preg_match('#^/prestamoscajadeahorro/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_prestamoscajadeahorro_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaprestamosController::deleteAction',)), array('_route' => 'prestamoscajadeahorro_delete'));
        }
        not_prestamoscajadeahorro_delete:

        // retiroscajadeahorro
        if (rtrim($pathinfo, '/') === '/retiroscajadeahorro') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'retiroscajadeahorro');
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaretirosController::indexAction',  '_route' => 'retiroscajadeahorro',);
        }

        // retiroscajadeahorro_show
        if (0 === strpos($pathinfo, '/retiroscajadeahorro') && preg_match('#^/retiroscajadeahorro/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaretirosController::showAction',)), array('_route' => 'retiroscajadeahorro_show'));
        }

        // retiroscajadeahorro_new
        if ($pathinfo === '/retiroscajadeahorro/new') {
            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaretirosController::newAction',  '_route' => 'retiroscajadeahorro_new',);
        }

        // retiroscajadeahorro_create
        if ($pathinfo === '/retiroscajadeahorro/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_retiroscajadeahorro_create;
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaretirosController::createAction',  '_route' => 'retiroscajadeahorro_create',);
        }
        not_retiroscajadeahorro_create:

        // retiroscajadeahorro_edit
        if (0 === strpos($pathinfo, '/retiroscajadeahorro') && preg_match('#^/retiroscajadeahorro/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaretirosController::editAction',)), array('_route' => 'retiroscajadeahorro_edit'));
        }

        // retiroscajadeahorro_update
        if (0 === strpos($pathinfo, '/retiroscajadeahorro') && preg_match('#^/retiroscajadeahorro/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_retiroscajadeahorro_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaretirosController::updateAction',)), array('_route' => 'retiroscajadeahorro_update'));
        }
        not_retiroscajadeahorro_update:

        // retiroscajadeahorro_delete
        if (0 === strpos($pathinfo, '/retiroscajadeahorro') && preg_match('#^/retiroscajadeahorro/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_retiroscajadeahorro_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CaretirosController::deleteAction',)), array('_route' => 'retiroscajadeahorro_delete'));
        }
        not_retiroscajadeahorro_delete:

        // cooperativistas
        if (rtrim($pathinfo, '/') === '/cooperativistas') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cooperativistas');
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CooperativistasController::indexAction',  '_route' => 'cooperativistas',);
        }

        // cooperativistas_show
        if (0 === strpos($pathinfo, '/cooperativistas') && preg_match('#^/cooperativistas/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CooperativistasController::showAction',)), array('_route' => 'cooperativistas_show'));
        }

        // cooperativistas_new
        if ($pathinfo === '/cooperativistas/new') {
            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CooperativistasController::newAction',  '_route' => 'cooperativistas_new',);
        }

        // cooperativistas_create
        if ($pathinfo === '/cooperativistas/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cooperativistas_create;
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CooperativistasController::createAction',  '_route' => 'cooperativistas_create',);
        }
        not_cooperativistas_create:

        // cooperativistas_edit
        if (0 === strpos($pathinfo, '/cooperativistas') && preg_match('#^/cooperativistas/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CooperativistasController::editAction',)), array('_route' => 'cooperativistas_edit'));
        }

        // cooperativistas_update
        if (0 === strpos($pathinfo, '/cooperativistas') && preg_match('#^/cooperativistas/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cooperativistas_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CooperativistasController::updateAction',)), array('_route' => 'cooperativistas_update'));
        }
        not_cooperativistas_update:

        // cooperativistas_delete
        if (0 === strpos($pathinfo, '/cooperativistas') && preg_match('#^/cooperativistas/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cooperativistas_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\CooperativistasController::deleteAction',)), array('_route' => 'cooperativistas_delete'));
        }
        not_cooperativistas_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
