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

/* visiteur/visiteur.html.twig */
class __TwigTemplate_9570f892baffd1653382248618a92de74fa7224f7ba126eda4e74dceb3a7f287 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/visiteur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/visiteur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 3
        echo "    Visiteur
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

<<<<<<< HEAD
        // line 7
        $this->displayBlock('nav', $context, $blocks);
        // line 28
        echo "    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_nav($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "nav"));

        // line 8
        echo "    ";
        $this->loadTemplate("visiteur/navbar.html.twig", "visiteur/visiteur.html.twig", 8)->display($context);
        // line 9
        echo "    ";
        // line 26
        echo "
=======
        // line 9
        echo "       ";
        $this->loadTemplate("visiteur/navbar.html.twig", "visiteur/visiteur.html.twig", 9)->display($context);
        // line 10
        echo "    <div>
        
       <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <a class=\"navbar-brand\">Bienvenue ";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "get", [0 => "nom"], "method", false, false, false, 13), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 13, $this->source); })()), "session", [], "any", false, false, false, 13), "get", [0 => "prenom"], "method", false, false, false, 13), "html", null, true);
        echo "<span class=\"sr-only\"></span></a>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("saisir");
        echo "\">Nouveau Frais</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"";
        // line 20
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("consulter");
        echo "\">Consulter Frais</a>
                    </li>
                </ul>
            </div>
        </nav>
            
    </div>


    
>>>>>>> gsb/master
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/visiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
<<<<<<< HEAD
        return array (  98 => 26,  96 => 9,  93 => 8,  86 => 7,  78 => 28,  76 => 7,  69 => 6,  61 => 3,  54 => 2,  37 => 1,);
=======
        return array (  98 => 20,  92 => 17,  83 => 13,  78 => 10,  75 => 9,  68 => 8,  60 => 3,  53 => 2,  36 => 1,);
>>>>>>> gsb/master
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
    Visiteur
{% endblock %}



{% block body %}
<<<<<<< HEAD
{% block nav %}
    {% include 'visiteur/navbar.html.twig'%}
    {#<div>
=======
       {% include 'visiteur/navbar.html.twig' %}
    <div>
>>>>>>> gsb/master
        
       <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark\">
            <a class=\"navbar-brand\">Bienvenue {{ app.session.get('nom') }} {{ app.session.get('prenom') }}<span class=\"sr-only\"></span></a>
            <div class=\"collapse navbar-collapse\" id=\"navbarNavDropdown\">
                <ul class=\"navbar-nav\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('saisir') }}\">Nouveau Frais</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link\" href=\"{{ path('consulter') }}\">Consulter Frais</a>
                    </li>
                </ul>
            </div>
        </nav>
            
    </div>#}


    
{% endblock %}
{# empty Twig template #}", "visiteur/visiteur.html.twig", "/var/www/html/GSB-Frais/templates/visiteur/visiteur.html.twig");
    }
}
