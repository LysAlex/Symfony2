<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appDevDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appDevDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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
        $context = $this->context;
        $request = $this->request;

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

                // _profiler_info
                if (0 === strpos($pathinfo, '/_profiler/info') && preg_match('#^/_profiler/info/(?P<about>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => '_profiler_info')), array (  '_controller' => 'web_profiler.controller.profiler:infoAction',));
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

            // _twig_error_test
            if (0 === strpos($pathinfo, '/_error') && preg_match('#^/_error/(?P<code>\\d+)(?:\\.(?P<_format>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => '_twig_error_test')), array (  '_controller' => 'twig.controller.preview_error:previewErrorPageAction',  '_format' => 'html',));
            }

        }

        // about
        if ($pathinfo === '/about') {
            return array (  '_controller' => 'AppBundle\\Controller\\AboutController::aboutAction',  '_route' => 'about',);
        }

        // homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'homepage');
            }

            return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::indexAction',  '_route' => 'homepage',);
        }

        if (0 === strpos($pathinfo, '/l')) {
            // login
            if ($pathinfo === '/login') {
                return array (  '_controller' => 'AppBundle\\Controller\\DefaultController::loginAction',  '_route' => 'login',);
            }

            // links
            if ($pathinfo === '/links') {
                return array (  '_controller' => 'AppBundle\\Controller\\LinkController::ShowLinktAction',  '_route' => 'links',);
            }

        }

        // addlink
        if ($pathinfo === '/newlink') {
            return array (  '_controller' => 'AppBundle\\Controller\\LinkController::addLinkAction',  '_route' => 'addlink',);
        }

        // updates
        if (0 === strpos($pathinfo, '/updates') && preg_match('#^/updates/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'updates')), array (  '_controller' => 'AppBundle\\Controller\\LinkController::updateLinkAction',));
        }

        if (0 === strpos($pathinfo, '/links')) {
            // deletes
            if (preg_match('#^/links/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'deletes')), array (  '_controller' => 'AppBundle\\Controller\\LinkController::DeleteLinkAction',));
            }

            if (0 === strpos($pathinfo, '/links/order')) {
                // order_date_desc
                if ($pathinfo === '/links/order/date/desc') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LinkController::OrderByDateDescAction',  '_route' => 'order_date_desc',);
                }

                // order_link_alph_desc
                if ($pathinfo === '/links/order/alph/desc') {
                    return array (  '_controller' => 'AppBundle\\Controller\\LinkController::OrderLinkAlphDescAction',  '_route' => 'order_link_alph_desc',);
                }

            }

        }

        // tags
        if ($pathinfo === '/tags') {
            return array (  '_controller' => 'AppBundle\\Controller\\TagController::showTagAction',  '_route' => 'tags',);
        }

        // addtag
        if ($pathinfo === '/newtag') {
            return array (  '_controller' => 'AppBundle\\Controller\\TagController::addTagAction',  '_route' => 'addtag',);
        }

        // update
        if (0 === strpos($pathinfo, '/update') && preg_match('#^/update/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'update')), array (  '_controller' => 'AppBundle\\Controller\\TagController::updateTagAction',));
        }

        // delete
        if (0 === strpos($pathinfo, '/delete') && preg_match('#^/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'delete')), array (  '_controller' => 'AppBundle\\Controller\\TagController::DeleteTagAction',));
        }

        // order_tag_alph_desc
        if ($pathinfo === '/tags/order/desc') {
            return array (  '_controller' => 'AppBundle\\Controller\\TagController::OrderByAlphDescAction',  '_route' => 'order_tag_alph_desc',);
        }

        // logout
        if ($pathinfo === '/logout') {
            return array('_route' => 'logout');
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
