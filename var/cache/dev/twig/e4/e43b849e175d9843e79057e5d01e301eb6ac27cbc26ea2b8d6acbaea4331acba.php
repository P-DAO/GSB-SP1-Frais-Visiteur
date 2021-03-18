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

    // line 5
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

    // line 8
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 9
        echo "    
    
<center>
    <div class=\"well\">
    ";
        // line 13
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 13, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
    
        <h3>
      
              <center>Connexion Visiteur </center> 
        
        </h3>
        
            ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
            
    
            <div class=\"form-group\">
                ";
        // line 26
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 26, $this->source); })()), "identifiant", [], "any", false, false, false, 26), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Login :"]);
        echo "

                <div class=\"col-sm-4\">
                    ";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 29, $this->source); })()), "identifiant", [], "any", false, false, false, 29), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 34
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "motDePasse", [], "any", false, false, false, 34), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Mot de passe :"]);
        echo "
        
                <div class=\"col-sm-4\">
                    ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "motDePasse", [], "any", false, false, false, 37), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <br/>
            
            <div class=\"row\">
                <div class=\"container\">
                    <label class=\"col-md-4 control-label\"></label>
                    <div class=\"col-md-4\">
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "valider", [], "any", false, false, false, 46), 'widget', ["attr" => ["class" => "btn btn-success btn-lg", "style" => "width:15em"]]);
        echo "
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
        ";
        // line 55
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 55, $this->source); })()), 'form_end');
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
        return array (  159 => 55,  148 => 46,  136 => 37,  129 => 34,  122 => 29,  115 => 26,  108 => 21,  97 => 13,  91 => 9,  84 => 8,  69 => 5,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
Connexion Visiteur 
{% endblock %}
    {% block stylesheets %} <link href=\"{{ asset('css/login.css') }}\" type=\"text/css\" rel=\"stylesheet\" />{% endblock %}
   

{% block body %}
    
    
<center>
    <div class=\"well\">
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
    
        <h3>
      
              <center>Connexion Visiteur </center> 
        
        </h3>
        
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
                        {{ form_widget(form.valider, {'attr': {'class': 'btn btn-success btn-lg','style':'width:15em'}}) }}
                        
                        
                    </div>
                    
                </div>
            </div>
        </div>
        {# Fermeture de la balise <form> du formulaire HTML #}
        {{ form_end(form) }}
    </div>
</center>
{% endblock %}
", "visiteur/seConnecterVisiteur.html.twig", "/var/www/html/GSB-Frais-Doctrine/templates/visiteur/seConnecterVisiteur.html.twig");
    }
}
