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

/* visiteur/seConnecterVisiteur.html.twig */
class __TwigTemplate_e867fe1c9e950ee5a81854ed6ce9a33662a2a22bdcf9d5674ad0e0b80df14acc extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/seConnecterVisiteur.html.twig"));

        // line 2
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["formVisiteur"]) || array_key_exists("formVisiteur", $context) ? $context["formVisiteur"] : (function () { throw new RuntimeError('Variable "formVisiteur" does not exist.', 2, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/seConnecterVisiteur.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        // line 4
        echo "Connexion Visiteur 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo " <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/login.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 9
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "    
    
<center>
    <div class=\"well\">
    <h1> Connexion Visiteur</h1>

    ";
        // line 16
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formVisiteur"]) || array_key_exists("formVisiteur", $context) ? $context["formVisiteur"] : (function () { throw new RuntimeError('Variable "formVisiteur" does not exist.', 16, $this->source); })()), 'form_start');
        echo "

    ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVisiteur"]) || array_key_exists("formVisiteur", $context) ? $context["formVisiteur"] : (function () { throw new RuntimeError('Variable "formVisiteur" does not exist.', 18, $this->source); })()), "login", [], "any", false, false, false, 18), 'row', ["attr" => ["placeholder" => "Login"]]);
        echo "
    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formVisiteur"]) || array_key_exists("formVisiteur", $context) ? $context["formVisiteur"] : (function () { throw new RuntimeError('Variable "formVisiteur" does not exist.', 19, $this->source); })()), "mdp", [], "any", false, false, false, 19), 'row', ["label" => "Mot de passe", "attr" => ["placeholder" => "****"]]);
        echo "
    <button type=\"submit\" class=\"btn btn-success\">Se connecter</button>
    <button class=\"btn btn\"><a href=\"";
        // line 21
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("index");
        echo "\">Retour</a></button>
    ";
        // line 22
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formVisiteur"]) || array_key_exists("formVisiteur", $context) ? $context["formVisiteur"] : (function () { throw new RuntimeError('Variable "formVisiteur" does not exist.', 22, $this->source); })()), 'form_end');
        echo "

    </div>
</center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/seConnecterVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 22,  116 => 21,  111 => 19,  107 => 18,  102 => 16,  94 => 10,  87 => 9,  72 => 6,  64 => 4,  57 => 3,  49 => 1,  47 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% form_theme formVisiteur 'bootstrap_4_layout.html.twig' %}
{% block title %}
Connexion Visiteur 
{% endblock %}
    {% block stylesheets %} <link href=\"{{ asset('css/login.css') }}\" type=\"text/css\" rel=\"stylesheet\" />{% endblock %}
   

{% block body %}
    
    
<center>
    <div class=\"well\">
    <h1> Connexion Visiteur</h1>

    {{ form_start(formVisiteur) }}

    {{ form_row(formVisiteur.login, {'attr': {'placeholder': \"Login\"} }) }}
    {{ form_row(formVisiteur.mdp, {'label': \"Mot de passe\",'attr': {'placeholder': \"****\"} }) }}
    <button type=\"submit\" class=\"btn btn-success\">Se connecter</button>
    <button class=\"btn btn\"><a href=\"{{ path('index')}}\">Retour</a></button>
    {{ form_end(formVisiteur) }}

    </div>
</center>
{% endblock %}
", "visiteur/seConnecterVisiteur.html.twig", "/var/www/html/GSB-Frais/templates/visiteur/seConnecterVisiteur.html.twig");
    }
}
