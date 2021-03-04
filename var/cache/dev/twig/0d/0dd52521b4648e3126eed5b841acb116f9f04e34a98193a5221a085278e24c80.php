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

/* visiteur/LoginVisiteur.html.twig */
class __TwigTemplate_a9e4233497b8a3f6788802e2493185c20015cd5ec271e57c89fe958b1695fc8c extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'menu' => [$this, 'block_menu'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "visiteur/LoginVisiteur.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "visiteur/LoginVisiteur.html.twig", 1);
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
        echo "Login Visiteur
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "    <div style=\"margin-top: 15px\">    
        <center>
            <style>
                .imgnav {
                    border-radius: 25%;
                }
                
                
                .imgnav:hover {
                        -webkit-transform: scaleX(-1);
                         transform: scaleX(-1);
                        }
                
            </style>
           
            
            <a  href=\"";
        // line 22
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("CompteComptable");
        echo "\">
                <img class=\"imgnav\" src=\"";
        // line 23
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/logo.png"), "html", null, true);
        echo "\" width=\"350\" >
            </a>
        </center>
    </div>
    <br/>
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 32
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 33
        echo "    <style>
        body{
            background-image: url(";
        // line 35
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("img/b12.jpg"), "html", null, true);
        echo ")
        }
        
    </style>
    

    
    <div class=\"alert alert-danger alert-dismissible fade show\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        <strong>Saissir incorrect!!!</strong>   Réessayer....
    </div>

    

<center>
    <div class=\"well\">
    ";
        // line 51
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
    ";
        // line 53
        echo "    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), 'errors');
        echo "
        <h3>
            <center>Connexion Visiteur </center>
        </h3>
        <div class=\"well\">
            ";
        // line 58
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 58, $this->source); })()), 'form_start', ["attr" => ["class" => "form-horizontal"]]);
        echo "
            ";
        // line 60
        echo "            ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 60, $this->source); })()), 'errors');
        echo "
            <div class=\"form-group\">
                ";
        // line 63
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "login", [], "any", false, false, false, 63), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Login :"]);
        echo "
                ";
        // line 65
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "login", [], "any", false, false, false, 65), 'errors');
        echo "
                <div class=\"col-sm-4\">
                    ";
        // line 68
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "login", [], "any", false, false, false, 68), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <div class=\"form-group\">
                ";
        // line 73
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 73, $this->source); })()), "mdp", [], "any", false, false, false, 73), 'label', ["label_attr" => ["class" => "col-sm-3 control-label"], "label" => "Mot de passe :"]);
        echo "
                ";
        // line 75
        echo "                ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "mdp", [], "any", false, false, false, 75), 'errors');
        echo "
                <div class=\"col-sm-4\">
                    ";
        // line 78
        echo "                    ";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 78, $this->source); })()), "mdp", [], "any", false, false, false, 78), 'widget', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
            </div>
            <br/>
            

            ";
        // line 85
        echo "            <div class=\"row\">
                <div class=\"container\">
                    <label class=\"col-md-4 control-label\"></label>
                    <div class=\"col-md-4\">
                        ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), "valider", [], "any", false, false, false, 89), 'widget', ["attr" => ["class" => "btn btn-success btn-lg", "style" => "width:8em"]]);
        echo "
                        
                        ";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 91, $this->source); })()), "annuler", [], "any", false, false, false, 91), 'widget', ["attr" => ["class" => "btn btn-danger btn-lg", "style" => "width:8em"]]);
        echo "
                    </div>
                    <p></p>
                    <a type=\"button\" class=\"btn btn-info btn-lg\" href=\"";
        // line 94
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("accueil");
        echo "\" style=\"width:16em\">Retour</a>
                </div>
            </div>
        </div>
        ";
        // line 98
        if (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 98, $this->source); })()), "session", [], "any", false, false, false, 98), "flashBag", [], "any", false, false, false, 98), "has", [0 => "success"], "method", false, false, false, 98)) {
            // line 99
            echo "        <div class=\"alert alert-success\">
            ";
            // line 100
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 100, $this->source); })()), "session", [], "any", false, false, false, 100), "flashBag", [], "any", false, false, false, 100), "get", [0 => "success"], "method", false, false, false, 100));
            foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
                // line 101
                echo "            ";
                echo twig_escape_filter($this->env, $context["msg"], "html", null, true);
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 103
            echo "        </div>
        ";
        }
        // line 105
        echo "
        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 106, $this->source); })()), 'rest');
        echo "
        ";
        // line 108
        echo "        ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), 'form_end');
        echo "
    </div>";
        // line 110
        echo "</center>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "visiteur/LoginVisiteur.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  263 => 110,  258 => 108,  254 => 106,  251 => 105,  247 => 103,  238 => 101,  234 => 100,  231 => 99,  229 => 98,  222 => 94,  216 => 91,  211 => 89,  205 => 85,  195 => 78,  189 => 75,  184 => 73,  176 => 68,  170 => 65,  165 => 63,  159 => 60,  155 => 58,  146 => 53,  142 => 51,  123 => 35,  119 => 33,  112 => 32,  98 => 23,  94 => 22,  76 => 6,  69 => 5,  61 => 3,  54 => 2,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}
