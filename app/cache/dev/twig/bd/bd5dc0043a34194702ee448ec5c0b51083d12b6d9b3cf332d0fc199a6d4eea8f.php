<?php

/* GtItBundle:Blog:blog.html.twig */
class __TwigTemplate_788d029378c4bf325fe99be8feef34cf2d4947d6c11cf9a04b80beefe9acf089 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("::modulesUsed/bloglayout.html.twig", "GtItBundle:Blog:blog.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::modulesUsed/bloglayout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_610712ea3533bc95d20753b0da1d3a9632f8c998ff74d5534b132212b1a2e8d1 = $this->env->getExtension("native_profiler");
        $__internal_610712ea3533bc95d20753b0da1d3a9632f8c998ff74d5534b132212b1a2e8d1->enter($__internal_610712ea3533bc95d20753b0da1d3a9632f8c998ff74d5534b132212b1a2e8d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "GtItBundle:Blog:blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_610712ea3533bc95d20753b0da1d3a9632f8c998ff74d5534b132212b1a2e8d1->leave($__internal_610712ea3533bc95d20753b0da1d3a9632f8c998ff74d5534b132212b1a2e8d1_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_4515f8545ac9fffdff8fff85e1eba1d75442a8245a37412461781dc101c1a687 = $this->env->getExtension("native_profiler");
        $__internal_4515f8545ac9fffdff8fff85e1eba1d75442a8245a37412461781dc101c1a687->enter($__internal_4515f8545ac9fffdff8fff85e1eba1d75442a8245a37412461781dc101c1a687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "




    <!-- Load Facebook SDK for JavaScript -->
    


   <div id=\"header\" style=\"background-position: 50% 0%; <br />

\" data-stellar-background-ratio=\"0.5\"><div id=\"carousel-example-1\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators --><div id=\"social\" class=\"visible-lg\">
            <ul class=\"social-icons pull-right hidden-xs\">
                <li class=\"social-rss\">
                    <a href=\"#\" target=\"_blank\" title=\"RSS\"></a>
                </li>
                <li class=\"social-twitter\">
                    <a href=\"#\" target=\"_blank\" title=\"Twitter\"></a>
                </li>
                <li class=\"social-facebook\">
                    <a href=\"#\" target=\"_blank\" title=\"Facebook\"></a>
                </li>
                <li class=\"social-googleplus\">
                    <a href=\"#\" target=\"_blank\" title=\"GooglePlus\"></a>
                </li>
            </ul>
        </div>
    <ol class=\"carousel-indicators\">
        <li data-target=\"#carousel-example-1\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carousel-example-1\" data-slide-to=\"1\"></li>
        <li data-target=\"#carousel-example-1\" data-slide-to=\"2\"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\">
        <div class=\"item active\"><img src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("blog.PNG"), "html", null, true);
        echo "\"></div>
        <div class=\"item\"><img src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("blog.PNG"), "html", null, true);
        echo "\"></div>
        <div class=\"item\"><img src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("blog.PNG"), "html", null, true);
        echo "\"></div>
    </div>
    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#carousel-example-1\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\"></span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel-example-1\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\"></span>
    </a>
</div>
  

            
        </div>
        <!-- End Header -->
        <!-- === END HEADER === -->
        <!-- === BEGIN CONTENT === -->
        <div id=\"content\">
            <div class=\"container background-white\">
                <div class=\"row margin-vert-30\">
                    <!-- Main Column -->

                    ";
        // line 63
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 64
            echo "  <div class=\"alert alert-warning fade in\">
    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
   ";
            // line 66
            echo twig_escape_filter($this->env, $context["flashMessage"], "html", null, true);
            echo "
  </div>
       
                
              </div>
   
      
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "                    <div class=\"col-md-9\">
                        <!-- Blog Post -->
                        <br>



";
        // line 80
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 81
            echo "    <script>
    \$(function(){ 
        var pageID = ";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "; 

        \$('#a";
            // line 85
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "').click(function(){
            \$('#b";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "').removeClass('dislike-h');    
            \$(this).addClass('like-h');
            \$.ajax({
                type:\"POST\",
                url:\"ajax.php\",
                data:'act=like&pageID='+pageID,
                success: function(){
                }
            });
        });
        \$('#b";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "').click(function(){
            \$('#a";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "').removeClass('like-h');
            \$(this).addClass('dislike-h');
            \$.ajax({
                type:\"POST\",
                url:\"ajax.php\",
                data:'act=dislike&pageID='+pageID,
                success: function(){
                }
            });
        });
        \$('.share-btn').click(function(){
            \$('.share-cnt').toggle();
        });
    });
</script>

                        <div class=\"blog-post padding-bottom-20\"  >
                            <!-- Blog Item Header -->
                            <div class=\"blog-post-date pull-left\">
                                <span class=\"day\">";
            // line 116
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), " d"), "html", null, true);
            echo "</span>
                                <span class=\"month\">";
            // line 117
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "M"), "html", null, true);
            echo "</span>
                                <br>
                                <span class=\"year\">";
            // line 119
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "Y"), "html", null, true);
            echo "</span>
                            </div>
                            
                            <!-- End Blog Item Header -->
                            <!-- Blog Item Body -->
                             <div class=\"panel panel-white post panel-shadow\">
                <div class=\"post-heading\">
                    <div class=\"pull-left image\">

                        <img src=\"";
            // line 128
            echo twig_escape_filter($this->env, ($this->env->getExtension('asset')->getAssetUrl("/../web/images/") . $this->getAttribute($this->getAttribute($context["item"], "author", array()), "image", array())), "html", null, true);
            echo "\" class=\"img-circle avatar\" alt=\"user profile image\">
                    </div>



                    <div class=\"pull-left meta\">
                        <div class=\"title h5\">
                          
                                        <i class=\"fa fa-user color-gray-light\"></i>
                                       <a href=\"#\"><strong><b><font color=\"#001f3f\">";
            // line 137
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "author", array()), "html", null, true);
            echo "</font></b></strong></a>
                            uploaded  about <strong><b><font color=\"#001f3f\">";
            // line 138
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</font></b></strong>
                        </div>
 
                     <h6 class=\"text-muted time\">   <i class=\"fa fa-calendar color-gray-light\">  </i>  ";
            // line 141
            echo $this->env->getExtension('time')->diff(twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array())));
            echo "  </h6> 





      



  <div class=\"blog-post-details\">
                                    <!-- Author Name -->
                                   
                                    <!-- End Author Name -->
                                   
                                    <!-- End Date -->
                                    <!-- Tags -->
                         
