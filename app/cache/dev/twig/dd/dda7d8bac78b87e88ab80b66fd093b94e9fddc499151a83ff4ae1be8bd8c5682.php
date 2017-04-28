<?php

/* @EasyAdmin/default/layout.html.twig */
class __TwigTemplate_69717b45f50d197efc4c7d59ca76223b379b60923cbcbdaed195359c7c4754f0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'page_title' => array($this, 'block_page_title'),
            'head_stylesheets' => array($this, 'block_head_stylesheets'),
            'head_favicon' => array($this, 'block_head_favicon'),
            'head_javascript' => array($this, 'block_head_javascript'),
            'adminlte_options' => array($this, 'block_adminlte_options'),
            'body' => array($this, 'block_body'),
            'body_id' => array($this, 'block_body_id'),
            'body_class' => array($this, 'block_body_class'),
            'wrapper' => array($this, 'block_wrapper'),
            'header' => array($this, 'block_header'),
            'header_logo' => array($this, 'block_header_logo'),
            'header_custom_menu' => array($this, 'block_header_custom_menu'),
            'user_menu' => array($this, 'block_user_menu'),
            'sidebar' => array($this, 'block_sidebar'),
            'main_menu_wrapper' => array($this, 'block_main_menu_wrapper'),
            'content' => array($this, 'block_content'),
            'flash_messages' => array($this, 'block_flash_messages'),
            'content_header' => array($this, 'block_content_header'),
            'content_title' => array($this, 'block_content_title'),
            'main' => array($this, 'block_main'),
            'body_javascript' => array($this, 'block_body_javascript'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_4f3928f09ee64bb6fb02873ce0c20e98ad0a05cb9a579381f3f923d3dd793dd4 = $this->env->getExtension("native_profiler");
        $__internal_4f3928f09ee64bb6fb02873ce0c20e98ad0a05cb9a579381f3f923d3dd793dd4->enter($__internal_4f3928f09ee64bb6fb02873ce0c20e98ad0a05cb9a579381f3f923d3dd793dd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EasyAdmin/default/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html lang=\"";
        // line 2
        echo twig_escape_filter($this->env, _twig_default_filter(twig_first($this->env, twig_split_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array()), "_")), "en"), "html", null, true);
        echo "\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>";
        // line 9
        $this->displayBlock('page_title', $context, $blocks);
        echo "</title>

        ";
        // line 11
        $this->displayBlock('head_stylesheets', $context, $blocks);
        // line 17
        echo "
        ";
        // line 18
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.css"));
        foreach ($context['_seq'] as $context["_key"] => $context["css_asset"]) {
            // line 19
            echo "            <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["css_asset"]), "html", null, true);
            echo "\">
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
        ";
        // line 22
        $this->displayBlock('head_favicon', $context, $blocks);
        // line 26
        echo "
        ";
        // line 27
        $this->displayBlock('head_javascript', $context, $blocks);
        // line 44
        echo "
        <!--[if lt IE 9]>
            <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/html5shiv.min.css"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/respond.min.css"), "html", null, true);
        echo "\"></script>
        <![endif]-->
    </head>

    ";
        // line 51
        $this->displayBlock('body', $context, $blocks);
        // line 132
        echo "</html>
