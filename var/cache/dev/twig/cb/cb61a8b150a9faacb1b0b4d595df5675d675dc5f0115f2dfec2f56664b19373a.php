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
class __TwigTemplate_88d7ee5c60a72a065fe99defb8bc6bdcadb992cf2051060511581690e338dfa0 extends Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "accueil/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "accueil/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Accueil";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 7
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 8
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
        // line 43
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
        return array (  110 => 43,  73 => 8,  66 => 7,  53 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

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
  
    
    


{% endblock %}
", "accueil/index.html.twig", "/var/www/html/GSB-Frais-Doctrine/templates/accueil/index.html.twig");
    }
}
