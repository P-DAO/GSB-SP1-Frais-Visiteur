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

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/seConnecterVisiteur.html.twig", 1);
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
        echo "Connexion Visiteur 
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        echo "    
    
<center>
    <div class=\"well\">
    ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
    
        <h3>
            <center>Connexion Visiteur </center>
        </h3>
        <div class=\"well\">
            ";
        // line 17
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
            
    
            <div class=\"form-group\">
                ";
        // line 22
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "identifiant", [], "any", false, false, false, 22), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Login :"]);
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 25, $this->source); })()), "identifiant", [], "any", false, false, false, 25), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 30
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "motDePasse", [], "any", false, false, false, 30), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Mot de passe :"]);
        echo "
        
                <div class=\"col-sm-4\">
                    ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 33, $this->source); })()), "motDePasse", [], "any", false, false, false, 33), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <br/>
            
            <div class=\"row\">
                <div class=\"container\">
                    <label class=\"col-md-4 control-label\"></label>
                    <div class=\"col-md-4\">
                        ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "valider", [], "any", false, false, false, 42), 'widget', ["attr" => ["class" => "btn btn-success btn-lg", "style" => "width:8em"]]);
        echo "
                        
                        ";
        // line 44
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "annuler", [], "any", false, false, false, 44), 'widget', ["attr" => ["class" => "btn btn-danger btn-lg", "style" => "width:8em"]]);
        echo "
                    </div>
                    
                </div>
            </div>
        </div>
        ";
        // line 51
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_end');
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
        return array (  144 => 51,  135 => 44,  130 => 42,  118 => 33,  111 => 30,  104 => 25,  97 => 22,  90 => 17,  81 => 11,  75 => 7,  68 => 6,  60 => 3,  53 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
Connexion Visiteur 
{% endblock %}

{% block body %}
    
    
<center>
    <div class=\"well\">
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
    
        <h3>
            <center>Connexion Visiteur </center>
        </h3>
        <div class=\"well\">
            {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
            
    
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.identifiant, \"Login :\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}

                <div class=\"col-sm-4\">
                    {{ form_widget(form.identifiant, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.motDePasse, \"Mot de passe :\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
        
                <div class=\"col-sm-4\">
                    {{ form_widget(form.motDePasse, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <br/>
            
            <div class=\"row\">
                <div class=\"container\">
                    <label class=\"col-md-4 control-label\"></label>
                    <div class=\"col-md-4\">
                        {{ form_widget(form.valider, {'attr': {'class': 'btn btn-success btn-lg','style':'width:8em'}}) }}
                        
                        {{ form_widget(form.annuler, {'attr': {'class': 'btn btn-danger btn-lg', 'style':'width:8em'}}) }}
                    </div>
                    
                </div>
            </div>
        </div>
        {# Fermeture de la balise <form> du formulaire HTML #}
        {{ form_end(form) }}
    </div>
</center>
{% endblock %}
", "visiteur/seConnecterVisiteur.html.twig", "/var/www/html/GSB-Frais/templates/visiteur/seConnecterVisiteur.html.twig");
    }
}
