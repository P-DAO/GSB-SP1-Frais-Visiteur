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

/* accueil/index.html.twig */
class __TwigTemplate_ae5a79c97f33387754d4286b275757d7144ca5aa5d2a5555e5b9c2cf7a09318f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'stylesheets' => [$this, 'block_stylesheets'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 4
        echo "      <link href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/accueil.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
    
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        echo "    <script src=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("js/accueil.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 12
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 16
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "

  <!-- slider start -->
  <div class=\"fnc-slider example-slider\">
    <div class=\"fnc-slider__slides\">
     <!-- slide start -->
      <div class=\"fnc-slide m--blend-green m--active-slide\">
        <div class=\"fnc-slide__inner\">
          <div class=\"fnc-slide__mask\">
            <div class=\"fnc-slide__mask-inner\"></div>
          </div>
          <div class=\"fnc-slide__content\">
            <h2 class=\"fnc-slide__heading\">
              <div class=\"fnc-slide__heading-line\">
                <span>GSB</span>
              </div>
              <div class=\"fnc-slide__heading-line\">
                <span>Galaxy Swiss Bourdin</span>
              </div>
            </h2>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class=\"fnc-slide m--blend-dark\">
        <div class=\"fnc-slide__inner\">
          <div class=\"fnc-slide__mask\">
            <div class=\"fnc-slide__mask-inner\"></div>
          </div>
          <div class=\"fnc-slide__content\">
            <h2 class=\"fnc-slide__heading\">
              <div class=\"fnc-slide__heading-line\">
                <span> Visiteur</span>
                <div>
                <a href=\"";
        // line 52
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("seConnecterVisiteur");
        echo "\"  class=\"button\"> Compte Visiteur</a>
                </div>
              </div>
            </h2>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class=\"fnc-slide m--blend-red\">
        <div class=\"fnc-slide__inner\">
          <div class=\"fnc-slide__mask\">
            <div class=\"fnc-slide__mask-inner\"></div>
          </div>
          <div class=\"fnc-slide__content\">
            <h2 class=\"fnc-slide__heading\">
              <div class=\"fnc-slide__heading-line\">
                <span>Comptable</span>
                <div>
                <a href=\"#\"  class=\"button\"> Compte Comptable</a>
                </div>
            </h2>
          </div>
        </div>
      </div>
      <!-- slide end -->
      
    </div>
    <nav class=\"fnc-nav\">
      <div class=\"fnc-nav__bgs\">
        <div class=\"fnc-nav__bg m--navbg-green m--active-nav-bg\"></div>
        <div class=\"fnc-nav__bg m--navbg-red\"></div>
        <div class=\"fnc-nav__bg m--navbg-blue\"></div>
      </div>
      <div class=\"fnc-nav__controls\">
        <button class=\"fnc-nav__control\">
          GSB Frais
          <span class=\"fnc-nav__control-progress\"></span>
        </button>
        <button class=\"fnc-nav__control\">
          Visiteur
          <span class=\"fnc-nav__control-progress\"></span>
        </button>
        <button class=\"fnc-nav__control\">
          Comptable
          <span class=\"fnc-nav__control-progress\"></span>
        </button>
      </div>
    </nav>
  </div>
  
    
    


";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "accueil/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 52,  110 => 17,  103 => 16,  90 => 12,  80 => 9,  73 => 8,  62 => 4,  55 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block stylesheets %}
      <link href=\"{{ asset('css/accueil.css') }}\" type=\"text/css\" rel=\"stylesheet\" />
    
{% endblock %}

{% block javascripts %}
    <script src=\"{{ asset('js/accueil.js') }}\"></script>
{% endblock %}

{% block title %}Accueil{% endblock %}



{% block body %}


  <!-- slider start -->
  <div class=\"fnc-slider example-slider\">
    <div class=\"fnc-slider__slides\">
     <!-- slide start -->
      <div class=\"fnc-slide m--blend-green m--active-slide\">
        <div class=\"fnc-slide__inner\">
          <div class=\"fnc-slide__mask\">
            <div class=\"fnc-slide__mask-inner\"></div>
          </div>
          <div class=\"fnc-slide__content\">
            <h2 class=\"fnc-slide__heading\">
              <div class=\"fnc-slide__heading-line\">
                <span>GSB</span>
              </div>
              <div class=\"fnc-slide__heading-line\">
                <span>Galaxy Swiss Bourdin</span>
              </div>
            </h2>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class=\"fnc-slide m--blend-dark\">
        <div class=\"fnc-slide__inner\">
          <div class=\"fnc-slide__mask\">
            <div class=\"fnc-slide__mask-inner\"></div>
          </div>
          <div class=\"fnc-slide__content\">
            <h2 class=\"fnc-slide__heading\">
              <div class=\"fnc-slide__heading-line\">
                <span> Visiteur</span>
                <div>
                <a href=\"{{ path( 'seConnecterVisiteur' ) }}\"  class=\"button\"> Compte Visiteur</a>
                </div>
              </div>
            </h2>
          </div>
        </div>
      </div>
      <!-- slide end -->
      <!-- slide start -->
      <div class=\"fnc-slide m--blend-red\">
        <div class=\"fnc-slide__inner\">
          <div class=\"fnc-slide__mask\">
            <div class=\"fnc-slide__mask-inner\"></div>
          </div>
          <div class=\"fnc-slide__content\">
            <h2 class=\"fnc-slide__heading\">
              <div class=\"fnc-slide__heading-line\">
                <span>Comptable</span>
                <div>
                <a href=\"#\"  class=\"button\"> Compte Comptable</a>
                </div>
            </h2>
          </div>
        </div>
      </div>
      <!-- slide end -->
      
    </div>
    <nav class=\"fnc-nav\">
      <div class=\"fnc-nav__bgs\">
        <div class=\"fnc-nav__bg m--navbg-green m--active-nav-bg\"></div>
        <div class=\"fnc-nav__bg m--navbg-red\"></div>
        <div class=\"fnc-nav__bg m--navbg-blue\"></div>
      </div>
      <div class=\"fnc-nav__controls\">
        <button class=\"fnc-nav__control\">
          GSB Frais
          <span class=\"fnc-nav__control-progress\"></span>
        </button>
        <button class=\"fnc-nav__control\">
          Visiteur
          <span class=\"fnc-nav__control-progress\"></span>
        </button>
        <button class=\"fnc-nav__control\">
          Comptable
          <span class=\"fnc-nav__control-progress\"></span>
        </button>
      </div>
    </nav>
  </div>
  
    
    


{% endblock %}", "accueil/index.html.twig", "/var/www/html/GSB-Frais/templates/accueil/index.html.twig");
    }
}