</div>








                    </div>
                </div> 
                <div class=\"post-image\">
                              
                  <img src=\"";
            // line 172
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter(("/uploads/images/product/" . $this->getAttribute($this->getAttribute($context["item"], "image", array()), "image", array())), "o"), "html", null, true);
            echo "\" class=\"image\">
                </div> <div  id=\"t1\">
 <!--   <div class=\"tab-cnt\"> -->
        

        <div >";
            // line 177
            if (($this->getAttribute($this->getAttribute((isset($context["arr"]) ? $context["arr"] : $this->getContext($context, "arr")), $this->getAttribute($context["item"], "id", array()), array(), "array"), "5", array(), "array") == 1)) {
                // line 178
                echo "            <div  id =\"a";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" class=\"like-btn ";
                echo "like-h";
                echo "\">Like</div> ";
            } else {
                echo "  <div id =\"a";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" class=\"like-btn \">Like</div>";
            }
            // line 179
            echo "                


                ";
            // line 182
            if (($this->getAttribute($this->getAttribute((isset($context["arr"]) ? $context["arr"] : $this->getContext($context, "arr")), $this->getAttribute($context["item"], "id", array()), array(), "array"), "6", array(), "array") == 1)) {
                // line 183
                echo "            <div id =\"b";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" class=\"dislike-btn ";
                echo "dislike-h";
                echo " \"></div> ";
            } else {
                echo "  <div id =\"b";
                echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
                echo "\" class=\"dislike-btn \"></div>";
            }
            // line 184
            echo "        

            <div class=\"share-btn\">Share</div>

            <div class=\"stat-cnt\">
                <div class=\"rate-count\">";
            // line 189
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arr"]) ? $context["arr"] : $this->getContext($context, "arr")), $this->getAttribute($context["item"], "id", array()), array(), "array"), "2", array(), "array"), "html", null, true);
            echo "</div>
                <div class=\"stat-bar\">
                    <div class=\"bg-green\" style=\"width:";
            // line 191
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arr"]) ? $context["arr"] : $this->getContext($context, "arr")), $this->getAttribute($context["item"], "id", array()), array(), "array"), "3", array(), "array"), "html", null, true);
            echo "px\"></div>
                    <div class=\"bg-red\" style=\"width:";
            // line 192
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arr"]) ? $context["arr"] : $this->getContext($context, "arr")), $this->getAttribute($context["item"], "id", array()), array(), "array"), "4", array(), "array"), "html", null, true);
            echo "px\"></div>
                </div><!-- stat-bar -->
                <div class=\"dislike-count\">";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arr"]) ? $context["arr"] : $this->getContext($context, "arr")), $this->getAttribute($context["item"], "id", array()), array(), "array"), "1", array(), "array"), "html", null, true);
            echo "</div>
                <div class=\"like-count\">";
            // line 195
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["arr"]) ? $context["arr"] : $this->getContext($context, "arr")), $this->getAttribute($context["item"], "id", array()), array(), "array"), "0", array(), "array"), "html", null, true);
            echo "</div>
            </div><!-- /stat-cnt -->
        </div><!-- /tab-tr -->
       <div class=\"share-cnt\" onclick=\" display: block;\">

            <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style \">
            <a class=\"addthis_button_linkedin_counter\"></a>

          
            <a class=\"addthis_button_tweet\"></a>
    
            
            <a class=\"addthis_counter addthis_pill_style\"></a>
            </div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5174d2b853d85895\"></script>
            <!-- AddThis Button END -->

        </div></div><br>


        
                <div class=\"post-description\">
                  
                  <div >
        
       
        <!-- /share

  <h4 class=\"font-semibold\">";
            // line 224
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true);
            echo "</h4>
    <!-- Load Facebook SDK for JavaScript -->
    




            
        </div></p>  



                        <div id=\"comment";
            // line 236
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\"></div> 
                    <div class=\"stats\">
                     
                    </div><div class=\"blog-post-details-item blog-post-details-item-left blog-post-details-item-last\">
                                        <a href=\"\">
                                            <i class=\"fa fa-comments color-gray-light\"></i>
                                     ";
            // line 242
            $context["a"] = 0;
            echo "   ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                echo " ";
                if (($this->env->getExtension('translator')->trans($this->getAttribute($context["c"], "blog", array())) == $this->env->getExtension('translator')->trans($this->getAttribute($context["item"], "id", array())))) {
                    echo "  ";
                    $context["a"] = ((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) + 1);
                    echo " ";
                }
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
            echo "     Comments  <i class=\"fa fa-angle-double-right\"></i>
                      
                                        </a>        
                                        <i class=\"fa fa-tag color-gray-light\"></i>
                                                         ";
            // line 246
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["item"], "tag", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["tags"]) {
                // line 247
                echo "     <a href=\"#\"> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["tags"], "name", array()), "html", null, true);
                echo "</a>,  
  
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tags'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo " 
                                    
                                    </div> 
                </div>
    
                <div class=\"post-footer\"> 

                    <form method=\"POST\" action=\"";
            // line 256
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gt_it_blog", array("page" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "page"), "method"))), "html", null, true);
            echo "\">
                    <div class=\"input-group\">
<input type=\"hidden\" value=\"";
            // line 258
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" name=\"id\">
<input type=\"hidden\" value=\"comment";
            // line 259
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" name=\"div\">
                     

      <input type=\"text\" class=\"form-control\" name=\"comment\" placeholder=\"Write a comment...\">
      <span class=\"input-group-btn\">
       <input class=\"btn btn-secondary\" type=\"submit\" value=\"OK!\">
      </span>
    

                    </div> 
                </form>
   <div class=\"panel-group wrap\" id=\"accordion\" >
     
      <!-- end of panel -->
    <div class=\"panel-group wrap\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
      <div class=\"panel\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
          <h4 class=\"panel-title\" >
        <a class=\"collapsed\" role=\"button\"  data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo";
            // line 277
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
     <font color=\"#85144b\"> <strong>";
            // line 278
            $context["a"] = 0;
            echo "   ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                echo " ";
                if (($this->env->getExtension('translator')->trans($this->getAttribute($context["c"], "blog", array())) == $this->env->getExtension('translator')->trans($this->getAttribute($context["item"], "id", array())))) {
                    echo "  ";
                    $context["a"] = ((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) + 1);
                    echo " ";
                }
                echo "  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")), "html", null, true);
            echo " Comments</strong></font>
        </a>
      </h4>
    
        </div>






        <div id=\"collapseTwo";
            // line 289
            echo twig_escape_filter($this->env, $this->getAttribute($context["item"], "id", array()), "html", null, true);
            echo "\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">





 ";
            // line 295
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["comment"]) ? $context["comment"] : $this->getContext($context, "comment")));
            foreach ($context['_seq'] as $context["_key"] => $context["c"]) {
                // line 296
                echo "         ";
                if (($this->env->getExtension('translator')->trans($this->getAttribute($context["c"], "blog", array())) == $this->env->getExtension('translator')->trans($this->getAttribute($context["item"], "id", array())))) {
                    // line 297
                    echo "   <div >  
<ul class=\"comments-list\" >
                    <li class=\"comment\" >
                            <a class=\"pull-left\" href=\"#\">
                              ";
                    // line 301
                    if (($this->getAttribute($context["c"], "user", array()) != null)) {
                        // line 302
                        echo "                                <img class=\"avatar\" src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl($this->getAttribute($this->getAttribute($context["c"], "user", array()), "image", array())), "html", null, true);
                        echo "\" alt=\"avatar\"> ";
                    } else {
                        echo "<img  class=\"avatar\"  src=\"";
                        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("an.png"), "html", null, true);
                        echo "\" alt=\"\"> ";
                    }
                    // line 303
                    echo "
                            </a>
                            <div class=\"comment-body\">
                                <div class=\"comment-heading\">
                                  ";
                    // line 307
                    if (($this->getAttribute($context["c"], "user", array()) != null)) {
                        echo "    <h4 class=\"user\">";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["c"], "user", array()), "username", array())), "html", null, true);
                        echo "</h4> ";
                    } else {
                        // line 308
                        echo "                                  <h4 class=\"user\">";
                        echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["c"], "name", array())), "html", null, true);
                        echo "</h4>    ";
                    }
                    echo " <h5 class=\"time\">";
                    echo $this->env->getExtension('time')->diff(twig_date_format_filter($this->env, $this->getAttribute($context["c"], "date", array())));
                    echo "</h5> 
                              
                                    <h5 class=\"time\"></h5>
                                </div>
                                <p>";
                    // line 312
                    echo twig_escape_filter($this->env, $this->getAttribute($context["c"], "comment", array()), "html", null, true);
                    echo "</p> 
                            </div>
                        </li>
                       
                    </ul> </div>    ";
                    // line 316
                    $context["a"] = ((isset($context["a"]) ? $context["a"] : $this->getContext($context, "a")) + 1);
                    // line 317
                    echo "                  ";
                }
                // line 318
                echo "
         ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['c'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 319
            echo "  

        
        </div>
      </div>


 </div> 
      
  </div>
 
              </div>         
            </div>   
</div>  
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 334
        echo "    

          
                      







<div class=\"navigation\" >
   ";
        // line 346
        echo $this->env->getExtension('knp_pagination')->render($this->env, (isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")));
        echo "
</div>
 
                    </div>
                    <!-- End Main Column -->
                    <!-- Side Column --><div class=\"col-md-3\">
                        <!-- Blog Tags -->
                        <div class=\"blog-tags\">
                            <h3>Tags</h3>
                            <ul class=\"blog-tags\">
                              ";
        // line 356
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tags"]) ? $context["tags"] : $this->getContext($context, "tags")));
        foreach ($context['_seq'] as $context["_key"] => $context["tag"]) {
            // line 357
            echo "                                
                             
                                <li>
                                    <a href=\"#";
            // line 360
            echo twig_escape_filter($this->env, $this->getAttribute($context["tag"], "id", array()), "html", null, true);
            echo "\" class=\"blog-tag\" size=\"5px\"><font color=\"#001f3f\" size=\"3.5px\">";
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["tag"], "name", array())), "html", null, true);
            echo "</font></a>
                                </li>
                               ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['tag'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 363
        echo "                            </ul>
                        </div>
                        <!-- End Blog Tags -->
                        <!-- Recent Posts --><div class=\"archives\">
                            <h3>Archives</h3>
                        <ul>
                            <li><a href=\"#\">November,2013</a></li>
                            <li><a href=\"#\">May,2013</a></li>
                            <li><a href=\"#\">April,2013</a></li>
                            <li><a href=\"#\">June,2013</a></li>
                            <li><a href=\"#\">August,2013</a></li>
                            <li><a href=\"#\">January,2013</a></li>
                        </ul>
                        </div>
                        <br>
                        <div class=\"recent-posts\">
                            <h3>Recent Posts</h3>
                            <ul class=\"posts-list margin-top-10\">
                                   

                                ";
        // line 383
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["advert"]) ? $context["advert"] : $this->getContext($context, "advert")));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 384
            echo "
               
        
                                <li>
  
                                                              <div class=\"recent-post\">
                                        <a href=\"\">
                                            <img class=\"pull-left\" src=\"";
            // line 391
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter(("uploads/images/product/" . $this->getAttribute($this->getAttribute($context["item"], "image", array()), "image", array())), "t"), "html", null, true);
            echo "\" alt=\"thumb1\">
                                        </a>
                                        <a href=\"#\" class=\"posts-list-title\">";
            // line 393
            echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($context["item"], "title", array())), "html", null, true);
            echo "</a>
                                        <br>
                                        <span class=\"recent-post-date\">
                                                     ";
            // line 396
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["item"], "date", array()), "d/M/Y"), "html", null, true);
            echo "
                                        </span>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 402
        echo "                            </ul>
                        </div>
                        <!-- End Recent Posts -->
                    </div>
                   





                    <!-- End Side Column -->
                </div>
            </div>
        </div>
        <!-- === END CONTENT === -->
        <!-- === BEGIN FOOTER === -->
        <div id=\"base\" class=\"background-dark text-light\">
            <div class=\"container padding-vert-30\">
                <div class=\"row\">
                    <!-- Disclaimer -->
                    <div class=\"col-md-6 margin-bottom-30\">
                        <h3 class=\"margin-bottom-10\">Disclaimer</h3>
                        <p>All stock images on this template demo are for presentation purposes only, intended to represent a live site and are not included with the template or in any of the Joomla51 club membership plans.</p>
                        <p>Dribbble images are property of their respective owners. All other images are freely available from
                            <a class=\"nobold\" href=\"http://www.unsplash.com/\" target=\"_blank\">Unsplash</a>.</p>
                    </div>
                    <!-- End Disclaimer -->
                    <!-- Image Credits -->
                    <div class=\"col-sm-6 col-md-3 margin-bottom-30\">
                        <h3 class=\"margin-bottom-10\">Image Credits</h3>
                        <ul class=\"menu\">
                            <li>
                                <a href=\"http://www.coffeeandplaid.com/\" target=\"_blank\">Coffee & Plaid</a>
                            </li>
                            <li>
                                <a href=\"https://dribbble.com/OMFGdesign\" target=\"_blank\">Olly Freeman</a>
                            </li>
                            <li>
                                <a href=\"https://dribbble.com/artnok\" target=\"_blank\">Niko Picard</a>
                            </li>
                            <li>
                                <a href=\"https://dribbble.com/forsuregraphic\" target=\"_blank\">Forsuregraphic</a>
                            </li>
                            <li>
                                <a href=\"https://www.unsplash.com\" target=\"_blank\">Unsplash</a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <!-- End Image Credits -->
                    <!-- Friends -->
                    <div class=\"col-sm-6 col-md-3 margin-bottom-30\">
                        <h3 class=\"margin-bottom-10\">Friends</h3>
                        <ul class=\"menu\">
                            <li>
                                <a href=\"#\">Amanda Allen</a>
                            </li>
                            <li>
                                <a href=\"#\">John Adams</a>
                            </li>
                            <li>
                                <a href=\"#\">Mark Sanchez</a>
                            </li>
                            <li>
                                <a href=\"#\">Diane Reed</a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <!-- End Friends -->
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div id=\"footer\" class=\"background-dark text-light\">
            <div class=\"container no-padding\">
                <div class=\"row\">
                    <!-- Footer Menu -->
                    <div id=\"footermenu\" class=\"col-md-8\">
                        <ul class=\"list-unstyled list-inline\">
                            <li>
                                <a href=\"#\" target=\"_blank\">Sample Link</a>
                            </li>
                            <li>
                                <a href=\"#\" target=\"_blank\">Sample Link</a>
                            </li>
                            <li>
                                <a href=\"#\" target=\"_blank\">Sample Link</a>
                            </li>
                            <li>
                                <a href=\"#\" target=\"_blank\">Sample Link</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Footer Menu -->
                    <!-- Copyright -->
                    <div id=\"copyright\" class=\"col-md-4\">
                        <p class=\"pull-right\">(c) 2016 Your Copyright Info</p>
                    </div>
                    <!-- End Copyright -->
                </div>
            </div>


  ";
        
        $__internal_4515f8545ac9fffdff8fff85e1eba1d75442a8245a37412461781dc101c1a687->leave($__internal_4515f8545ac9fffdff8fff85e1eba1d75442a8245a37412461781dc101c1a687_prof);

    }

    public function getTemplateName()
    {
        return "GtItBundle:Blog:blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  705 => 402,  693 => 396,  687 => 393,  682 => 391,  673 => 384,  669 => 383,  647 => 363,  636 => 360,  631 => 357,  627 => 356,  614 => 346,  600 => 334,  580 => 319,  573 => 318,  570 => 317,  568 => 316,  561 => 312,  549 => 308,  543 => 307,  537 => 303,  528 => 302,  526 => 301,  520 => 297,  517 => 296,  513 => 295,  504 => 289,  473 => 278,  469 => 277,  448 => 259,  444 => 258,  439 => 256,  430 => 249,  420 => 247,  416 => 246,  393 => 242,  384 => 236,  369 => 224,  337 => 195,  333 => 194,  328 => 192,  324 => 191,  319 => 189,  312 => 184,  301 => 183,  299 => 182,  294 => 179,  283 => 178,  281 => 177,  273 => 172,  239 => 141,  233 => 138,  229 => 137,  217 => 128,  205 => 119,  200 => 117,  196 => 116,  174 => 97,  170 => 96,  157 => 86,  153 => 85,  148 => 83,  144 => 81,  140 => 80,  132 => 74,  118 => 66,  114 => 64,  110 => 63,  85 => 41,  81 => 40,  77 => 39,  40 => 4,  34 => 3,  11 => 1,);
    }

    public function getSource()
    {
        return "{% extends \"::modulesUsed/bloglayout.html.twig\" %}

  {% block body %}





    <!-- Load Facebook SDK for JavaScript -->
    


   <div id=\"header\" style=\"background-position: 50% 0%; <br />

\" data-stellar-background-ratio=\"0.5\"><div id=\"carousel-example-1\" class=\"carousel slide\" data-ride=\"carousel\">
    <!-- Indicators --><div id=\"social\" class=\"visible-lg\">
            <ul class=\"social-icons pull-right hidden-xs\">
                <li class=\"social-rss\">
                    <a href=\"#\" target=\"_blank\" title=\"RSS\"></a>
                </li>
                <li class=\"social-twitter\">
                    <a href=\"#\" target=\"_blank\" title=\"Twitter\"></a>
                </li>
                <li class=\"social-facebook\">
                    <a href=\"#\" target=\"_blank\" title=\"Facebook\"></a>
                </li>
                <li class=\"social-googleplus\">
                    <a href=\"#\" target=\"_blank\" title=\"GooglePlus\"></a>
                </li>
            </ul>
        </div>
    <ol class=\"carousel-indicators\">
        <li data-target=\"#carousel-example-1\" data-slide-to=\"0\" class=\"active\"></li>
        <li data-target=\"#carousel-example-1\" data-slide-to=\"1\"></li>
        <li data-target=\"#carousel-example-1\" data-slide-to=\"2\"></li>
    </ol>
    <!-- Wrapper for slides -->
    <div class=\"carousel-inner\">
        <div class=\"item active\"><img src=\"{{asset('blog.PNG')}}\"></div>
        <div class=\"item\"><img src=\"{{asset('blog.PNG')}}\"></div>
        <div class=\"item\"><img src=\"{{asset('blog.PNG')}}\"></div>
    </div>
    <!-- Controls -->
    <a class=\"left carousel-control\" href=\"#carousel-example-1\" data-slide=\"prev\">
        <span class=\"glyphicon glyphicon-chevron-left\"></span>
    </a>
    <a class=\"right carousel-control\" href=\"#carousel-example-1\" data-slide=\"next\">
        <span class=\"glyphicon glyphicon-chevron-right\"></span>
    </a>
</div>
  

            
        </div>
        <!-- End Header -->
        <!-- === END HEADER === -->
        <!-- === BEGIN CONTENT === -->
        <div id=\"content\">
            <div class=\"container background-white\">
                <div class=\"row margin-vert-30\">
                    <!-- Main Column -->

                    {% for flashMessage in app.session.flashbag.get('success') %}
  <div class=\"alert alert-warning fade in\">
    <a href=\"#\" class=\"close\" data-dismiss=\"alert\" aria-label=\"close\">&times;</a>
   {{ flashMessage }}
  </div>
       
                
              </div>
   
      
      {% endfor %}
                    <div class=\"col-md-9\">
                        <!-- Blog Post -->
                        <br>



{% for item in advert %}
    <script>
    \$(function(){ 
        var pageID = {{ item.id }}; 

        \$('#a{{item.id}}').click(function(){
            \$('#b{{item.id}}').removeClass('dislike-h');    
            \$(this).addClass('like-h');
            \$.ajax({
                type:\"POST\",
                url:\"ajax.php\",
                data:'act=like&pageID='+pageID,
                success: function(){
                }
            });
        });
        \$('#b{{item.id}}').click(function(){
            \$('#a{{item.id}}').removeClass('like-h');
            \$(this).addClass('dislike-h');
            \$.ajax({
                type:\"POST\",
                url:\"ajax.php\",
                data:'act=dislike&pageID='+pageID,
                success: function(){
                }
            });
        });
        \$('.share-btn').click(function(){
            \$('.share-cnt').toggle();
        });
    });
</script>

                        <div class=\"blog-post padding-bottom-20\"  >
                            <!-- Blog Item Header -->
                            <div class=\"blog-post-date pull-left\">
                                <span class=\"day\">{{item.date |date(\" d\")}}</span>
                                <span class=\"month\">{{item.date |date(\"M\")}}</span>
                                <br>
                                <span class=\"year\">{{item.date |date(\"Y\")}}</span>
                            </div>
                            
                            <!-- End Blog Item Header -->
                            <!-- Blog Item Body -->
                             <div class=\"panel panel-white post panel-shadow\">
                <div class=\"post-heading\">
                    <div class=\"pull-left image\">

                        <img src=\"{{ asset('/../web/images/') ~ item.author.image }}\" class=\"img-circle avatar\" alt=\"user profile image\">
                    </div>



                    <div class=\"pull-left meta\">
                        <div class=\"title h5\">
                          
                                        <i class=\"fa fa-user color-gray-light\"></i>
                                       <a href=\"#\"><strong><b><font color=\"#001f3f\">{{item.author}}</font></b></strong></a>
                            uploaded  about <strong><b><font color=\"#001f3f\">{{item.title}}</font></b></strong>
                        </div>
 
                     <h6 class=\"text-muted time\">   <i class=\"fa fa-calendar color-gray-light\">  </i>  {{ item.date|date|ago}}  </h6> 





      



  <div class=\"blog-post-details\">
                                    <!-- Author Name -->
                                   
                                    <!-- End Author Name -->
                                   
                                    <!-- End Date -->
                                    <!-- Tags -->
                         
</div>








                    </div>
                </div> 
                <div class=\"post-image\">
                              
                  <img src=\"{{ ('/uploads/images/product/'  ~ item.image.image) | imagine_filter('o') }}\" class=\"image\">
                </div> <div  id=\"t1\">
 <!--   <div class=\"tab-cnt\"> -->
        

        <div >{% if(arr[item.id]['5'] == 1) %}
            <div  id =\"a{{item.id}}\" class=\"like-btn {{ 'like-h'}}\">Like</div> {% else %}  <div id =\"a{{item.id}}\" class=\"like-btn \">Like</div>{% endif %}
                


                {% if(arr[item.id]['6'] == 1) %}
            <div id =\"b{{item.id}}\" class=\"dislike-btn {{ 'dislike-h'}} \"></div> {% else %}  <div id =\"b{{item.id}}\" class=\"dislike-btn \"></div>{% endif %}
        

            <div class=\"share-btn\">Share</div>

            <div class=\"stat-cnt\">
                <div class=\"rate-count\">{{ arr[item.id]['2']}}</div>
                <div class=\"stat-bar\">
                    <div class=\"bg-green\" style=\"width:{{ arr[item.id]['3']}}px\"></div>
                    <div class=\"bg-red\" style=\"width:{{ arr[item.id]['4']}}px\"></div>
                </div><!-- stat-bar -->
                <div class=\"dislike-count\">{{ arr[item.id]['1'] }}</div>
                <div class=\"like-count\">{{ arr[item.id]['0'] }}</div>
            </div><!-- /stat-cnt -->
        </div><!-- /tab-tr -->
       <div class=\"share-cnt\" onclick=\" display: block;\">

            <!-- AddThis Button BEGIN -->
            <div class=\"addthis_toolbox addthis_default_style \">
            <a class=\"addthis_button_linkedin_counter\"></a>

          
            <a class=\"addthis_button_tweet\"></a>
    
            
            <a class=\"addthis_counter addthis_pill_style\"></a>
            </div>
            <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5174d2b853d85895\"></script>
            <!-- AddThis Button END -->

        </div></div><br>


        
                <div class=\"post-description\">
                  
                  <div >
        
       
        <!-- /share

  <h4 class=\"font-semibold\">{{item.title}}</h4>
    <!-- Load Facebook SDK for JavaScript -->
    




            
        </div></p>  



                        <div id=\"comment{{item.id}}\"></div> 
                    <div class=\"stats\">
                     
                    </div><div class=\"blog-post-details-item blog-post-details-item-left blog-post-details-item-last\">
                                        <a href=\"\">
                                            <i class=\"fa fa-comments color-gray-light\"></i>
                                     {% set a = 0 %}   {% for c in comment %} {% if c.blog | trans == item.id  | trans %}  {% set a = a+1 %} {% endif %}  {% endfor %}{{ a }}     Comments  <i class=\"fa fa-angle-double-right\"></i>
                      
                                        </a>        
                                        <i class=\"fa fa-tag color-gray-light\"></i>
                                                         {% for tags in item.tag %}
     <a href=\"#\"> {{ tags.name }}</a>,  
  
  {% endfor %} 
                                    
                                    </div> 
                </div>
    
                <div class=\"post-footer\"> 

                    <form method=\"POST\" action=\"{{ path('gt_it_blog',{'page' : app.request.get('page')}) }}\">
                    <div class=\"input-group\">
<input type=\"hidden\" value=\"{{item.id}}\" name=\"id\">
<input type=\"hidden\" value=\"comment{{item.id}}\" name=\"div\">
                     

      <input type=\"text\" class=\"form-control\" name=\"comment\" placeholder=\"Write a comment...\">
      <span class=\"input-group-btn\">
       <input class=\"btn btn-secondary\" type=\"submit\" value=\"OK!\">
      </span>
    

                    </div> 
                </form>
   <div class=\"panel-group wrap\" id=\"accordion\" >
     
      <!-- end of panel -->
    <div class=\"panel-group wrap\" id=\"accordion\" role=\"tablist\" aria-multiselectable=\"true\">
      <div class=\"panel\">
        <div class=\"panel-heading\" role=\"tab\" id=\"headingTwo\">
          <h4 class=\"panel-title\" >
        <a class=\"collapsed\" role=\"button\"  data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"#collapseTwo{{item.id}}\" aria-expanded=\"false\" aria-controls=\"collapseTwo\">
     <font color=\"#85144b\"> <strong>{% set a = 0 %}   {% for c in comment %} {% if c.blog | trans == item.id | trans %}  {% set a = a+1 %} {% endif %}  {% endfor %} {{ a }} Comments</strong></font>
        </a>
      </h4>
    
        </div>






        <div id=\"collapseTwo{{item.id}}\" class=\"panel-collapse collapse\" role=\"tabpanel\" aria-labelledby=\"headingTwo\">





 {% for c in comment %}
         {% if c.blog | trans == item.id | trans %}
   <div >  
<ul class=\"comments-list\" >
                    <li class=\"comment\" >
                            <a class=\"pull-left\" href=\"#\">
                              {% if     c.user != NULL %}
                                <img class=\"avatar\" src=\"{{asset(c.user.image) }}\" alt=\"avatar\"> {% else %}<img  class=\"avatar\"  src=\"{{ asset('an.png') }}\" alt=\"\"> {% endif %}

                            </a>
                            <div class=\"comment-body\">
                                <div class=\"comment-heading\">
                                  {% if     c.user != NULL %}    <h4 class=\"user\">{{c.user.username |capitalize }}</h4> {% else %}
                                  <h4 class=\"user\">{{c.name |capitalize }}</h4>    {% endif %} <h5 class=\"time\">{{ c.date|date|ago}}</h5> 
                              
                                    <h5 class=\"time\"></h5>
                                </div>
                                <p>{{c.comment}}</p> 
                            </div>
                        </li>
                       
                    </ul> </div>    {% set a = a + 1 %}
                  {% endif %}

         {% endfor %}  

        
        </div>
      </div>


 </div> 
      
  </div>
 
              </div>         
            </div>   
</div>  
{% endfor %}
    

          
                      







<div class=\"navigation\" >
   {{ knp_pagination_render(advert) }}
</div>
 
                    </div>
                    <!-- End Main Column -->
                    <!-- Side Column --><div class=\"col-md-3\">
                        <!-- Blog Tags -->
                        <div class=\"blog-tags\">
                            <h3>Tags</h3>
                            <ul class=\"blog-tags\">
                              {% for tag in tags %}
                                
                             
                                <li>
                                    <a href=\"#{{tag.id}}\" class=\"blog-tag\" size=\"5px\"><font color=\"#001f3f\" size=\"3.5px\">{{tag.name |capitalize}}</font></a>
                                </li>
                               {% endfor %}
                            </ul>
                        </div>
                        <!-- End Blog Tags -->
                        <!-- Recent Posts --><div class=\"archives\">
                            <h3>Archives</h3>
                        <ul>
                            <li><a href=\"#\">November,2013</a></li>
                            <li><a href=\"#\">May,2013</a></li>
                            <li><a href=\"#\">April,2013</a></li>
                            <li><a href=\"#\">June,2013</a></li>
                            <li><a href=\"#\">August,2013</a></li>
                            <li><a href=\"#\">January,2013</a></li>
                        </ul>
                        </div>
                        <br>
                        <div class=\"recent-posts\">
                            <h3>Recent Posts</h3>
                            <ul class=\"posts-list margin-top-10\">
                                   

                                {% for item in advert %}

               
        
                                <li>
  
                                                              <div class=\"recent-post\">
                                        <a href=\"\">
                                            <img class=\"pull-left\" src=\"{{('uploads/images/product/' ~ item.image.image)|imagine_filter('t')}}\" alt=\"thumb1\">
                                        </a>
                                        <a href=\"#\" class=\"posts-list-title\">{{item.title |capitalize}}</a>
                                        <br>
                                        <span class=\"recent-post-date\">
                                                     {{item.date|date('d/M/Y')}}
                                        </span>
                                    </div>
                                    <div class=\"clearfix\"></div>
                                </li>
{% endfor %}
                            </ul>
                        </div>
                        <!-- End Recent Posts -->
                    </div>
                   





                    <!-- End Side Column -->
                </div>
            </div>
        </div>
        <!-- === END CONTENT === -->
        <!-- === BEGIN FOOTER === -->
        <div id=\"base\" class=\"background-dark text-light\">
            <div class=\"container padding-vert-30\">
                <div class=\"row\">
                    <!-- Disclaimer -->
                    <div class=\"col-md-6 margin-bottom-30\">
                        <h3 class=\"margin-bottom-10\">Disclaimer</h3>
                        <p>All stock images on this template demo are for presentation purposes only, intended to represent a live site and are not included with the template or in any of the Joomla51 club membership plans.</p>
                        <p>Dribbble images are property of their respective owners. All other images are freely available from
                            <a class=\"nobold\" href=\"http://www.unsplash.com/\" target=\"_blank\">Unsplash</a>.</p>
                    </div>
                    <!-- End Disclaimer -->
                    <!-- Image Credits -->
                    <div class=\"col-sm-6 col-md-3 margin-bottom-30\">
                        <h3 class=\"margin-bottom-10\">Image Credits</h3>
                        <ul class=\"menu\">
                            <li>
                                <a href=\"http://www.coffeeandplaid.com/\" target=\"_blank\">Coffee & Plaid</a>
                            </li>
                            <li>
                                <a href=\"https://dribbble.com/OMFGdesign\" target=\"_blank\">Olly Freeman</a>
                            </li>
                            <li>
                                <a href=\"https://dribbble.com/artnok\" target=\"_blank\">Niko Picard</a>
                            </li>
                            <li>
                                <a href=\"https://dribbble.com/forsuregraphic\" target=\"_blank\">Forsuregraphic</a>
                            </li>
                            <li>
                                <a href=\"https://www.unsplash.com\" target=\"_blank\">Unsplash</a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <!-- End Image Credits -->
                    <!-- Friends -->
                    <div class=\"col-sm-6 col-md-3 margin-bottom-30\">
                        <h3 class=\"margin-bottom-10\">Friends</h3>
                        <ul class=\"menu\">
                            <li>
                                <a href=\"#\">Amanda Allen</a>
                            </li>
                            <li>
                                <a href=\"#\">John Adams</a>
                            </li>
                            <li>
                                <a href=\"#\">Mark Sanchez</a>
                            </li>
                            <li>
                                <a href=\"#\">Diane Reed</a>
                            </li>
                        </ul>
                        <div class=\"clearfix\"></div>
                    </div>
                    <!-- End Friends -->
                </div>
            </div>
        </div>
        <!-- Footer -->
        <div id=\"footer\" class=\"background-dark text-light\">
            <div class=\"container no-padding\">
                <div class=\"row\">
                    <!-- Footer Menu -->
                    <div id=\"footermenu\" class=\"col-md-8\">
                        <ul class=\"list-unstyled list-inline\">
                            <li>
                                <a href=\"#\" target=\"_blank\">Sample Link</a>
                            </li>
                            <li>
                                <a href=\"#\" target=\"_blank\">Sample Link</a>
                            </li>
                            <li>
                                <a href=\"#\" target=\"_blank\">Sample Link</a>
                            </li>
                            <li>
                                <a href=\"#\" target=\"_blank\">Sample Link</a>
                            </li>
                        </ul>
                    </div>
                    <!-- End Footer Menu -->
                    <!-- Copyright -->
                    <div id=\"copyright\" class=\"col-md-4\">
                        <p class=\"pull-right\">(c) 2016 Your Copyright Info</p>
                    </div>
                    <!-- End Copyright -->
                </div>
            </div>


  {% endblock %}
























































";
    }
}
