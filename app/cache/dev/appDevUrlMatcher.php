<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/_')) {
            // _wdt
            if (0 === strpos($pathinfo, '/_wdt') && preg_match('#^/_wdt/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_wdt')), array (  '_controller' => 'web_profiler.controller.profiler:toolbarAction',));
            }

            if (0 === strpos($pathinfo, '/_profiler')) {
                // _profiler_home
                if (rtrim($pathinfo, '/') === '/_profiler') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', '_profiler_home');
                    }

                    return array (  '_controller' => 'web_profiler.controller.profiler:homeAction',  '_route' => '_profiler_home',);
                }

                if (0 === strpos($pathinfo, '/_profiler/search')) {
                    // _profiler_search
                    if ($pathinfo === '/_profiler/search') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchAction',  '_route' => '_profiler_search',);
                    }

                    // _profiler_search_bar
                    if ($pathinfo === '/_profiler/search_bar') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:searchBarAction',  '_route' => '_profiler_search_bar',);
                    }

                }

                // _profiler_purge
                if ($pathinfo === '/_profiler/purge') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:purgeAction',  '_route' => '_profiler_purge',);
                }

                if (0 === strpos($pathinfo, '/_profiler/i')) {
                    // _profiler_info
                    if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
                    }

                    // _profiler_import
                    if ($pathinfo === '/_profiler/import') {
                        return array (  '_controller' => 'web_profiler.controller.profiler:importAction',  '_route' => '_profiler_import',);
                    }

                }

                // _profiler_export
                if (0 === strpos($pathinfo, '/_profiler/export') && preg_match('#^/_profiler/export/(?P<token>[^/\\.]++)\\.txt$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_export')), array (  '_controller' => 'web_profiler.controller.profiler:exportAction',));
                }

                // _profiler_phpinfo
                if ($pathinfo === '/_profiler/phpinfo') {
                    return array (  '_controller' => 'web_profiler.controller.profiler:phpinfoAction',  '_route' => '_profiler_phpinfo',);
                }

                // _profiler_search_results
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/search/results$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_search_results')), array (  '_controller' => 'web_profiler.controller.profiler:searchResultsAction',));
                }

                // _profiler
                if (preg_match('#^/_profiler/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler')), array (  '_controller' => 'web_profiler.controller.profiler:panelAction',));
                }

                // _profiler_router
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/router$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_router')), array (  '_controller' => 'web_profiler.controller.router:panelAction',));
                }

                // _profiler_exception
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception')), array (  '_controller' => 'web_profiler.controller.exception:showAction',));
                }

                // _profiler_exception_css
                if (preg_match('#^/_profiler/(?P<token>[^/]++)/exception\\.css$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_exception_css')), array (  '_controller' => 'web_profiler.controller.exception:cssAction',));
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
                if (0 === strpos($pathinfo, '/_configurator/step') && preg_match('#^/_configurator/step/(?P<index>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_configurator_step')), array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::stepAction',));
                }

                // _configurator_final
                if ($pathinfo === '/_configurator/final') {
                    return array (  '_controller' => 'Sensio\\Bundle\\DistributionBundle\\Controller\\ConfiguratorController::finalAction',  '_route' => '_configurator_final',);
                }

            }

        }

        // frontend_homepage
        if (preg_match('#^/(?P<_locale>es|en|it|pt)?$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontend_homepage')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\DefaultController::indexAction',  '_locale' => 'es',));
        }

        // denegado
        if ($pathinfo === '/denegado') {
            return array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\DefaultController::deniedAction',  '_route' => 'denegado',);
        }

        // select_ciudades
        if ($pathinfo === '/ciudades') {
            return array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\DefaultController::ciudadesAction',  '_route' => 'select_ciudades',);
        }

        // select_distritos
        if ($pathinfo === '/distritos') {
            return array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\DefaultController::distritosAction',  '_route' => 'select_distritos',);
        }

        // frontend_estatica
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/(?P<name>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'frontend_estatica')), array (  '_locale' => 'es',));
        }

        // usuario_login
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_login')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\UsuarioController::loginAction',  '_locale' => 'es',));
        }

        // usuario_login_check
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/login_check$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_login_check')), array (  '_locale' => 'es',));
        }

        // usuario_logout
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_logout')), array (  '_locale' => 'es',));
        }

        // usuario_show
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_show')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\UsuarioController::showAction',  '_locale' => 'es',));
        }

        // usuario_active
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/(?P<id>[^/]++)/active$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_active')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\UsuarioController::activeAction',  '_locale' => 'es',));
        }

        // usuario_create
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_usuario_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_create')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\UsuarioController::createAction',  '_locale' => 'es',));
        }
        not_usuario_create:

        // usuario_edit
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_edit')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\UsuarioController::editAction',  '_locale' => 'es',));
        }

        // usuario_update
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_usuario_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_update')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\UsuarioController::updateAction',  '_locale' => 'es',));
        }
        not_usuario_update:

        // usuario_registro
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/register$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_registro')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\UsuarioController::registroAction',  '_locale' => 'es',));
        }

        // usuario_main
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/main$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_main')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\UsuarioController::mainAction',  '_locale' => 'es',));
        }

        // usuario_forgot
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/forgot$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_forgot')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\UsuarioController::forgotAction',  '_locale' => 'es',));
        }

        // usuario_change_pass
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/(?P<id>[^/]++)/changepass$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_change_pass')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\UsuarioController::changepassAction',  '_locale' => 'es',));
        }

        // usuario_notificacion
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/(?P<id>[^/]++)/notification$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'usuario_notificacion')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\UsuarioController::notificacionAction',  '_locale' => 'es',));
        }

        // tarjeta
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/card/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'tarjeta');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjeta')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\TarjetaController::indexAction',  '_locale' => 'es',));
        }

        // tarjeta_show
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/card/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjeta_show')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\TarjetaController::showAction',  '_locale' => 'es',));
        }

        // tarjeta_new
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/card/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjeta_new')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\TarjetaController::newAction',  '_locale' => 'es',));
        }

        // tarjeta_create
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/card/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_tarjeta_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjeta_create')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\TarjetaController::createAction',  '_locale' => 'es',));
        }
        not_tarjeta_create:

        // tarjeta_edit
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/card/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjeta_edit')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\TarjetaController::editAction',  '_locale' => 'es',));
        }

        // tarjeta_update
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/card/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_tarjeta_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjeta_update')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\TarjetaController::updateAction',  '_locale' => 'es',));
        }
        not_tarjeta_update:

        // tarjeta_delete
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/card/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_tarjeta_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'tarjeta_delete')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\TarjetaController::deleteAction',  '_locale' => 'es',));
        }
        not_tarjeta_delete:

        // place_search
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/usr/place/search$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'place_search')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\PlaceController::searchAction',  '_locale' => 'es',));
        }

        // comercio_login
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/login$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comercio_login')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioController::loginAction',  '_locale' => 'es',));
        }

        // comercio_login_check
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/login_check$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comercio_login_check')), array (  '_locale' => 'es',));
        }

        // comercio_logout
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/logout$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comercio_logout')), array (  '_locale' => 'es',));
        }

        // comercio_show
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comercio_show')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioController::showAction',  '_locale' => 'es',));
        }

        // comercio_active
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/(?P<id>[^/]++)/active$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comercio_active')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioController::activeAction',  '_locale' => 'es',));
        }

        // comercio_create
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_comercio_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comercio_create')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioController::createAction',  '_locale' => 'es',));
        }
        not_comercio_create:

        // comercio_edit
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comercio_edit')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioController::editAction',  '_locale' => 'es',));
        }

        // comercio_update
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_comercio_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comercio_update')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioController::updateAction',  '_locale' => 'es',));
        }
        not_comercio_update:

        // comercio_registro
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/register$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comercio_registro')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioController::registroAction',  '_locale' => 'es',));
        }

        // comercio_main
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/main$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comercio_main')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioController::mainAction',  '_locale' => 'es',));
        }

        // comercio_forgot
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/forgot$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comercio_forgot')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioController::forgotAction',  '_locale' => 'es',));
        }

        // comercio_change_pass
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/(?P<id>[^/]++)/changepass$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comercio_change_pass')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioController::changepassAction',  '_locale' => 'es',));
        }

        // comercio_notificacion
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/(?P<id>[^/]++)/notification$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comercio_notificacion')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioController::notificacionAction',  '_locale' => 'es',));
        }

        // comerciocta
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/comerciocta/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'comerciocta');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciocta')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioctaController::indexAction',  '_locale' => 'es',));
        }

        // comerciocta_show
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/comerciocta/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciocta_show')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioctaController::showAction',  '_locale' => 'es',));
        }

        // comerciocta_new
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/comerciocta/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciocta_new')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioctaController::newAction',  '_locale' => 'es',));
        }

        // comerciocta_create
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/comerciocta/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_comerciocta_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciocta_create')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioctaController::createAction',  '_locale' => 'es',));
        }
        not_comerciocta_create:

        // comerciocta_edit
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/comerciocta/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciocta_edit')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioctaController::editAction',  '_locale' => 'es',));
        }

        // comerciocta_update
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/comerciocta/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_comerciocta_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciocta_update')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioctaController::updateAction',  '_locale' => 'es',));
        }
        not_comerciocta_update:

        // comerciocta_delete
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/comerciocta/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_comerciocta_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciocta_delete')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComercioctaController::deleteAction',  '_locale' => 'es',));
        }
        not_comerciocta_delete:

        // local
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/local/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'local');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'local')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\LocalController::indexAction',  '_locale' => 'es',));
        }

        // local_show
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/local/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'local_show')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\LocalController::showAction',  '_locale' => 'es',));
        }

        // local_new
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/local/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'local_new')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\LocalController::newAction',  '_locale' => 'es',));
        }

        // local_create
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/local/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_local_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'local_create')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\LocalController::createAction',  '_locale' => 'es',));
        }
        not_local_create:

        // local_edit
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/local/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'local_edit')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\LocalController::editAction',  '_locale' => 'es',));
        }

        // local_update
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/local/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_local_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'local_update')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\LocalController::updateAction',  '_locale' => 'es',));
        }
        not_local_update:

        // local_delete
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/local/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_local_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'local_delete')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\LocalController::deleteAction',  '_locale' => 'es',));
        }
        not_local_delete:

        // comerciohor
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/horario/?$#s', $pathinfo, $matches)) {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'comerciohor');
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciohor')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComerciohorController::indexAction',  '_locale' => 'es',));
        }

        // comerciohor_show
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/horario/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciohor_show')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComerciohorController::showAction',  '_locale' => 'es',));
        }

        // comerciohor_new
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/horario/new$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciohor_new')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComerciohorController::newAction',  '_locale' => 'es',));
        }

        // comerciohor_create
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/horario/create$#s', $pathinfo, $matches)) {
            if ($this->context->getMethod() != 'POST') {
                $allow[] = 'POST';
                goto not_comerciohor_create;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciohor_create')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComerciohorController::createAction',  '_locale' => 'es',));
        }
        not_comerciohor_create:

        // comerciohor_edit
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/horario/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciohor_edit')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComerciohorController::editAction',  '_locale' => 'es',));
        }

        // comerciohor_update
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/horario/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                $allow = array_merge($allow, array('POST', 'PUT'));
                goto not_comerciohor_update;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciohor_update')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComerciohorController::updateAction',  '_locale' => 'es',));
        }
        not_comerciohor_update:

        // comerciohor_delete
        if (preg_match('#^/(?P<_locale>es|en|it|pt)/cia/horario/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
            if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                $allow = array_merge($allow, array('POST', 'DELETE'));
                goto not_comerciohor_delete;
            }

            return $this->mergeDefaults(array_replace($matches, array('_route' => 'comerciohor_delete')), array (  '_controller' => 'Wayci\\FrontendBundle\\Controller\\ComerciohorController::deleteAction',  '_locale' => 'es',));
        }
        not_comerciohor_delete:

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