Login Visiteur
{% endblock %}
{% block menu %}
    <div style=\"margin-top: 15px\">    
        <center>
            <style>
                .imgnav {
                    border-radius: 25%;
                }
                
                
                .imgnav:hover {
                        -webkit-transform: scaleX(-1);
                         transform: scaleX(-1);
                        }
                
            </style>
           
            
            <a  href=\"{{ path('CompteComptable') }}\">
                <img class=\"imgnav\" src=\"{{ asset('img/logo.png') }}\" width=\"350\" >
            </a>
        </center>
    </div>
    <br/>
    
{% endblock %}


{% block body %}
    <style>
        body{
            background-image: url({{ asset('img/b12.jpg') }})
        }
        
    </style>
    

    
    <div class=\"alert alert-danger alert-dismissible fade show\">
        <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
        <strong>Saissir incorrect!!!</strong>   Réessayer....
    </div>

    

<center>
    <div class=\"well\">
    {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
    {# Les erreurs générales du formulaire. #}
    {{ form_errors(form) }}
        <h3>
            <center>Connexion Visiteur </center>
        </h3>
        <div class=\"well\">
            {{ form_start(form, {'attr': {'class': 'form-horizontal'}}) }}
            {# Les erreurs générales du formulaire. #}
            {{ form_errors(form) }}
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.login, \"Login :\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.login) }}
                <div class=\"col-sm-4\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.login, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <div class=\"form-group\">
                {# Génération du label. #}
                {{ form_label(form.mdp, \"Mot de passe :\", {'label_attr': {'class': 'col-sm-3 control-label'}}) }}
                {# Affichage des erreurs pour ce champ précis. #}
                {{ form_errors(form.mdp) }}
                <div class=\"col-sm-4\">
                    {# Génération de l'input. #}
                    {{ form_widget(form.mdp, {'attr': {'class': 'form-control'}}) }}
                </div>
            </div>
            <br/>
            

            {# Pour le bouton, pas de label ni d'erreur, on affiche juste le widget #}
            <div class=\"row\">
                <div class=\"container\">
                    <label class=\"col-md-4 control-label\"></label>
                    <div class=\"col-md-4\">
                        {{ form_widget(form.valider, {'attr': {'class': 'btn btn-success btn-lg','style':'width:8em'}}) }}
                        
                        {{ form_widget(form.annuler, {'attr': {'class': 'btn btn-danger btn-lg', 'style':'width:8em'}}) }}
                    </div>
                    <p></p>
                    <a type=\"button\" class=\"btn btn-info btn-lg\" href=\"{{ path('accueil') }}\" style=\"width:16em\">Retour</a>
                </div>
            </div>
        </div>
        {% if app.session.flashBag.has('success') %}
        <div class=\"alert alert-success\">
            {% for msg in app.session.flashBag.get('success') %}
            {{ msg }}
            {% endfor %}
        </div>
        {% endif %}

        {{ form_rest(form) }}
        {# Fermeture de la balise <form> du formulaire HTML #}
        {{ form_end(form) }}
    </div>{# empty Twig template #}
</center>
{% endblock %}
{# empty Twig template #}", "visiteur/LoginVisiteur.html.twig", "/var/www/html/GSB-Frais-Doctrine/templates/visiteur/LoginVisiteur.html.twig");
    }
}
