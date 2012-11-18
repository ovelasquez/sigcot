<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appdevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appdevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        // _welcome
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_welcome');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\WelcomeController::indexAction',  '_route' => '_welcome',);
        }

        // _demo_login
        if ($pathinfo === '/demo/secured/login') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::loginAction',  '_route' => '_demo_login',);
        }

        // _security_check
        if ($pathinfo === '/demo/secured/login_check') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::securityCheckAction',  '_route' => '_security_check',);
        }

        // _demo_logout
        if ($pathinfo === '/demo/secured/logout') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::logoutAction',  '_route' => '_demo_logout',);
        }

        // acme_demo_secured_hello
        if ($pathinfo === '/demo/secured/hello') {
            return array (  'name' => 'World',  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',  '_route' => 'acme_demo_secured_hello',);
        }

        // _demo_secured_hello
        if (0 === strpos($pathinfo, '/demo/secured/hello') && preg_match('#^/demo/secured/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloAction',)), array('_route' => '_demo_secured_hello'));
        }

        // _demo_secured_hello_admin
        if (0 === strpos($pathinfo, '/demo/secured/hello/admin') && preg_match('#^/demo/secured/hello/admin/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\SecuredController::helloadminAction',)), array('_route' => '_demo_secured_hello_admin'));
        }

        // _demo
        if (rtrim($pathinfo, '/') === '/demo') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', '_demo');
            }

            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::indexAction',  '_route' => '_demo',);
        }

        // _demo_hello
        if (0 === strpos($pathinfo, '/demo/hello') && preg_match('#^/demo/hello/(?<name>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::helloAction',)), array('_route' => '_demo_hello'));
        }

        // _demo_contact
        if ($pathinfo === '/demo/contact') {
            return array (  '_controller' => 'Acme\\DemoBundle\\Controller\\DemoController::contactAction',  '_route' => '_demo_contact',);
        }

        // _wdt
        if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::toolbarAction',)), array('_route' => '_wdt'));
        }

        if (0 === strpos($pathinfo, '/_profiler')) {
            // _profiler_search
            if ($pathinfo === '/_profiler/search') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchAction',  '_route' => '_profiler_search',);
            }

            // _profiler_purge
            if ($pathinfo === '/_profiler/purge') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::purgeAction',  '_route' => '_profiler_purge',);
            }

            // _profiler_info
            if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?<about>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::infoAction',)), array('_route' => '_profiler_info'));
            }

            // _profiler_import
            if ($pathinfo === '/_profiler/import') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::importAction',  '_route' => '_profiler_import',);
            }

            // _profiler_export
            if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?<token>[^/\\.]+)\\.txt$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::exportAction',)), array('_route' => '_profiler_export'));
            }

            // _profiler_phpinfo
            if ($pathinfo === '/_profiler/phpinfo') {
                return array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::phpinfoAction',  '_route' => '_profiler_phpinfo',);
            }

            // _profiler_search_results
            if (preg_match('#^/_profiler/(?<token>[^/]+)/search/results$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::searchResultsAction',)), array('_route' => '_profiler_search_results'));
            }

            // _profiler
            if (preg_match('#^/_profiler/(?<token>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Symfony\\Bundle\\WebProfilerBundle\\Controller\\ProfilerController::panelAction',)), array('_route' => '_profiler'));
            }

            // _profiler_redirect
            if (rtrim($pathinfo, '/') === '/_profiler') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_profiler_redirect');
                }

                return array (  '_controller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController::redirectAction',  'route' => '_profiler_search_results',  'token' => 'empty',  'ip' => '',  'url' => '',  'method' => '',  'limit' => '10',  '_route' => '_profiler_redirect',);
            }

        }

        if (0 === strpos($pathinfo, '/_configurator')) {
            // _configurator_home
            if (rtrim($pathinfo, '/') === '/_configurator') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', '_configurator_home');
                }

                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::checkAction',  '_route' => '_configurator_home',);
            }

            // _configurator_step
            if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?<index>[^/]+)$#s', $pathinfo, $matches)) {
                return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',)), array('_route' => '_configurator_step'));
            }

            // _configurator_final
            if ($pathinfo === '/_configurator/final') {
                return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
            }

        }

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

        // activoscooperativistas
        if (rtrim($pathinfo, '/') === '/activoscooperativistas') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'activoscooperativistas');
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcactivosController::indexAction',  '_route' => 'activoscooperativistas',);
        }

        // activoscooperativistas_show
        if (0 === strpos($pathinfo, '/activoscooperativistas') && preg_match('#^/activoscooperativistas/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcactivosController::showAction',)), array('_route' => 'activoscooperativistas_show'));
        }

        // activoscooperativistas_new
        if ($pathinfo === '/activoscooperativistas/new') {
            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcactivosController::newAction',  '_route' => 'activoscooperativistas_new',);
        }

        // activoscooperativistas_create
        if ($pathinfo === '/activoscooperativistas/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_activoscooperativistas_create;
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcactivosController::createAction',  '_route' => 'activoscooperativistas_create',);
        }
        not_activoscooperativistas_create:

        // activoscooperativistas_edit
        if (0 === strpos($pathinfo, '/activoscooperativistas') && preg_match('#^/activoscooperativistas/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcactivosController::editAction',)), array('_route' => 'activoscooperativistas_edit'));
        }

        // activoscooperativistas_update
        if (0 === strpos($pathinfo, '/activoscooperativistas') && preg_match('#^/activoscooperativistas/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_activoscooperativistas_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcactivosController::updateAction',)), array('_route' => 'activoscooperativistas_update'));
        }
        not_activoscooperativistas_update:

        // activoscooperativistas_delete
        if (0 === strpos($pathinfo, '/activoscooperativistas') && preg_match('#^/activoscooperativistas/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_activoscooperativistas_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcactivosController::deleteAction',)), array('_route' => 'activoscooperativistas_delete'));
        }
        not_activoscooperativistas_delete:

        // cargoscooperativistas
        if (rtrim($pathinfo, '/') === '/cargoscooperativistas') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'cargoscooperativistas');
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DccargosController::indexAction',  '_route' => 'cargoscooperativistas',);
        }

        // cargoscooperativistas_show
        if (0 === strpos($pathinfo, '/cargoscooperativistas') && preg_match('#^/cargoscooperativistas/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DccargosController::showAction',)), array('_route' => 'cargoscooperativistas_show'));
        }

        // cargoscooperativistas_new
        if ($pathinfo === '/cargoscooperativistas/new') {
            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DccargosController::newAction',  '_route' => 'cargoscooperativistas_new',);
        }

        // cargoscooperativistas_create
        if ($pathinfo === '/cargoscooperativistas/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cargoscooperativistas_create;
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DccargosController::createAction',  '_route' => 'cargoscooperativistas_create',);
        }
        not_cargoscooperativistas_create:

        // cargoscooperativistas_edit
        if (0 === strpos($pathinfo, '/cargoscooperativistas') && preg_match('#^/cargoscooperativistas/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DccargosController::editAction',)), array('_route' => 'cargoscooperativistas_edit'));
        }

        // cargoscooperativistas_update
        if (0 === strpos($pathinfo, '/cargoscooperativistas') && preg_match('#^/cargoscooperativistas/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cargoscooperativistas_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DccargosController::updateAction',)), array('_route' => 'cargoscooperativistas_update'));
        }
        not_cargoscooperativistas_update:

        // cargoscooperativistas_delete
        if (0 === strpos($pathinfo, '/cargoscooperativistas') && preg_match('#^/cargoscooperativistas/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_cargoscooperativistas_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DccargosController::deleteAction',)), array('_route' => 'cargoscooperativistas_delete'));
        }
        not_cargoscooperativistas_delete:

        // fotosactivos
        if (rtrim($pathinfo, '/') === '/fotosactivos') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'fotosactivos');
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcfotosactivosController::indexAction',  '_route' => 'fotosactivos',);
        }

        // fotosactivos_show
        if (0 === strpos($pathinfo, '/fotosactivos') && preg_match('#^/fotosactivos/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcfotosactivosController::showAction',)), array('_route' => 'fotosactivos_show'));
        }

        // fotosactivos_new
        if ($pathinfo === '/fotosactivos/new') {
            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcfotosactivosController::newAction',  '_route' => 'fotosactivos_new',);
        }

        // fotosactivos_create
        if ($pathinfo === '/fotosactivos/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fotosactivos_create;
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcfotosactivosController::createAction',  '_route' => 'fotosactivos_create',);
        }
        not_fotosactivos_create:

        // fotosactivos_edit
        if (0 === strpos($pathinfo, '/fotosactivos') && preg_match('#^/fotosactivos/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcfotosactivosController::editAction',)), array('_route' => 'fotosactivos_edit'));
        }

        // fotosactivos_update
        if (0 === strpos($pathinfo, '/fotosactivos') && preg_match('#^/fotosactivos/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fotosactivos_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcfotosactivosController::updateAction',)), array('_route' => 'fotosactivos_update'));
        }
        not_fotosactivos_update:

        // fotosactivos_delete
        if (0 === strpos($pathinfo, '/fotosactivos') && preg_match('#^/fotosactivos/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_fotosactivos_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DcfotosactivosController::deleteAction',)), array('_route' => 'fotosactivos_delete'));
        }
        not_fotosactivos_delete:

        // aportecooperativista
        if (rtrim($pathinfo, '/') === '/aportecooperativista') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'aportecooperativista');
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcaportesController::indexAction',  '_route' => 'aportecooperativista',);
        }

        // aportecooperativista_show
        if (0 === strpos($pathinfo, '/aportecooperativista') && preg_match('#^/aportecooperativista/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcaportesController::showAction',)), array('_route' => 'aportecooperativista_show'));
        }

        // aportecooperativista_new
        if ($pathinfo === '/aportecooperativista/new') {
            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcaportesController::newAction',  '_route' => 'aportecooperativista_new',);
        }

        // aportecooperativista_create
        if ($pathinfo === '/aportecooperativista/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_aportecooperativista_create;
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcaportesController::createAction',  '_route' => 'aportecooperativista_create',);
        }
        not_aportecooperativista_create:

        // aportecooperativista_edit
        if (0 === strpos($pathinfo, '/aportecooperativista') && preg_match('#^/aportecooperativista/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcaportesController::editAction',)), array('_route' => 'aportecooperativista_edit'));
        }

        // aportecooperativista_update
        if (0 === strpos($pathinfo, '/aportecooperativista') && preg_match('#^/aportecooperativista/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_aportecooperativista_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcaportesController::updateAction',)), array('_route' => 'aportecooperativista_update'));
        }
        not_aportecooperativista_update:

        // aportecooperativista_delete
        if (0 === strpos($pathinfo, '/aportecooperativista') && preg_match('#^/aportecooperativista/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_aportecooperativista_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcaportesController::deleteAction',)), array('_route' => 'aportecooperativista_delete'));
        }
        not_aportecooperativista_delete:

        // conceptosaportesc
        if (rtrim($pathinfo, '/') === '/conceptosaportesc') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'conceptosaportesc');
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcconceptosaportesController::indexAction',  '_route' => 'conceptosaportesc',);
        }

        // conceptosaportesc_show
        if (0 === strpos($pathinfo, '/conceptosaportesc') && preg_match('#^/conceptosaportesc/(?<id>[^/]+)/show$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcconceptosaportesController::showAction',)), array('_route' => 'conceptosaportesc_show'));
        }

        // conceptosaportesc_new
        if ($pathinfo === '/conceptosaportesc/new') {
            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcconceptosaportesController::newAction',  '_route' => 'conceptosaportesc_new',);
        }

        // conceptosaportesc_create
        if ($pathinfo === '/conceptosaportesc/create') {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_conceptosaportesc_create;
            }

            return array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcconceptosaportesController::createAction',  '_route' => 'conceptosaportesc_create',);
        }
        not_conceptosaportesc_create:

        // conceptosaportesc_edit
        if (0 === strpos($pathinfo, '/conceptosaportesc') && preg_match('#^/conceptosaportesc/(?<id>[^/]+)/edit$#s', $pathinfo, $matches)) {
            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcconceptosaportesController::editAction',)), array('_route' => 'conceptosaportesc_edit'));
        }

        // conceptosaportesc_update
        if (0 === strpos($pathinfo, '/conceptosaportesc') && preg_match('#^/conceptosaportesc/(?<id>[^/]+)/update$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_conceptosaportesc_update;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcconceptosaportesController::updateAction',)), array('_route' => 'conceptosaportesc_update'));
        }
        not_conceptosaportesc_update:

        // conceptosaportesc_delete
        if (0 === strpos($pathinfo, '/conceptosaportesc') && preg_match('#^/conceptosaportesc/(?<id>[^/]+)/delete$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_conceptosaportesc_delete;
            }

            return array_merge($this->mergeDefaults($matches, array (  '_controller' => 'Sigcotweb\\AplicativoBundle\\Controller\\DfcconceptosaportesController::deleteAction',)), array('_route' => 'conceptosaportesc_delete'));
        }
        not_conceptosaportesc_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
