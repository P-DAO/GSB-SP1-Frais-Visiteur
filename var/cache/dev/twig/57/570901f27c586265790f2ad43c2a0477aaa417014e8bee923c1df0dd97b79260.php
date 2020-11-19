<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* visiteur/saisir.html.twig */
class __TwigTemplate_b8c46e3bc221a1f03b4c1961736513ff01b35a2f625d7ad47a3b189f06aaadcd extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'main' => [$this, 'block_main'],
            'menu' => [$this, 'block_menu'],
            'contenu' => [$this, 'block_contenu'],
            'affichage' => [$this, 'block_affichage'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/saisir.html.twig"));

        // line 1
        $this->displayBlock('title', $context, $blocks);
        // line 4
        $this->displayBlock('main', $context, $blocks);
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 2
        echo "    Saisir Nouveau Frais
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 5
        echo "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-4 col-md-3\">
                ";
        // line 8
        $this->displayBlock('menu', $context, $blocks);
        // line 51
        echo "            </div>
";
        // line 53
        echo "
            ";
        // line 55
        echo "            <div class=\"col-sm\">
                ";
        // line 56
        $this->displayBlock('contenu', $context, $blocks);
        // line 100
        echo "            </div>
            ";
        // line 102
        echo "            <div class=\"col-sm-4 col-md-3\">
                ";
        // line 103
        $this->displayBlock('affichage', $context, $blocks);
        // line 105
        echo "            </div>
        </div>
    </div>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 9
        echo "                    <div class=\"container-fluid\">
                        <div class ='row'>
                            <nav class=\"col-sm hidden-xs-down bg-faded sidebar\">
                                <div id=\"navLateral\">
                                    <ul class=\"nav nav-pills flex-column\">
                                        <li class=\"nav-item\" >
                                            <a class=\"nav-link\" href=\"";
        // line 15
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gsb_profil_homepage");
        echo "\">Menu<i class=\"fas fa-angle-left\"></i></a>
                                        </li>
                                    </ul>
                                    <hr>

                                    <ul class=\"nav nav-pills flex-column\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("gsb_profil_saisie_frais");
        echo "\">Saisie des frais<span class=\"sr-only\">(current)</span><i class=\"far fa-edit\"></i></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Fiche du mois <i class=\"fas fa-book\"></i></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Historique</a>
                                        </li>
                                    </ul>

                                    <hr>

                                    <ul class=\"nav nav-pills flex-column\">

                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Changer de mot de passe <i class=\"fas fa-key\"></i></a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Se déconnecter <i class=\"fas fa-power-off\"></i></a>

                                        </li>
                                    </ul>

                                </div>
                            </nav>
                        </div>
                    </div>
                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 56
    public function block_contenu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "contenu"));

        // line 57
        echo "                    <div class=\"jumbotron jumbotron-fluid\">
                        <div class=\"container-fluid\">
                            ";
        // line 64
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 64, $this->source); })()), 1, [], "any", false, false, false, 64), 'row');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 68
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), 2, [], "any", false, false, false, 68), 'row');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            ";
        // line 76
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), 3, [], "any", false, false, false, 76), 'row');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 80
        echo "                                            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), 4, [], "any", false, false, false, 80), 'row');
        echo "
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "save", [], "any", false, false, false, 87), 'row');
        echo "
                                        </div>
                                        <div class=\"col\">
                                            ";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "cancel", [], "any", false, false, false, 90), 'row');
        echo "
                                        </div>
                                    </div>
                                </div>
                            ";
        // line 94
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), 'form_end');
        echo "
                        </div>
                        #}
                    </div>

                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 103
    public function block_affichage($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "affichage"));

        // line 104
        echo "                ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/saisir.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  253 => 104,  246 => 103,  233 => 94,  226 => 90,  220 => 87,  209 => 80,  202 => 76,  191 => 68,  184 => 64,  180 => 57,  173 => 56,  137 => 22,  127 => 15,  119 => 9,  112 => 8,  102 => 105,  100 => 103,  97 => 102,  94 => 100,  92 => 56,  89 => 55,  86 => 53,  83 => 51,  81 => 8,  76 => 5,  69 => 4,  61 => 2,  54 => 1,  47 => 4,  45 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% block title %}
    Saisir Nouveau Frais
{% endblock %}
{% block main %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col-sm-4 col-md-3\">
                {% block menu %}
                    <div class=\"container-fluid\">
                        <div class ='row'>
                            <nav class=\"col-sm hidden-xs-down bg-faded sidebar\">
                                <div id=\"navLateral\">
                                    <ul class=\"nav nav-pills flex-column\">
                                        <li class=\"nav-item\" >
                                            <a class=\"nav-link\" href=\"{{ path('gsb_profil_homepage') }}\">Menu<i class=\"fas fa-angle-left\"></i></a>
                                        </li>
                                    </ul>
                                    <hr>

                                    <ul class=\"nav nav-pills flex-column\">
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link active\" href=\"{{ path('gsb_profil_saisie_frais') }}\">Saisie des frais<span class=\"sr-only\">(current)</span><i class=\"far fa-edit\"></i></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Fiche du mois <i class=\"fas fa-book\"></i></a>
                                        </li>
                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Historique</a>
                                        </li>
                                    </ul>

                                    <hr>

                                    <ul class=\"nav nav-pills flex-column\">

                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Changer de mot de passe <i class=\"fas fa-key\"></i></a>
                                        </li>

                                        <li class=\"nav-item\">
                                            <a class=\"nav-link\" href=\"#\">Se déconnecter <i class=\"fas fa-power-off\"></i></a>

                                        </li>
                                    </ul>

                                </div>
                            </nav>
                        </div>
                    </div>
                {% endblock menu %}
            </div>
{##}

            {# formulaire au millieur de la page #}
            <div class=\"col-sm\">
                {% block contenu %}
                    <div class=\"jumbotron jumbotron-fluid\">
                        <div class=\"container-fluid\">
                            {#{{ form_start(form) }}
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            {# form.1 = Forfait Etape (nuit et repas)#}
                                            {{ form_row(form.1) }}
                                        </div>
                                        <div class=\"col\">
                                            {# form.2 = frais km#}
                                            {{ form_row(form.2) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            {# form.3 = Nuitée Hotel#}
                                            {{ form_row(form.3) }}
                                        </div>
                                        <div class=\"col\">
                                            {# form.4 = repas restaurant#}
                                            {{ form_row(form.4) }}
                                        </div>
                                    </div>
                                </div>
                                <div class=\"form-group\">
                                    <div class=\"row\">
                                        <div class=\"col\">
                                            {{ form_row(form.save) }}
                                        </div>
                                        <div class=\"col\">
                                            {{ form_row(form.cancel) }}
                                        </div>
                                    </div>
                                </div>
                            {{ form_end(form) }}
                        </div>
                        #}
                    </div>

                {% endblock contenu %}
            </div>
            {# affichage sur le côté droit de la page#}
            <div class=\"col-sm-4 col-md-3\">
                {% block affichage %}
                {% endblock affichage %}
            </div>
        </div>
    </div>
{% endblock %}", "visiteur/saisir.html.twig", "/var/www/html/GSB-Frais/templates/visiteur/saisir.html.twig");
    }
}