";
        
        $__internal_4f3928f09ee64bb6fb02873ce0c20e98ad0a05cb9a579381f3f923d3dd793dd4->leave($__internal_4f3928f09ee64bb6fb02873ce0c20e98ad0a05cb9a579381f3f923d3dd793dd4_prof);

    }

    // line 9
    public function block_page_title($context, array $blocks = array())
    {
        $__internal_37b64101cd18cbf8bcefb8787925724a7d472878a7254d5cc0b46ecfece4b704 = $this->env->getExtension("native_profiler");
        $__internal_37b64101cd18cbf8bcefb8787925724a7d472878a7254d5cc0b46ecfece4b704->enter($__internal_37b64101cd18cbf8bcefb8787925724a7d472878a7254d5cc0b46ecfece4b704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "page_title"));

        echo strip_tags($this->renderBlock("content_title", $context, $blocks));
        
        $__internal_37b64101cd18cbf8bcefb8787925724a7d472878a7254d5cc0b46ecfece4b704->leave($__internal_37b64101cd18cbf8bcefb8787925724a7d472878a7254d5cc0b46ecfece4b704_prof);

    }

    // line 11
    public function block_head_stylesheets($context, array $blocks = array())
    {
        $__internal_4e2a1da332492d01ea83de3403eb4082b442880572621236b38c6532e4f78338 = $this->env->getExtension("native_profiler");
        $__internal_4e2a1da332492d01ea83de3403eb4082b442880572621236b38c6532e4f78338->enter($__internal_4e2a1da332492d01ea83de3403eb4082b442880572621236b38c6532e4f78338_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_stylesheets"));

        // line 12
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/stylesheet/easyadmin-all.min.css"), "html", null, true);
        echo "\">
            <style>
                ";
        // line 14
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("_internal.custom_css");
        echo "
            </style>
        ";
        
        $__internal_4e2a1da332492d01ea83de3403eb4082b442880572621236b38c6532e4f78338->leave($__internal_4e2a1da332492d01ea83de3403eb4082b442880572621236b38c6532e4f78338_prof);

    }

    // line 22
    public function block_head_favicon($context, array $blocks = array())
    {
        $__internal_daca4380be160a09a1fc9ef738ae3567e8c3297262bad7201c7ff462b7cd6e90 = $this->env->getExtension("native_profiler");
        $__internal_daca4380be160a09a1fc9ef738ae3567e8c3297262bad7201c7ff462b7cd6e90->enter($__internal_daca4380be160a09a1fc9ef738ae3567e8c3297262bad7201c7ff462b7cd6e90_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_favicon"));

        // line 23
        echo "            ";
        $context["favicon"] = $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.favicon");
        // line 24
        echo "            <link rel=\"icon\" type=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "mime_type", array()), "html", null, true);
        echo "\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute((isset($context["favicon"]) ? $context["favicon"] : $this->getContext($context, "favicon")), "path", array())), "html", null, true);
        echo "\" />
        ";
        
        $__internal_daca4380be160a09a1fc9ef738ae3567e8c3297262bad7201c7ff462b7cd6e90->leave($__internal_daca4380be160a09a1fc9ef738ae3567e8c3297262bad7201c7ff462b7cd6e90_prof);

    }

    // line 27
    public function block_head_javascript($context, array $blocks = array())
    {
        $__internal_4a553cb9906e9feef816339942f6f2bf97e1bdd4ce4d14bc58a683fe925c9d74 = $this->env->getExtension("native_profiler");
        $__internal_4a553cb9906e9feef816339942f6f2bf97e1bdd4ce4d14bc58a683fe925c9d74->enter($__internal_4a553cb9906e9feef816339942f6f2bf97e1bdd4ce4d14bc58a683fe925c9d74_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head_javascript"));

        // line 28
        echo "            ";
        $this->displayBlock('adminlte_options', $context, $blocks);
        // line 41
        echo "
            <script src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/easyadmin/javascript/easyadmin-all.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_4a553cb9906e9feef816339942f6f2bf97e1bdd4ce4d14bc58a683fe925c9d74->leave($__internal_4a553cb9906e9feef816339942f6f2bf97e1bdd4ce4d14bc58a683fe925c9d74_prof);

    }

    // line 28
    public function block_adminlte_options($context, array $blocks = array())
    {
        $__internal_6d258da901fa198386354073bd2af491bbb3307a588271dc3fb19b3ca30a9c78 = $this->env->getExtension("native_profiler");
        $__internal_6d258da901fa198386354073bd2af491bbb3307a588271dc3fb19b3ca30a9c78->enter($__internal_6d258da901fa198386354073bd2af491bbb3307a588271dc3fb19b3ca30a9c78_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "adminlte_options"));

        // line 29
        echo "                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            ";
        
        $__internal_6d258da901fa198386354073bd2af491bbb3307a588271dc3fb19b3ca30a9c78->leave($__internal_6d258da901fa198386354073bd2af491bbb3307a588271dc3fb19b3ca30a9c78_prof);

    }

    // line 51
    public function block_body($context, array $blocks = array())
    {
        $__internal_a095ed901b2969a63b07012f51f2ca5520707d1f9a40a8ba84363b29904b5db2 = $this->env->getExtension("native_profiler");
        $__internal_a095ed901b2969a63b07012f51f2ca5520707d1f9a40a8ba84363b29904b5db2->enter($__internal_a095ed901b2969a63b07012f51f2ca5520707d1f9a40a8ba84363b29904b5db2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 52
        echo "    <body id=\"";
        $this->displayBlock('body_id', $context, $blocks);
        echo "\" class=\"easyadmin sidebar-mini ";
        $this->displayBlock('body_class', $context, $blocks);
        echo " ";
        echo (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "cookies", array()), "has", array(0 => "_easyadmin_navigation_iscollapsed"), "method")) ? ("sidebar-collapse") : (""));
        echo "\">
        <div class=\"wrapper\">
        ";
        // line 54
        $this->displayBlock('wrapper', $context, $blocks);
        // line 123
        echo "        </div>

        ";
        // line 125
        $this->displayBlock('body_javascript', $context, $blocks);
        // line 126
        echo "
        ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.assets.js"));
        foreach ($context['_seq'] as $context["_key"] => $context["js_asset"]) {
            // line 128
            echo "            <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($context["js_asset"]), "html", null, true);
            echo "\"></script>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js_asset'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        echo "    </body>
    ";
        
        $__internal_a095ed901b2969a63b07012f51f2ca5520707d1f9a40a8ba84363b29904b5db2->leave($__internal_a095ed901b2969a63b07012f51f2ca5520707d1f9a40a8ba84363b29904b5db2_prof);

    }

    // line 52
    public function block_body_id($context, array $blocks = array())
    {
        $__internal_8d149d0463d7667e9f34ccbf8769acd58feb4c3929457256bb424e8c41260d4d = $this->env->getExtension("native_profiler");
        $__internal_8d149d0463d7667e9f34ccbf8769acd58feb4c3929457256bb424e8c41260d4d->enter($__internal_8d149d0463d7667e9f34ccbf8769acd58feb4c3929457256bb424e8c41260d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_id"));

        
        $__internal_8d149d0463d7667e9f34ccbf8769acd58feb4c3929457256bb424e8c41260d4d->leave($__internal_8d149d0463d7667e9f34ccbf8769acd58feb4c3929457256bb424e8c41260d4d_prof);

    }

    public function block_body_class($context, array $blocks = array())
    {
        $__internal_3cc85d39e0490853d1d841cdd9aba1fd04300c83f951695729c2a6dcc06cd666 = $this->env->getExtension("native_profiler");
        $__internal_3cc85d39e0490853d1d841cdd9aba1fd04300c83f951695729c2a6dcc06cd666->enter($__internal_3cc85d39e0490853d1d841cdd9aba1fd04300c83f951695729c2a6dcc06cd666_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_class"));

        
        $__internal_3cc85d39e0490853d1d841cdd9aba1fd04300c83f951695729c2a6dcc06cd666->leave($__internal_3cc85d39e0490853d1d841cdd9aba1fd04300c83f951695729c2a6dcc06cd666_prof);

    }

    // line 54
    public function block_wrapper($context, array $blocks = array())
    {
        $__internal_d678856daf2274438e02be2f593f67a52c23b8dfd2ba7f9571247c1db8f164db = $this->env->getExtension("native_profiler");
        $__internal_d678856daf2274438e02be2f593f67a52c23b8dfd2ba7f9571247c1db8f164db->enter($__internal_d678856daf2274438e02be2f593f67a52c23b8dfd2ba7f9571247c1db8f164db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "wrapper"));

        // line 55
        echo "            <header class=\"main-header\">
            ";
        // line 56
        $this->displayBlock('header', $context, $blocks);
        // line 89
        echo "            </header>

            <aside class=\"main-sidebar\">
            ";
        // line 92
        $this->displayBlock('sidebar', $context, $blocks);
        // line 103
        echo "            </aside>

            <div class=\"content-wrapper\">
            ";
        // line 106
        $this->displayBlock('content', $context, $blocks);
        // line 121
        echo "            </div>
        ";
        
        $__internal_d678856daf2274438e02be2f593f67a52c23b8dfd2ba7f9571247c1db8f164db->leave($__internal_d678856daf2274438e02be2f593f67a52c23b8dfd2ba7f9571247c1db8f164db_prof);

    }

    // line 56
    public function block_header($context, array $blocks = array())
    {
        $__internal_bb2c095e325b54d710edd32592fbe2c3f27b7f64354f9a2a9899cd70bf0080a7 = $this->env->getExtension("native_profiler");
        $__internal_bb2c095e325b54d710edd32592fbe2c3f27b7f64354f9a2a9899cd70bf0080a7->enter($__internal_bb2c095e325b54d710edd32592fbe2c3f27b7f64354f9a2a9899cd70bf0080a7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header"));

        // line 57
        echo "                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">";
        // line 59
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("toggle_navigation", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                    </a>

                    <div id=\"header-logo\">
                        ";
        // line 63
        $this->displayBlock('header_logo', $context, $blocks);
        // line 68
        echo "                    </div>

                    <div class=\"navbar-custom-menu\">
                    ";
        // line 71
        $this->displayBlock('header_custom_menu', $context, $blocks);
        // line 86
        echo "                    </div>
                </nav>
            ";
        
        $__internal_bb2c095e325b54d710edd32592fbe2c3f27b7f64354f9a2a9899cd70bf0080a7->leave($__internal_bb2c095e325b54d710edd32592fbe2c3f27b7f64354f9a2a9899cd70bf0080a7_prof);

    }

    // line 63
    public function block_header_logo($context, array $blocks = array())
    {
        $__internal_93f7b4583824ca66aeea91b26cb78f1b0dadddbfc888ff054ea1f3813272de5f = $this->env->getExtension("native_profiler");
        $__internal_93f7b4583824ca66aeea91b26cb78f1b0dadddbfc888ff054ea1f3813272de5f->enter($__internal_93f7b4583824ca66aeea91b26cb78f1b0dadddbfc888ff054ea1f3813272de5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_logo"));

        // line 64
        echo "                            <a class=\"logo ";
        echo (((twig_length_filter($this->env, $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")) > 14)) ? ("logo-long") : (""));
        echo "\" title=\"";
        echo twig_escape_filter($this->env, strip_tags($this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name")), "html", null, true);
        echo "\" href=\"";
        echo $this->env->getExtension('routing')->getPath("easyadmin");
        echo "\">
                                ";
        // line 65
        echo $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("site_name");
        echo "
                            </a>
                        ";
        
        $__internal_93f7b4583824ca66aeea91b26cb78f1b0dadddbfc888ff054ea1f3813272de5f->leave($__internal_93f7b4583824ca66aeea91b26cb78f1b0dadddbfc888ff054ea1f3813272de5f_prof);

    }

    // line 71
    public function block_header_custom_menu($context, array $blocks = array())
    {
        $__internal_70aafd477db7d97214b0acb58724706c9ff9dcf4079f8c19fcd077d2e4c198e3 = $this->env->getExtension("native_profiler");
        $__internal_70aafd477db7d97214b0acb58724706c9ff9dcf4079f8c19fcd077d2e4c198e3->enter($__internal_70aafd477db7d97214b0acb58724706c9ff9dcf4079f8c19fcd077d2e4c198e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "header_custom_menu"));

        // line 72
        echo "                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                ";
        // line 74
        $this->displayBlock('user_menu', $context, $blocks);
        // line 83
        echo "                            </li>
                        </ul>
                    ";
        
        $__internal_70aafd477db7d97214b0acb58724706c9ff9dcf4079f8c19fcd077d2e4c198e3->leave($__internal_70aafd477db7d97214b0acb58724706c9ff9dcf4079f8c19fcd077d2e4c198e3_prof);

    }

    // line 74
    public function block_user_menu($context, array $blocks = array())
    {
        $__internal_dc57fd45278646ee17e2d79ec948354a3d21a0ee307d9da5addb2a84748b380c = $this->env->getExtension("native_profiler");
        $__internal_dc57fd45278646ee17e2d79ec948354a3d21a0ee307d9da5addb2a84748b380c->enter($__internal_dc57fd45278646ee17e2d79ec948354a3d21a0ee307d9da5addb2a84748b380c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "user_menu"));

        // line 75
        echo "                                    <span class=\"sr-only\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.logged_in_as", array(), "EasyAdminBundle"), "html", null, true);
        echo "</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    ";
        // line 77
        if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array()))) : (""))) {
            // line 78
            echo "                                        ";
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : null), "user", array(), "any", false, true), "username", array()), $this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))) : ($this->env->getExtension('translator')->trans("user.unnamed", array(), "EasyAdminBundle"))), "html", null, true);
            echo "
                                    ";
        } else {
            // line 80
            echo "                                        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("user.anonymous", array(), "EasyAdminBundle"), "html", null, true);
            echo "
                                    ";
        }
        // line 82
        echo "                                ";
        
        $__internal_dc57fd45278646ee17e2d79ec948354a3d21a0ee307d9da5addb2a84748b380c->leave($__internal_dc57fd45278646ee17e2d79ec948354a3d21a0ee307d9da5addb2a84748b380c_prof);

    }

    // line 92
    public function block_sidebar($context, array $blocks = array())
    {
        $__internal_6ec985ed6ddde669ffdb7cd882a3bc5511a168a4023f8e1f3fed14fe69e46dc7 = $this->env->getExtension("native_profiler");
        $__internal_6ec985ed6ddde669ffdb7cd882a3bc5511a168a4023f8e1f3fed14fe69e46dc7->enter($__internal_6ec985ed6ddde669ffdb7cd882a3bc5511a168a4023f8e1f3fed14fe69e46dc7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sidebar"));

        // line 93
        echo "                <section class=\"sidebar\">
                    ";
        // line 94
        $this->displayBlock('main_menu_wrapper', $context, $blocks);
        // line 101
        echo "                </section>
            ";
        
        $__internal_6ec985ed6ddde669ffdb7cd882a3bc5511a168a4023f8e1f3fed14fe69e46dc7->leave($__internal_6ec985ed6ddde669ffdb7cd882a3bc5511a168a4023f8e1f3fed14fe69e46dc7_prof);

    }

    // line 94
    public function block_main_menu_wrapper($context, array $blocks = array())
    {
        $__internal_383c4081266ad2f84b44bf67d01d7f982de41a20805a734e07c050e219397a48 = $this->env->getExtension("native_profiler");
        $__internal_383c4081266ad2f84b44bf67d01d7f982de41a20805a734e07c050e219397a48->enter($__internal_383c4081266ad2f84b44bf67d01d7f982de41a20805a734e07c050e219397a48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main_menu_wrapper"));

        // line 95
        echo "                        ";
        echo twig_include($this->env, $context, array(0 => ((        // line 96
array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "menu", array())) : ("")), 1 => $this->env->getExtension('easyadmin_extension')->getBackendConfiguration("design.templates.menu"), 2 => "@EasyAdmin/default/menu.html.twig"));
        // line 99
        echo "
                    ";
        
        $__internal_383c4081266ad2f84b44bf67d01d7f982de41a20805a734e07c050e219397a48->leave($__internal_383c4081266ad2f84b44bf67d01d7f982de41a20805a734e07c050e219397a48_prof);

    }

    // line 106
    public function block_content($context, array $blocks = array())
    {
        $__internal_8bce75cbebcfb679e348a08a13c1d82a63ae54fa4d7999721c75776a5c230c8c = $this->env->getExtension("native_profiler");
        $__internal_8bce75cbebcfb679e348a08a13c1d82a63ae54fa4d7999721c75776a5c230c8c->enter($__internal_8bce75cbebcfb679e348a08a13c1d82a63ae54fa4d7999721c75776a5c230c8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 107
        echo "                ";
        $this->displayBlock('flash_messages', $context, $blocks);
        // line 110
        echo "
                <section class=\"content-header\">
                ";
        // line 112
        $this->displayBlock('content_header', $context, $blocks);
        // line 115
        echo "                </section>

                <section id=\"main\" class=\"content\">
                    ";
        // line 118
        $this->displayBlock('main', $context, $blocks);
        // line 119
        echo "                </section>
            ";
        
        $__internal_8bce75cbebcfb679e348a08a13c1d82a63ae54fa4d7999721c75776a5c230c8c->leave($__internal_8bce75cbebcfb679e348a08a13c1d82a63ae54fa4d7999721c75776a5c230c8c_prof);

    }

    // line 107
    public function block_flash_messages($context, array $blocks = array())
    {
        $__internal_fd1e118226a44b71b80b6704477337be799262ab85d810ded142b803d5401fca = $this->env->getExtension("native_profiler");
        $__internal_fd1e118226a44b71b80b6704477337be799262ab85d810ded142b803d5401fca->enter($__internal_fd1e118226a44b71b80b6704477337be799262ab85d810ded142b803d5401fca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "flash_messages"));

        // line 108
        echo "                    ";
        echo twig_include($this->env, $context, ((array_key_exists("_entity_config", $context)) ? ($this->getAttribute($this->getAttribute((isset($context["_entity_config"]) ? $context["_entity_config"] : $this->getContext($context, "_entity_config")), "templates", array()), "flash_messages", array())) : ("@EasyAdmin/default/flash_messages.html.twig")));
        echo "
                ";
        
        $__internal_fd1e118226a44b71b80b6704477337be799262ab85d810ded142b803d5401fca->leave($__internal_fd1e118226a44b71b80b6704477337be799262ab85d810ded142b803d5401fca_prof);

    }

    // line 112
    public function block_content_header($context, array $blocks = array())
    {
        $__internal_07a533b109c506c7868dcd3e5a975ce54350f8655f56de481b6dfeeb625db660 = $this->env->getExtension("native_profiler");
        $__internal_07a533b109c506c7868dcd3e5a975ce54350f8655f56de481b6dfeeb625db660->enter($__internal_07a533b109c506c7868dcd3e5a975ce54350f8655f56de481b6dfeeb625db660_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_header"));

        // line 113
        echo "                    <h1 class=\"title\">";
        $this->displayBlock('content_title', $context, $blocks);
        echo "</h1>
                ";
        
        $__internal_07a533b109c506c7868dcd3e5a975ce54350f8655f56de481b6dfeeb625db660->leave($__internal_07a533b109c506c7868dcd3e5a975ce54350f8655f56de481b6dfeeb625db660_prof);

    }

    public function block_content_title($context, array $blocks = array())
    {
        $__internal_990e9552cdaa42ac175f8782d7ca2317b8c631f7975e087e71a288a5a3ecd18e = $this->env->getExtension("native_profiler");
        $__internal_990e9552cdaa42ac175f8782d7ca2317b8c631f7975e087e71a288a5a3ecd18e->enter($__internal_990e9552cdaa42ac175f8782d7ca2317b8c631f7975e087e71a288a5a3ecd18e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content_title"));

        
        $__internal_990e9552cdaa42ac175f8782d7ca2317b8c631f7975e087e71a288a5a3ecd18e->leave($__internal_990e9552cdaa42ac175f8782d7ca2317b8c631f7975e087e71a288a5a3ecd18e_prof);

    }

    // line 118
    public function block_main($context, array $blocks = array())
    {
        $__internal_ad8d2d30a033550f48c5a08108d9e7e97372267027264d15ceb1c49af4f40b04 = $this->env->getExtension("native_profiler");
        $__internal_ad8d2d30a033550f48c5a08108d9e7e97372267027264d15ceb1c49af4f40b04->enter($__internal_ad8d2d30a033550f48c5a08108d9e7e97372267027264d15ceb1c49af4f40b04_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "main"));

        
        $__internal_ad8d2d30a033550f48c5a08108d9e7e97372267027264d15ceb1c49af4f40b04->leave($__internal_ad8d2d30a033550f48c5a08108d9e7e97372267027264d15ceb1c49af4f40b04_prof);

    }

    // line 125
    public function block_body_javascript($context, array $blocks = array())
    {
        $__internal_776cc29e3fa55d18e3e0903db85f33be1da3e4e84d7b872b1f02ea744fa876be = $this->env->getExtension("native_profiler");
        $__internal_776cc29e3fa55d18e3e0903db85f33be1da3e4e84d7b872b1f02ea744fa876be->enter($__internal_776cc29e3fa55d18e3e0903db85f33be1da3e4e84d7b872b1f02ea744fa876be_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_javascript"));

        
        $__internal_776cc29e3fa55d18e3e0903db85f33be1da3e4e84d7b872b1f02ea744fa876be->leave($__internal_776cc29e3fa55d18e3e0903db85f33be1da3e4e84d7b872b1f02ea744fa876be_prof);

    }

    public function getTemplateName()
    {
        return "@EasyAdmin/default/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  550 => 125,  539 => 118,  519 => 113,  513 => 112,  503 => 108,  497 => 107,  489 => 119,  487 => 118,  482 => 115,  480 => 112,  476 => 110,  473 => 107,  467 => 106,  459 => 99,  457 => 96,  455 => 95,  449 => 94,  441 => 101,  439 => 94,  436 => 93,  430 => 92,  423 => 82,  417 => 80,  411 => 78,  409 => 77,  403 => 75,  397 => 74,  388 => 83,  386 => 74,  382 => 72,  376 => 71,  366 => 65,  357 => 64,  351 => 63,  342 => 86,  340 => 71,  335 => 68,  333 => 63,  326 => 59,  322 => 57,  316 => 56,  308 => 121,  306 => 106,  301 => 103,  299 => 92,  294 => 89,  292 => 56,  289 => 55,  283 => 54,  262 => 52,  254 => 130,  245 => 128,  241 => 127,  238 => 126,  236 => 125,  232 => 123,  230 => 54,  220 => 52,  214 => 51,  196 => 29,  190 => 28,  181 => 42,  178 => 41,  175 => 28,  169 => 27,  157 => 24,  154 => 23,  148 => 22,  138 => 14,  132 => 12,  126 => 11,  114 => 9,  106 => 132,  104 => 51,  97 => 47,  93 => 46,  89 => 44,  87 => 27,  84 => 26,  82 => 22,  79 => 21,  70 => 19,  66 => 18,  63 => 17,  61 => 11,  56 => 9,  46 => 2,  43 => 1,);
    }

    public function getSource()
    {
        return "<!DOCTYPE html>
<html lang=\"{{ app.request.locale|split('_')|first|default('en') }}\">
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta content=\"width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no\" name=\"viewport\">
        <meta name=\"generator\" content=\"EasyAdmin\" />

        <title>{% block page_title %}{{ block('content_title')|striptags|raw }}{% endblock %}</title>

        {% block head_stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('bundles/easyadmin/stylesheet/easyadmin-all.min.css') }}\">
            <style>
                {{ easyadmin_config('_internal.custom_css')|raw }}
            </style>
        {% endblock %}

        {% for css_asset in easyadmin_config('design.assets.css') %}
            <link rel=\"stylesheet\" href=\"{{ asset(css_asset) }}\">
        {% endfor %}

        {% block head_favicon %}
            {% set favicon = easyadmin_config('design.assets.favicon') %}
            <link rel=\"icon\" type=\"{{ favicon.mime_type }}\" href=\"{{ asset(favicon.path) }}\" />
        {% endblock %}

        {% block head_javascript %}
            {% block adminlte_options %}
                <script type=\"text/javascript\">
                    var AdminLTEOptions = {
                        animationSpeed: 'normal',
                        sidebarExpandOnHover: false,
                        enableBoxRefresh: false,
                        enableBSToppltip: false,
                        enableFastclick: false,
                        enableControlSidebar: false,
                        enableBoxWidget: false
                    };
                </script>
            {% endblock %}

            <script src=\"{{ asset('bundles/easyadmin/javascript/easyadmin-all.min.js') }}\"></script>
        {% endblock head_javascript %}

        <!--[if lt IE 9]>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/html5shiv.min.css') }}\"></script>
            <script src=\"{{ asset('bundles/easyadmin/stylesheet/respond.min.css') }}\"></script>
        <![endif]-->
    </head>

    {% block body %}
    <body id=\"{% block body_id %}{% endblock %}\" class=\"easyadmin sidebar-mini {% block body_class %}{% endblock %} {{ app.request.cookies.has('_easyadmin_navigation_iscollapsed') ? 'sidebar-collapse' }}\">
        <div class=\"wrapper\">
        {% block wrapper %}
            <header class=\"main-header\">
            {% block header %}
                <nav class=\"navbar\" role=\"navigation\">
                    <a href=\"#\" class=\"sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                        <span class=\"sr-only\">{{ 'toggle_navigation'|trans(domain = 'EasyAdminBundle') }}</span>
                    </a>

                    <div id=\"header-logo\">
                        {% block header_logo %}
                            <a class=\"logo {{ easyadmin_config('site_name')|length > 14 ? 'logo-long' }}\" title=\"{{ easyadmin_config('site_name')|striptags }}\" href=\"{{ path('easyadmin') }}\">
                                {{ easyadmin_config('site_name')|raw }}
                            </a>
                        {% endblock header_logo %}
                    </div>

                    <div class=\"navbar-custom-menu\">
                    {% block header_custom_menu %}
                        <ul class=\"nav navbar-nav\">
                            <li class=\"user user-menu\">
                                {% block user_menu %}
                                    <span class=\"sr-only\">{{ 'user.logged_in_as'|trans(domain = 'EasyAdminBundle') }}</span>
                                    <i class=\"hidden-xs fa fa-user\"></i>
                                    {% if app.user|default %}
                                        {{ app.user.username|default('user.unnamed'|trans(domain = 'EasyAdminBundle')) }}
                                    {% else %}
                                        {{ 'user.anonymous'|trans(domain = 'EasyAdminBundle') }}
                                    {% endif %}
                                {% endblock user_menu %}
                            </li>
                        </ul>
                    {% endblock header_custom_menu %}
                    </div>
                </nav>
            {% endblock header %}
            </header>

            <aside class=\"main-sidebar\">
            {% block sidebar %}
                <section class=\"sidebar\">
                    {% block main_menu_wrapper %}
                        {{ include([
                            _entity_config is defined ? _entity_config.templates.menu,
                            easyadmin_config('design.templates.menu'),
                            '@EasyAdmin/default/menu.html.twig'
                        ]) }}
                    {% endblock main_menu_wrapper %}
                </section>
            {% endblock sidebar %}
            </aside>

            <div class=\"content-wrapper\">
            {% block content %}
                {% block flash_messages %}
                    {{ include(_entity_config is defined ? _entity_config.templates.flash_messages : '@EasyAdmin/default/flash_messages.html.twig') }}
                {% endblock flash_messages %}

                <section class=\"content-header\">
                {% block content_header %}
                    <h1 class=\"title\">{% block content_title %}{% endblock %}</h1>
                {% endblock content_header %}
                </section>

                <section id=\"main\" class=\"content\">
                    {% block main %}{% endblock %}
                </section>
            {% endblock content %}
            </div>
        {% endblock wrapper %}
        </div>

        {% block body_javascript %}{% endblock body_javascript %}

        {% for js_asset in easyadmin_config('design.assets.js') %}
            <script src=\"{{ asset(js_asset) }}\"></script>
        {% endfor %}
    </body>
    {% endblock body %}
</html>
";
    }
}
