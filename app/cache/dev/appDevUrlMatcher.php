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

        // walva_haf_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'walva_haf_homepage');
            }

            return array (  '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::indexAction',  '_route' => 'walva_haf_homepage',);
        }

        // walva_haf_admin
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::indexAction',  '_route' => 'walva_haf_admin',);
        }

        // static_articles_et_nouvelles
        if (preg_match('#^/(?P<langue>[^/]++)/article_et_nouvelles$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'static_articles_et_nouvelles')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\StaticContentController::ArticleEtNouvellesAction',));
        }

        // haf_contact
        if (preg_match('#^/(?P<langue>[^/]++)/contact$#s', $pathinfo, $matches)) {
            return $this->mergeDefaults(array_replace($matches, array('_route' => 'haf_contact')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\StaticContentController::ContactAction',));
        }

        if (0 === strpos($pathinfo, '/a')) {
            if (0 === strpos($pathinfo, '/admin/article')) {
                // article
                if (rtrim($pathinfo, '/') === '/admin/article') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'article');
                    }

                    return array (  '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::indexAction',  '_route' => 'article',);
                }

                // article_show
                if (preg_match('#^/admin/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_show')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::showAction',));
                }

                // article_new
                if ($pathinfo === '/admin/article/new') {
                    return array (  '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::newAction',  '_route' => 'article_new',);
                }

                // article_create
                if ($pathinfo === '/admin/article/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_article_create;
                    }

                    return array (  '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::createAction',  '_route' => 'article_create',);
                }
                not_article_create:

                // article_edit
                if (preg_match('#^/admin/article/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_edit')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::editAction',));
                }

                // article_update
                if (preg_match('#^/admin/article/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_article_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_update')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::updateAction',));
                }
                not_article_update:

                // article_delete
                if (preg_match('#^/admin/article/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_article_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_delete')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\ArticleController::deleteAction',));
                }
                not_article_delete:

            }

            if (0 === strpos($pathinfo, '/article')) {
                // article_public
                if (rtrim($pathinfo, '/') === '/article') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'article_public');
                    }

                    return array (  '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::indexAction',  '_route' => 'article_public',);
                }

                // article_big_list
                if ($pathinfo === '/article/articles_et_nouvelles') {
                    return array (  '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::bigListAction',  '_route' => 'article_big_list',);
                }

                // article_public_list
                if (0 === strpos($pathinfo, '/article/page') && preg_match('#^/article/page/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_public_list')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::indexAction',));
                }

                if (0 === strpos($pathinfo, '/article/tag')) {
                    // article_public_list_tag
                    if (preg_match('#^/article/tag/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_public_list_tag')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::listByTagAction',));
                    }

                    // article_public_list_tag_and_page
                    if (preg_match('#^/article/tag/(?P<id>[^/]++)/page/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_public_list_tag_and_page')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::listByTagAction',));
                    }

                }

                if (0 === strpos($pathinfo, '/article/cat')) {
                    // article_public_list_categorie
                    if (preg_match('#^/article/cat/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_public_list_categorie')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::listByCategorieAction',));
                    }

                    // article_public_list_categorie_and_page
                    if (preg_match('#^/article/cat/(?P<id>[^/]++)/page/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_public_list_categorie_and_page')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::listByCategorieAction',));
                    }

                }

                // article_public_show
                if (preg_match('#^/article/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'article_public_show')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\PublicArticleController::showAction',));
                }

            }

            if (0 === strpos($pathinfo, '/admin')) {
                if (0 === strpos($pathinfo, '/admin/reference')) {
                    // reference
                    if (rtrim($pathinfo, '/') === '/admin/reference') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'reference');
                        }

                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::indexAction',  '_route' => 'reference',);
                    }

                    // reference_show
                    if (preg_match('#^/admin/reference/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reference_show')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::showAction',));
                    }

                    // reference_new
                    if ($pathinfo === '/admin/reference/new') {
                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::newAction',  '_route' => 'reference_new',);
                    }

                    // reference_create
                    if ($pathinfo === '/admin/reference/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_reference_create;
                        }

                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::createAction',  '_route' => 'reference_create',);
                    }
                    not_reference_create:

                    // reference_edit
                    if (preg_match('#^/admin/reference/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reference_edit')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::editAction',));
                    }

                    // reference_update
                    if (preg_match('#^/admin/reference/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_reference_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reference_update')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::updateAction',));
                    }
                    not_reference_update:

                    // reference_delete
                    if (preg_match('#^/admin/reference/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_reference_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'reference_delete')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\ReferenceController::deleteAction',));
                    }
                    not_reference_delete:

                }

                if (0 === strpos($pathinfo, '/admin/tag')) {
                    // tag
                    if (rtrim($pathinfo, '/') === '/admin/tag') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'tag');
                        }

                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\TagController::indexAction',  '_route' => 'tag',);
                    }

                    // tag_show
                    if (preg_match('#^/admin/tag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_show')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\TagController::showAction',));
                    }

                    // tag_new
                    if ($pathinfo === '/admin/tag/new') {
                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\TagController::newAction',  '_route' => 'tag_new',);
                    }

                    // tag_create
                    if ($pathinfo === '/admin/tag/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_tag_create;
                        }

                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\TagController::createAction',  '_route' => 'tag_create',);
                    }
                    not_tag_create:

                    // tag_edit
                    if (preg_match('#^/admin/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_edit')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\TagController::editAction',));
                    }

                    // tag_update
                    if (preg_match('#^/admin/tag/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_tag_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_update')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\TagController::updateAction',));
                    }
                    not_tag_update:

                    // tag_delete
                    if (preg_match('#^/admin/tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_tag_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'tag_delete')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\TagController::deleteAction',));
                    }
                    not_tag_delete:

                }

                if (0 === strpos($pathinfo, '/admin/auteur')) {
                    // auteur
                    if (rtrim($pathinfo, '/') === '/admin/auteur') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'auteur');
                        }

                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::indexAction',  '_route' => 'auteur',);
                    }

                    // auteur_show
                    if (preg_match('#^/admin/auteur/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'auteur_show')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::showAction',));
                    }

                    // auteur_new
                    if ($pathinfo === '/admin/auteur/new') {
                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::newAction',  '_route' => 'auteur_new',);
                    }

                    // auteur_create
                    if ($pathinfo === '/admin/auteur/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_auteur_create;
                        }

                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::createAction',  '_route' => 'auteur_create',);
                    }
                    not_auteur_create:

                    // auteur_edit
                    if (preg_match('#^/admin/auteur/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'auteur_edit')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::editAction',));
                    }

                    // auteur_update
                    if (preg_match('#^/admin/auteur/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_auteur_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'auteur_update')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::updateAction',));
                    }
                    not_auteur_update:

                    // auteur_delete
                    if (preg_match('#^/admin/auteur/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_auteur_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'auteur_delete')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\AuteurController::deleteAction',));
                    }
                    not_auteur_delete:

                }

                if (0 === strpos($pathinfo, '/admin/image')) {
                    // image
                    if (rtrim($pathinfo, '/') === '/admin/image') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'image');
                        }

                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::indexAction',  '_route' => 'image',);
                    }

                    // image_show
                    if (preg_match('#^/admin/image/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_show')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::showAction',));
                    }

                    // image_new
                    if ($pathinfo === '/admin/image/new') {
                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::newAction',  '_route' => 'image_new',);
                    }

                    // image_create
                    if ($pathinfo === '/admin/image/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_image_create;
                        }

                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::createAction',  '_route' => 'image_create',);
                    }
                    not_image_create:

                    // image_edit
                    if (preg_match('#^/admin/image/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_edit')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::editAction',));
                    }

                    // image_update
                    if (preg_match('#^/admin/image/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_image_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_update')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::updateAction',));
                    }
                    not_image_update:

                    // image_delete
                    if (preg_match('#^/admin/image/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_image_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'image_delete')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\ImageController::deleteAction',));
                    }
                    not_image_delete:

                }

                if (0 === strpos($pathinfo, '/admin/categorie')) {
                    // categorie
                    if (rtrim($pathinfo, '/') === '/admin/categorie') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'categorie');
                        }

                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie',);
                    }

                    // categorie_show
                    if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_show')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::showAction',));
                    }

                    // categorie_new
                    if ($pathinfo === '/admin/categorie/new') {
                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::newAction',  '_route' => 'categorie_new',);
                    }

                    // categorie_create
                    if ($pathinfo === '/admin/categorie/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_categorie_create;
                        }

                        return array (  '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::createAction',  '_route' => 'categorie_create',);
                    }
                    not_categorie_create:

                    // categorie_edit
                    if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_edit')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::editAction',));
                    }

                    // categorie_update
                    if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_categorie_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_update')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::updateAction',));
                    }
                    not_categorie_update:

                    // categorie_delete
                    if (preg_match('#^/admin/categorie/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_categorie_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_delete')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::deleteAction',));
                    }
                    not_categorie_delete:

                }

            }

        }

        if (0 === strpos($pathinfo, '/categorie')) {
            // categorie_public
            if (rtrim($pathinfo, '/') === '/categorie') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'categorie_public');
                }

                return array (  '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::indexAction',  '_route' => 'categorie_public',);
            }

            // categorie_public_show
            if (preg_match('#^/categorie/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'categorie_public_show')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::showAction',));
            }

            // categorie_public_menu
            if ($pathinfo === '/categorie/submenu') {
                return array (  '_controller' => 'Walva\\HafBundle\\Controller\\CategorieController::menuAction',  '_route' => 'categorie_public_menu',);
            }

        }

        if (0 === strpos($pathinfo, '/admin/livre')) {
            // livre
            if (rtrim($pathinfo, '/') === '/admin/livre') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'livre');
                }

                return array (  '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::indexAction',  '_route' => 'livre',);
            }

            // livre_show
            if (preg_match('#^/admin/livre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'livre_show')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::showAction',));
            }

            // livre_new
            if ($pathinfo === '/admin/livre/new') {
                return array (  '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::newAction',  '_route' => 'livre_new',);
            }

            // livre_create
            if ($pathinfo === '/admin/livre/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_livre_create;
                }

                return array (  '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::createAction',  '_route' => 'livre_create',);
            }
            not_livre_create:

            // livre_edit
            if (preg_match('#^/admin/livre/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'livre_edit')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::editAction',));
            }

            // livre_update
            if (preg_match('#^/admin/livre/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_livre_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'livre_update')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::updateAction',));
            }
            not_livre_update:

            // livre_delete
            if (preg_match('#^/admin/livre/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_livre_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'livre_delete')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\LivreController::deleteAction',));
            }
            not_livre_delete:

        }

        if (0 === strpos($pathinfo, '/livre')) {
            // livre_public
            if (rtrim($pathinfo, '/') === '/livre') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'livre_public');
                }

                return array (  '_controller' => 'Walva\\HafBundle\\Controller\\PublicLivreController::indexAction',  '_route' => 'livre_public',);
            }

            // livre_public_list
            if (0 === strpos($pathinfo, '/livre/page') && preg_match('#^/livre/page/(?P<page>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'livre_public_list')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\PublicLivreController::indexAction',));
            }

            // livre_public_show
            if (preg_match('#^/livre/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'livre_public_show')), array (  '_controller' => 'Walva\\HafBundle\\Controller\\PublicLivreController::showAction',));
            }

            // livre_public_menu
            if ($pathinfo === '/livre/menu') {
                return array (  '_controller' => 'Walva\\HafBundle\\Controller\\PublicLivreController::menuAction',  '_route' => 'livre_public_menu',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
