<?php

/* BlogBundle:BlogViews:Blog.html.twig */
class __TwigTemplate_19e98960e028fd48bb49710cecb137c0e8818a5a376a307cac66bec3bce8406f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("SmartStartBase.html.twig", "BlogBundle:BlogViews:Blog.html.twig", 1);
        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "SmartStartBase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:BlogViews:Blog.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "BlogBundle:BlogViews:Blog.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Blog";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "


    <!-- Title Page -->
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url(";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-banner.png"), "html", null, true);
        echo ");\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>


    <!-- Content page -->
    <section>
        <div class=\"bread-crumb bo5-b p-t-17 p-b-17\">
            <div class=\"container\">
                <a href=\"\" class=\"txt27\">
                    Home
                </a>

                <span class=\"txt29 m-l-10 m-r-10\">/</span>

                <span class=\"txt29\">
\t\t\t\t\tBlog
\t\t\t\t</span>

        ";
        // line 28
        if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []) != null)) {
            // line 29
            echo "            </div>
            <a href=\"#addEmployeeModal\" class=\"btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>  Add A Post</span></a>

            </div>
        <!-- Add Modal HTML -->
        <div id=\"addEmployeeModal\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    ";
            // line 37
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start');
            echo "




                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Add A Post</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Post Content</label>
                            ";
            // line 49
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postContent", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea"]]);
            echo "

                        </div>
                        <div class=\"form-group\">
                            <label>Post Type</label>
                            ";
            // line 54
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "postType", []), 'widget', ["attr" => ["class" => "form-control", "style" => "font-size: 12px"]]);
            echo "

                        </div>
                        <div class=\"form-group\">
                            <label>Article Title</label>
                            ";
            // line 59
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "articleTitle", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea"]]);
            echo "

                        </div>
                        <div class=\"form-group\">
                            <label>Article Content</label>
                            ";
            // line 64
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "articleContent", []), 'widget', ["attr" => ["class" => "form-control", "type" => "textarea"]]);
            echo "

                        </div>
                        <div class=\"form-group\">
                            <label>Your Image</label>
                            ";
            // line 69
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "image", []), 'widget', ["attr" => ["class" => "form-control", "style" => "font-size: 12px"]]);
            echo "

                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                        <input type=\"submit\" class=\"btn btn-success\" value=\"Add\">
                    </div>
                    ";
            // line 77
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
            echo "
                </div>
            </div>
        </div>
        ";
        }
        // line 82
        echo "

        <div class=\"container\">


            <div class=\"row\">
                <div class=\"col-md-8 col-lg-9\">
                    <div class=\"p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md\">

                        <!-- Block4 -->
                        ";
        // line 92
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")));
        foreach ($context['_seq'] as $context["_key"] => $context["blogposts"]) {
            // line 93
            echo "                        <div class=\"blo4 p-b-63\">
                            <div class=\"pic-blo4 hov-img-zoom bo-rad-10 pos-relative\">
                                <a href=";
            // line 95
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_detailblog");
            echo ">
                                    <img src=\"";
            // line 96
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl(("uploads/images/" . $this->getAttribute($context["blogposts"], "image", []))), "html", null, true);
            echo "\" width=\"600\" height=\"427\" alt=\"IMG-BLOG\">
                                </a>

                                <div class=\"date-blo4 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t<span class=\"txt30 m-b-4\">


\t\t\t\t\t\t\t\t\t</span>

                                    <span class=\"txt31\">
