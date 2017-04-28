<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
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

        if (0 === strpos($pathinfo, '/admin')) {
            if (0 === strpos($pathinfo, '/admin/t')) {
                if (0 === strpos($pathinfo, '/admin/threads')) {
                    // admin_threads
                    if (preg_match('#^/admin/threads/(?P<comment_id>[^/]++)/?$#s', $pathinfo, $matches)) {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_threads');
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_threads')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\ThreadsController::indexAction',));
                    }

                    // admin_threads_show
                    if (preg_match('#^/admin/threads/(?P<comment_id>[^/]++)/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_threads_show')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\ThreadsController::showAction',));
                    }

                    // admin_threads_new
                    if (preg_match('#^/admin/threads/(?P<comment_id>[^/]++)/new$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_threads_new')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\ThreadsController::newAction',));
                    }

                    // admin_threads_create
                    if (preg_match('#^/admin/threads/(?P<comment_id>[^/]++)/create$#s', $pathinfo, $matches)) {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_threads_create;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_threads_create')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\ThreadsController::createAction',));
                    }
                    not_admin_threads_create:

                    // admin_threads_edit
                    if (preg_match('#^/admin/threads/(?P<comment_id>[^/]++)/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_threads_edit')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\ThreadsController::editAction',));
                    }

                    // admin_threads_update
                    if (preg_match('#^/admin/threads/(?P<comment_id>[^/]++)/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_admin_threads_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_threads_update')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\ThreadsController::updateAction',));
                    }
                    not_admin_threads_update:

                    // admin_threads_delete
                    if (preg_match('#^/admin/threads/(?P<comment_id>[^/]++)/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_admin_threads_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_threads_delete')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\ThreadsController::deleteAction',));
                    }
                    not_admin_threads_delete:

                }

                if (0 === strpos($pathinfo, '/admin/tag')) {
                    // admin_tag
                    if (rtrim($pathinfo, '/') === '/admin/tag') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'admin_tag');
                        }

                        return array (  '_controller' => 'Gt\\ItBundle\\Controller\\TagController::indexAction',  '_route' => 'admin_tag',);
                    }

                    // admin_tag_show
                    if (preg_match('#^/admin/tag/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tag_show')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\TagController::showAction',));
                    }

                    // admin_tag_new
                    if ($pathinfo === '/admin/tag/new') {
                        return array (  '_controller' => 'Gt\\ItBundle\\Controller\\TagController::newAction',  '_route' => 'admin_tag_new',);
                    }

                    // admin_tag_create
                    if ($pathinfo === '/admin/tag/create') {
                        if ($this->context->getMethod() != 'POST') {
                            $allow[] = 'POST';
                            goto not_admin_tag_create;
                        }

                        return array (  '_controller' => 'Gt\\ItBundle\\Controller\\TagController::createAction',  '_route' => 'admin_tag_create',);
                    }
                    not_admin_tag_create:

                    // admin_tag_edit
                    if (preg_match('#^/admin/tag/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tag_edit')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\TagController::editAction',));
                    }

                    // admin_tag_update
                    if (preg_match('#^/admin/tag/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                            $allow = array_merge($allow, array('POST', 'PUT'));
                            goto not_admin_tag_update;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tag_update')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\TagController::updateAction',));
                    }
                    not_admin_tag_update:

                    // admin_tag_delete
                    if (preg_match('#^/admin/tag/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                        if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                            $allow = array_merge($allow, array('POST', 'DELETE'));
                            goto not_admin_tag_delete;
                        }

                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_tag_delete')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\TagController::deleteAction',));
                    }
                    not_admin_tag_delete:

                }

            }

            if (0 === strpos($pathinfo, '/admin/comment')) {
                // admin_comment
                if (preg_match('#^/admin/comment/(?P<item>[^/]++)/?$#s', $pathinfo, $matches)) {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_comment');
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_comment')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\CommentController::indexAction',));
                }

                // admin_comment_show
                if (preg_match('#^/admin/comment/(?P<item>[^/]++)/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_comment_show')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\CommentController::showAction',));
                }

                // admin_comment_new
                if (preg_match('#^/admin/comment/(?P<item>[^/]++)/new$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_comment_new')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\CommentController::newAction',));
                }

                // admin_comment_create
                if (preg_match('#^/admin/comment/(?P<item>[^/]++)/create$#s', $pathinfo, $matches)) {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_comment_create;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_comment_create')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\CommentController::createAction',));
                }
                not_admin_comment_create:

                // admin_comment_edit
                if (preg_match('#^/admin/comment/(?P<item>[^/]++)/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_comment_edit')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\CommentController::editAction',));
                }

                // admin_comment_update
                if (preg_match('#^/admin/comment/(?P<item>[^/]++)/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_comment_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_comment_update')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\CommentController::updateAction',));
                }
                not_admin_comment_update:

                // admin_comment_delete
                if (preg_match('#^/admin/comment/(?P<item>[^/]++)/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_comment_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_comment_delete')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\CommentController::deleteAction',));
                }
                not_admin_comment_delete:

            }

            if (0 === strpos($pathinfo, '/admin/blog')) {
                // admin_blog
                if (rtrim($pathinfo, '/') === '/admin/blog') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'admin_blog');
                    }

                    return array (  '_controller' => 'Gt\\ItBundle\\Controller\\BlogAdminController::indexAction',  '_route' => 'admin_blog',);
                }

                // admin_blog_show
                if (preg_match('#^/admin/blog/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_show')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\BlogAdminController::showAction',));
                }

                // admin_blog_new
                if ($pathinfo === '/admin/blog/new') {
                    return array (  '_controller' => 'Gt\\ItBundle\\Controller\\BlogAdminController::newAction',  '_route' => 'admin_blog_new',);
                }

                // admin_blog_create
                if ($pathinfo === '/admin/blog/create') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_admin_blog_create;
                    }

                    return array (  '_controller' => 'Gt\\ItBundle\\Controller\\BlogAdminController::createAction',  '_route' => 'admin_blog_create',);
                }
                not_admin_blog_create:

                // admin_blog_edit
                if (preg_match('#^/admin/blog/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_edit')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\BlogAdminController::editAction',));
                }

                // admin_blog_update
                if (preg_match('#^/admin/blog/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                        $allow = array_merge($allow, array('POST', 'PUT'));
                        goto not_admin_blog_update;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_update')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\BlogAdminController::updateAction',));
                }
                not_admin_blog_update:

                // admin_blog_delete
                if (preg_match('#^/admin/blog/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                        $allow = array_merge($allow, array('POST', 'DELETE'));
                        goto not_admin_blog_delete;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_blog_delete')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\BlogAdminController::deleteAction',));
                }
                not_admin_blog_delete:

            }

        }

        // gt_it_first
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'gt_it_first');
            }

            return array (  '_controller' => 'Gt\\ItBundle\\Controller\\FirstController::firstAction',  '_route' => 'gt_it_first',);
        }

        // gt_it_a
        if ($pathinfo === '/a') {
            return array (  '_controller' => 'Gt\\ItBundle\\Controller\\BlogController::ahmedAction',  '_route' => 'gt_it_a',);
        }

        if (0 === strpos($pathinfo, '/blog')) {
            // gt_it_blog
            if ($pathinfo === '/blog') {
                return array (  '_controller' => 'Gt\\ItBundle\\Controller\\BlogController::blogAction',  '_route' => 'gt_it_blog',);
            }

            // gt_it_blogSingle
            if (preg_match('#^/blog/(?P<id>[^/\\.]++)\\.(?P<format>html|xml)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'gt_it_blogSingle')), array (  '_controller' => 'Gt\\ItBundle\\Controller\\BlogController::blogSingleAction',));
            }

        }

        if (0 === strpos($pathinfo, '/admin/user')) {
            // admin_user
            if (rtrim($pathinfo, '/') === '/admin/user') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin_user');
                }

                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::indexAction',  '_route' => 'admin_user',);
            }

            // admin_user_show
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/show$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_show')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::showAction',));
            }

            // admin_user_new
            if ($pathinfo === '/admin/user/new') {
                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::newAction',  '_route' => 'admin_user_new',);
            }

            // admin_user_create
            if ($pathinfo === '/admin/user/create') {
                if ($this->context->getMethod() != 'POST') {
                    $allow[] = 'POST';
                    goto not_admin_user_create;
                }

                return array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::createAction',  '_route' => 'admin_user_create',);
            }
            not_admin_user_create:

            // admin_user_edit
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/edit$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_edit')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::editAction',));
            }

            // admin_user_update
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/update$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'PUT'))) {
                    $allow = array_merge($allow, array('POST', 'PUT'));
                    goto not_admin_user_update;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_update')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::updateAction',));
            }
            not_admin_user_update:

            // admin_user_delete
            if (preg_match('#^/admin/user/(?P<id>[^/]++)/delete$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('POST', 'DELETE'))) {
                    $allow = array_merge($allow, array('POST', 'DELETE'));
                    goto not_admin_user_delete;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'admin_user_delete')), array (  '_controller' => 'Utilisateurs\\UtilisateursBundle\\Controller\\UtilisateursController::deleteAction',));
            }
            not_admin_user_delete:

        }

        if (0 === strpos($pathinfo, '/log')) {
            if (0 === strpos($pathinfo, '/login')) {
                // fos_user_security_login
                if ($pathinfo === '/login') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_security_login;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::loginAction',  '_route' => 'fos_user_security_login',);
                }
                not_fos_user_security_login:

                // fos_user_security_check
                if ($pathinfo === '/login_check') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_security_check;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::checkAction',  '_route' => 'fos_user_security_check',);
                }
                not_fos_user_security_check:

            }

            // fos_user_security_logout
            if ($pathinfo === '/logout') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_security_logout;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\SecurityController::logoutAction',  '_route' => 'fos_user_security_logout',);
            }
            not_fos_user_security_logout:

        }

        if (0 === strpos($pathinfo, '/profile')) {
            // fos_user_profile_show
            if (rtrim($pathinfo, '/') === '/profile') {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_fos_user_profile_show;
                }

                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'fos_user_profile_show');
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::showAction',  '_route' => 'fos_user_profile_show',);
            }
            not_fos_user_profile_show:

            // fos_user_profile_edit
            if ($pathinfo === '/profile/edit') {
                if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                    goto not_fos_user_profile_edit;
                }

                return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ProfileController::editAction',  '_route' => 'fos_user_profile_edit',);
            }
            not_fos_user_profile_edit:

        }

        if (0 === strpos($pathinfo, '/re')) {
            if (0 === strpos($pathinfo, '/register')) {
                // fos_user_registration_register
                if (rtrim($pathinfo, '/') === '/register') {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_registration_register;
                    }

                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'fos_user_registration_register');
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::registerAction',  '_route' => 'fos_user_registration_register',);
                }
                not_fos_user_registration_register:

                if (0 === strpos($pathinfo, '/register/c')) {
                    // fos_user_registration_check_email
                    if ($pathinfo === '/register/check-email') {
                        if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                            $allow = array_merge($allow, array('GET', 'HEAD'));
                            goto not_fos_user_registration_check_email;
                        }

                        return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::checkEmailAction',  '_route' => 'fos_user_registration_check_email',);
                    }
                    not_fos_user_registration_check_email:

                    if (0 === strpos($pathinfo, '/register/confirm')) {
                        // fos_user_registration_confirm
                        if (preg_match('#^/register/confirm/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirm;
                            }

                            return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_registration_confirm')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmAction',));
                        }
                        not_fos_user_registration_confirm:

                        // fos_user_registration_confirmed
                        if ($pathinfo === '/register/confirmed') {
                            if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                                $allow = array_merge($allow, array('GET', 'HEAD'));
                                goto not_fos_user_registration_confirmed;
                            }

                            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\RegistrationController::confirmedAction',  '_route' => 'fos_user_registration_confirmed',);
                        }
                        not_fos_user_registration_confirmed:

                    }

                }

            }

            if (0 === strpos($pathinfo, '/resetting')) {
                // fos_user_resetting_request
                if ($pathinfo === '/resetting/request') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_request;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::requestAction',  '_route' => 'fos_user_resetting_request',);
                }
                not_fos_user_resetting_request:

                // fos_user_resetting_send_email
                if ($pathinfo === '/resetting/send-email') {
                    if ($this->context->getMethod() != 'POST') {
                        $allow[] = 'POST';
                        goto not_fos_user_resetting_send_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::sendEmailAction',  '_route' => 'fos_user_resetting_send_email',);
                }
                not_fos_user_resetting_send_email:

                // fos_user_resetting_check_email
                if ($pathinfo === '/resetting/check-email') {
                    if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'HEAD'));
                        goto not_fos_user_resetting_check_email;
                    }

                    return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::checkEmailAction',  '_route' => 'fos_user_resetting_check_email',);
                }
                not_fos_user_resetting_check_email:

                // fos_user_resetting_reset
                if (0 === strpos($pathinfo, '/resetting/reset') && preg_match('#^/resetting/reset/(?P<token>[^/]++)$#s', $pathinfo, $matches)) {
                    if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                        $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                        goto not_fos_user_resetting_reset;
                    }

                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'fos_user_resetting_reset')), array (  '_controller' => 'FOS\\UserBundle\\Controller\\ResettingController::resetAction',));
                }
                not_fos_user_resetting_reset:

            }

        }

        // fos_user_change_password
        if ($pathinfo === '/profile/change-password') {
            if (!in_array($this->context->getMethod(), array('GET', 'POST', 'HEAD'))) {
                $allow = array_merge($allow, array('GET', 'POST', 'HEAD'));
                goto not_fos_user_change_password;
            }

            return array (  '_controller' => 'FOS\\UserBundle\\Controller\\ChangePasswordController::changePasswordAction',  '_route' => 'fos_user_change_password',);
        }
        not_fos_user_change_password:

        if (0 === strpos($pathinfo, '/media/cache/resolve')) {
            // liip_imagine_filter_runtime
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/rc/(?P<hash>[^/]++)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter_runtime;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter_runtime')), array (  '_controller' => 'liip_imagine.controller:filterRuntimeAction',));
            }
            not_liip_imagine_filter_runtime:

            // liip_imagine_filter
            if (preg_match('#^/media/cache/resolve/(?P<filter>[A-z0-9_\\-]*)/(?P<path>.+)$#s', $pathinfo, $matches)) {
                if (!in_array($this->context->getMethod(), array('GET', 'HEAD'))) {
                    $allow = array_merge($allow, array('GET', 'HEAD'));
                    goto not_liip_imagine_filter;
                }

                return $this->mergeDefaults(array_replace($matches, array('_route' => 'liip_imagine_filter')), array (  '_controller' => 'liip_imagine.controller:filterAction',));
            }
            not_liip_imagine_filter:

        }

        if (0 === strpos($pathinfo, '/ab')) {
            // easyadmin
            if (rtrim($pathinfo, '/') === '/ab') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'easyadmin');
                }

                return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'easyadmin',);
            }

            // admin
            if (rtrim($pathinfo, '/') === '/ab') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'admin');
                }

                return array (  '_controller' => 'JavierEguiluz\\Bundle\\EasyAdminBundle\\Controller\\AdminController::indexAction',  '_route' => 'admin',);
            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