\t\t\t\t\t\t\t\t\t\t";
            // line 106
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blogposts"], "postDate", []), "m/d/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t</span>
                                </div>
                            </div>

                            <div class=\"text-blo4 p-t-33\">
                                ";
            // line 112
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []) != null)) {
                // line 113
                echo "                                ";
                if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []), "id", []) == $this->getAttribute($this->getAttribute($context["blogposts"], "author", []), "id", []))) {
                    // line 114
                    echo "                                <a href=\"#myModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Delete\">&#xE872;</i></a>

                                <a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>
                                ";
                }
                // line 118
                echo "                                ";
            }
            // line 119
            echo "
                                <h4 class=\"p-b-16\">
                                    <a href=\"\" class=\"tit9\">";
            // line 121
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postContent", []), "html", null, true);
            echo "</a>
                                </h4>

                                <div class=\"txt32 flex-w p-b-24\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\tby ";
            // line 126
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["blogposts"], "author", []), "username", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span>
\t\t\t\t\t\t\t\t\t\t";
            // line 131
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["blogposts"], "postDate", []), "m/d/Y"), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span>
\t\t\t\t\t\t\t\t\t\t";
            // line 136
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postType", []), "html", null, true);
            echo "
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span>
\t\t\t\t\t\t\t\t\t\t";
            // line 141
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "postCommentCount", []), "html", null, true);
            echo " Comments
                                        <span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>


                                    ";
            // line 146
            if (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", []) != null)) {
                // line 147
                echo "
                                            <!-- Modal HTML -->
                                            <div id=\"myModal\" class=\"modal fade\">
                                                <div class=\"modal-dialog modal-confirm\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <div class=\"icon-box\">
                                                                <i class=\"material-icons\">&#xE5CD;</i>
                                                            </div>
                                                            <h4 class=\"modal-title\">Are you sure?</h4>
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\">Cancel</button>
                                                            <a href=\"";
                // line 164
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_delete", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
                echo "\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Edit Modal HTML -->
                                            <div id=\"editEmployeeModal\" class=\"modal fade\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <form>
                                                            <div class=\"modal-header\">
                                                                <h4 class=\"modal-title\">Edit Employee</h4>
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <div class=\"form-group\">
                                                                    <label>Name</label>
                                                                    <input type=\"text\" class=\"form-control\" required>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label>Email</label>
                                                                    <input type=\"email\" class=\"form-control\" required>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label>Address</label>
                                                                    <textarea class=\"form-control\" required></textarea>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label>Phone</label>
                                                                    <input type=\"text\" class=\"form-control\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                                                                <input type=\"submit\" class=\"btn btn-info\" value=\"Save\">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                    ";
            }
            // line 207
            echo "
                                </div>

                                <p style=\" word-wrap:break-word\">
                                    ";
            // line 211
            echo twig_escape_filter($this->env, $this->getAttribute($context["blogposts"], "articleContent", []), "html", null, true);
            echo "
                                </p>

                                <a href=";
            // line 214
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("blog_Detail", ["postId" => $this->getAttribute($context["blogposts"], "postId", [])]), "html", null, true);
            echo " class=\"dis-block txt4 m-t-30\">
                                Continue Reading
                                <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                </a>
                            </div>
                        </div>
                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['blogposts'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 221
        echo "



                        <!-- Pagination -->

                        <div class=\"pagination flex-l-m flex-w m-l--6 p-t-25\">
                            ";
        // line 228
        echo $this->env->getExtension('Tiloweb\PaginationBundle\Twig\Extension\PaginationExtension')->paginationFunction((isset($context["v"]) ? $context["v"] : $this->getContext($context, "v")), "page");
        echo "

                        </div>
                    </div>
                </div>

                <div style=\"word-wrap: break-word\" class=\"col-md-4 col-lg-3\">
                    <div style=\"word-wrap: break-word\" class=\"sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md\">
                        <!-- Search -->
                        <div class=\"search-sidebar2 size12 bo2 pos-relative\">
                            <input class=\"input-search-sidebar2 txt10 p-l-20 p-r-55\" type=\"text\" name=\"search\" placeholder=\"Search\">
                            <button class=\"btn-search-sidebar2 flex-c-m ti-search trans-0-4\"></button>
                        </div>

                        <!-- Categories -->
                        <div class=\"categories\">
                            <h4 class=\"txt33 bo5-b p-b-35 p-t-58\">
                                Categories
                            </h4>

                            <ul>
                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Cooking recipe
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Delicious foods
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Events Design
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Restaurant Place
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        WordPress
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Most Popular -->
                        <div style=\"word-wrap: break-word\" class=\"popular\">
                            <h4 class=\"txt33 p-b-35 p-t-58\">
                                Most popular
                            </h4>

                            <ul>
                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-11.jpg"), "html", null, true);
        echo "\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Best Places for Wine
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\t3 days ago
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 309
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-12.jpg"), "html", null, true);
        echo "\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Eggs and Cheese
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tJuly 2, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-13.jpg"), "html", null, true);
        echo "\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Style the Wedding Party
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tMay 28, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 345
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-14.jpg"), "html", null, true);
        echo "\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Cooking recipe Delicious
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tMay 25, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"";
        // line 363
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assets/images/blog-15.jpg"), "html", null, true);
        echo "\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Pizza is prepared fresh
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tMay 2, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <!-- Archive -->
                        <div class=\"archive\">
                            <h4 class=\"txt33 p-b-20 p-t-43\">
                                Archive
                            </h4>

                            <ul>
                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        uly 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(9)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        June 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(39)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        May 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(29)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        April  2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(35)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        March 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(22)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        February 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(32)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        January 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(21)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        December 2017
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(26)
\t\t\t\t\t\t\t\t\t</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "BlogBundle:BlogViews:Blog.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  530 => 363,  509 => 345,  488 => 327,  467 => 309,  446 => 291,  380 => 228,  371 => 221,  358 => 214,  352 => 211,  346 => 207,  300 => 164,  281 => 147,  279 => 146,  271 => 141,  263 => 136,  255 => 131,  247 => 126,  239 => 121,  235 => 119,  232 => 118,  226 => 114,  223 => 113,  221 => 112,  212 => 106,  199 => 96,  195 => 95,  191 => 93,  187 => 92,  175 => 82,  167 => 77,  156 => 69,  148 => 64,  140 => 59,  132 => 54,  124 => 49,  109 => 37,  99 => 29,  97 => 28,  74 => 8,  68 => 4,  59 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"SmartStartBase.html.twig\" %}
{% block title %}Blog{% endblock %}
{% block body %}



    <!-- Title Page -->
    <section class=\"bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15\" style=\"background-image: url({{ asset('assets/images/blog-banner.png') }});\">
        <h2 class=\"tit6 t-center\">
        </h2>
    </section>


    <!-- Content page -->
    <section>
        <div class=\"bread-crumb bo5-b p-t-17 p-b-17\">
            <div class=\"container\">
                <a href=\"\" class=\"txt27\">
                    Home
                </a>

                <span class=\"txt29 m-l-10 m-r-10\">/</span>

                <span class=\"txt29\">
\t\t\t\t\tBlog
\t\t\t\t</span>

        {% if app.user!=null %}
            </div>
            <a href=\"#addEmployeeModal\" class=\"btn3 flex-c-m size13 txt11 trans-0-4 m-l-r-auto\" data-toggle=\"modal\"><i class=\"material-icons\">&#xE147;</i> <span>  Add A Post</span></a>

            </div>
        <!-- Add Modal HTML -->
        <div id=\"addEmployeeModal\" class=\"modal fade\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    {{ form_start(form) }}




                    <div class=\"modal-header\">
                        <h4 class=\"modal-title\">Add A Post</h4>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                    </div>
                    <div class=\"modal-body\">
                        <div class=\"form-group\">
                            <label>Post Content</label>
                            {{ form_widget(form.postContent, { 'attr': {'class': 'form-control', 'type' : 'textarea'} }) }}

                        </div>
                        <div class=\"form-group\">
                            <label>Post Type</label>
                            {{ form_widget(form.postType, { 'attr': {'class': 'form-control', 'style':'font-size: 12px'} }) }}

                        </div>
                        <div class=\"form-group\">
                            <label>Article Title</label>
                            {{ form_widget(form.articleTitle, { 'attr': {'class': 'form-control', 'type' : 'textarea'} }) }}

                        </div>
                        <div class=\"form-group\">
                            <label>Article Content</label>
                            {{ form_widget(form.articleContent, { 'attr': {'class': 'form-control', 'type' : 'textarea'} }) }}

                        </div>
                        <div class=\"form-group\">
                            <label>Your Image</label>
                            {{ form_widget(form.image, { 'attr': {'class': 'form-control', 'style':'font-size: 12px'} }) }}

                        </div>
                    </div>
                    <div class=\"modal-footer\">
                        <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                        <input type=\"submit\" class=\"btn btn-success\" value=\"Add\">
                    </div>
                    {{ form_end(form) }}
                </div>
            </div>
        </div>
        {% endif %}


        <div class=\"container\">


            <div class=\"row\">
                <div class=\"col-md-8 col-lg-9\">
                    <div class=\"p-t-80 p-b-124 bo5-r h-full p-r-50 p-r-0-md bo-none-md\">

                        <!-- Block4 -->
                        {% for blogposts in v %}
                        <div class=\"blo4 p-b-63\">
                            <div class=\"pic-blo4 hov-img-zoom bo-rad-10 pos-relative\">
                                <a href={{ path('blog_detailblog') }}>
                                    <img src=\"{{ asset('uploads/images/' ~ blogposts.image) }}\" width=\"600\" height=\"427\" alt=\"IMG-BLOG\">
                                </a>

                                <div class=\"date-blo4 flex-col-c-m\">
\t\t\t\t\t\t\t\t\t<span class=\"txt30 m-b-4\">


\t\t\t\t\t\t\t\t\t</span>

                                    <span class=\"txt31\">
\t\t\t\t\t\t\t\t\t\t{{ blogposts.postDate|date(\"m/d/Y\")}}
\t\t\t\t\t\t\t\t\t</span>
                                </div>
                            </div>

                            <div class=\"text-blo4 p-t-33\">
                                {% if app.user!=null %}
                                {% if app.user.id==blogposts.author.id %}
                                <a href=\"#myModal\" class=\"delete\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Delete\">&#xE872;</i></a>

                                <a href=\"#editEmployeeModal\" class=\"edit\" data-toggle=\"modal\"><i class=\"material-icons\" data-toggle=\"tooltip\" title=\"Edit\">&#xE254;</i></a>
                                {% endif %}
                                {% endif %}

                                <h4 class=\"p-b-16\">
                                    <a href=\"\" class=\"tit9\">{{ blogposts.postContent }}</a>
                                </h4>

                                <div class=\"txt32 flex-w p-b-24\">
\t\t\t\t\t\t\t\t\t<span>
\t\t\t\t\t\t\t\t\t\tby {{ blogposts.author.username }}
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span>
\t\t\t\t\t\t\t\t\t\t{{ blogposts.postDate|date(\"m/d/Y\")}}
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span>
\t\t\t\t\t\t\t\t\t\t{{ blogposts.postType }}
\t\t\t\t\t\t\t\t\t\t<span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>

                                    <span>
\t\t\t\t\t\t\t\t\t\t{{ blogposts.postCommentCount }} Comments
                                        <span class=\"m-r-6 m-l-4\">|</span>
\t\t\t\t\t\t\t\t\t</span>


                                    {% if app.user!=null %}

                                            <!-- Modal HTML -->
                                            <div id=\"myModal\" class=\"modal fade\">
                                                <div class=\"modal-dialog modal-confirm\">
                                                    <div class=\"modal-content\">
                                                        <div class=\"modal-header\">
                                                            <div class=\"icon-box\">
                                                                <i class=\"material-icons\">&#xE5CD;</i>
                                                            </div>
                                                            <h4 class=\"modal-title\">Are you sure?</h4>
                                                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                        </div>
                                                        <div class=\"modal-body\">
                                                            <p>Do you really want to delete these records? This process cannot be undone.</p>
                                                        </div>
                                                        <div class=\"modal-footer\">
                                                            <button type=\"button\" class=\"btn btn-info\" data-dismiss=\"modal\">Cancel</button>
                                                            <a href=\"{{ path('blog_delete',{('postId'):blogposts.postId}) }}\" type=\"button\" class=\"btn btn-danger\"><label style=\"color:white;\">Delete</label></a>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Edit Modal HTML -->
                                            <div id=\"editEmployeeModal\" class=\"modal fade\">
                                                <div class=\"modal-dialog\">
                                                    <div class=\"modal-content\">
                                                        <form>
                                                            <div class=\"modal-header\">
                                                                <h4 class=\"modal-title\">Edit Employee</h4>
                                                                <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\">&times;</button>
                                                            </div>
                                                            <div class=\"modal-body\">
                                                                <div class=\"form-group\">
                                                                    <label>Name</label>
                                                                    <input type=\"text\" class=\"form-control\" required>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label>Email</label>
                                                                    <input type=\"email\" class=\"form-control\" required>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label>Address</label>
                                                                    <textarea class=\"form-control\" required></textarea>
                                                                </div>
                                                                <div class=\"form-group\">
                                                                    <label>Phone</label>
                                                                    <input type=\"text\" class=\"form-control\" required>
                                                                </div>
                                                            </div>
                                                            <div class=\"modal-footer\">
                                                                <input type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\" value=\"Cancel\">
                                                                <input type=\"submit\" class=\"btn btn-info\" value=\"Save\">
                                                            </div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                    {% endif %}

                                </div>

                                <p style=\" word-wrap:break-word\">
                                    {{ blogposts.articleContent }}
                                </p>

                                <a href={{ path('blog_Detail',{('postId'):blogposts.postId}) }} class=\"dis-block txt4 m-t-30\">
                                Continue Reading
                                <i class=\"fa fa-long-arrow-right m-l-10\" aria-hidden=\"true\"></i>
                                </a>
                            </div>
                        </div>
                        {% endfor %}




                        <!-- Pagination -->

                        <div class=\"pagination flex-l-m flex-w m-l--6 p-t-25\">
                            {{ pagination(v, 'page') }}

                        </div>
                    </div>
                </div>

                <div style=\"word-wrap: break-word\" class=\"col-md-4 col-lg-3\">
                    <div style=\"word-wrap: break-word\" class=\"sidebar2 p-t-80 p-b-80 p-l-20 p-l-0-md p-t-0-md\">
                        <!-- Search -->
                        <div class=\"search-sidebar2 size12 bo2 pos-relative\">
                            <input class=\"input-search-sidebar2 txt10 p-l-20 p-r-55\" type=\"text\" name=\"search\" placeholder=\"Search\">
                            <button class=\"btn-search-sidebar2 flex-c-m ti-search trans-0-4\"></button>
                        </div>

                        <!-- Categories -->
                        <div class=\"categories\">
                            <h4 class=\"txt33 bo5-b p-b-35 p-t-58\">
                                Categories
                            </h4>

                            <ul>
                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Cooking recipe
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Delicious foods
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Events Design
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        Restaurant Place
                                    </a>
                                </li>

                                <li class=\"bo5-b p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        WordPress
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- Most Popular -->
                        <div style=\"word-wrap: break-word\" class=\"popular\">
                            <h4 class=\"txt33 p-b-35 p-t-58\">
                                Most popular
                            </h4>

                            <ul>
                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"{{ asset('assets/images/blog-11.jpg') }}\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Best Places for Wine
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\t3 days ago
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"{{ asset('assets/images/blog-12.jpg') }}\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Eggs and Cheese
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tJuly 2, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"{{ asset('assets/images/blog-13.jpg') }}\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Style the Wedding Party
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tMay 28, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"{{ asset('assets/images/blog-14.jpg') }}\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Cooking recipe Delicious
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tMay 25, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>

                                <li class=\"flex-w m-b-25\">
                                    <div class=\"size16 bo-rad-10 wrap-pic-w of-hidden m-r-18\">
                                        <a href=\"#\">
                                            <img src=\"{{ asset('assets/images/blog-15.jpg') }}\" alt=\"IMG-BLOG\">
                                        </a>
                                    </div>

                                    <div class=\"size28\">
                                        <a href=\"#\" class=\"dis-block txt28 m-b-8\">
                                            Pizza is prepared fresh
                                        </a>

                                        <span class=\"txt14\">
\t\t\t\t\t\t\t\t\t\t\tMay 2, 2017
\t\t\t\t\t\t\t\t\t\t</span>
                                    </div>
                                </li>
                            </ul>
                        </div>


                        <!-- Archive -->
                        <div class=\"archive\">
                            <h4 class=\"txt33 p-b-20 p-t-43\">
                                Archive
                            </h4>

                            <ul>
                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        uly 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(9)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        June 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(39)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        May 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(29)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        April  2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(35)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        March 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(22)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        February 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(32)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        January 2018
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(21)
\t\t\t\t\t\t\t\t\t</span>
                                </li>

                                <li class=\"flex-sb-m p-t-8 p-b-8\">
                                    <a href=\"#\" class=\"txt27\">
                                        December 2017
                                    </a>

                                    <span class=\"txt29\">
\t\t\t\t\t\t\t\t\t\t(26)
\t\t\t\t\t\t\t\t\t</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
{% endblock %}
", "BlogBundle:BlogViews:Blog.html.twig", "C:\\wamp64\\www\\smartstart\\src\\BlogBundle/Resources/views/BlogViews/Blog.html.twig");
    }
}
