<?php

/* task/new.html.twig */
class __TwigTemplate_312480b0ef9bcdbcf84c4607b49aedaac478c521375f9d5629e3be637fa926d3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/new.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c51caae74ae46e422d86a9b960c7336898298bfe9e942a1704b56dc84fd2ec6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c51caae74ae46e422d86a9b960c7336898298bfe9e942a1704b56dc84fd2ec6->enter($__internal_2c51caae74ae46e422d86a9b960c7336898298bfe9e942a1704b56dc84fd2ec6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $__internal_57b89248d18d7d94eed3d1a79c16a38c49781b4770f5c5485409e754b1e6fe81 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57b89248d18d7d94eed3d1a79c16a38c49781b4770f5c5485409e754b1e6fe81->enter($__internal_57b89248d18d7d94eed3d1a79c16a38c49781b4770f5c5485409e754b1e6fe81_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2c51caae74ae46e422d86a9b960c7336898298bfe9e942a1704b56dc84fd2ec6->leave($__internal_2c51caae74ae46e422d86a9b960c7336898298bfe9e942a1704b56dc84fd2ec6_prof);

        
        $__internal_57b89248d18d7d94eed3d1a79c16a38c49781b4770f5c5485409e754b1e6fe81->leave($__internal_57b89248d18d7d94eed3d1a79c16a38c49781b4770f5c5485409e754b1e6fe81_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_590de0fd0e8bbc85f0339144cabb2194e3701e518baa4208bd5dae871f55bf2c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_590de0fd0e8bbc85f0339144cabb2194e3701e518baa4208bd5dae871f55bf2c->enter($__internal_590de0fd0e8bbc85f0339144cabb2194e3701e518baa4208bd5dae871f55bf2c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_42f6f8bad08d31cb14dfa6d736227037b2dd1092bae9823d0555be277158b4ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_42f6f8bad08d31cb14dfa6d736227037b2dd1092bae9823d0555be277158b4ff->enter($__internal_42f6f8bad08d31cb14dfa6d736227037b2dd1092bae9823d0555be277158b4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "    ";
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 4, $this->getSourceContext()); })()), 'form_start');
        echo "
    ";
        // line 5
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 5, $this->getSourceContext()); })()), 'widget');
        echo "
    ";
        // line 6
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 6, $this->getSourceContext()); })()), 'form_end');
        echo "
";
        
        $__internal_42f6f8bad08d31cb14dfa6d736227037b2dd1092bae9823d0555be277158b4ff->leave($__internal_42f6f8bad08d31cb14dfa6d736227037b2dd1092bae9823d0555be277158b4ff_prof);

        
        $__internal_590de0fd0e8bbc85f0339144cabb2194e3701e518baa4208bd5dae871f55bf2c->leave($__internal_590de0fd0e8bbc85f0339144cabb2194e3701e518baa4208bd5dae871f55bf2c_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_807b2d236daa65e55e8c1daf3b49c666fd87caab63023064ac10861716495206 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_807b2d236daa65e55e8c1daf3b49c666fd87caab63023064ac10861716495206->enter($__internal_807b2d236daa65e55e8c1daf3b49c666fd87caab63023064ac10861716495206_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_989ec14b7a77b5447dbfb32c06c7656076d39e2c06d8f3c42e556e2ac58f6481 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_989ec14b7a77b5447dbfb32c06c7656076d39e2c06d8f3c42e556e2ac58f6481->enter($__internal_989ec14b7a77b5447dbfb32c06c7656076d39e2c06d8f3c42e556e2ac58f6481_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "Crear tarea
";
        
        $__internal_989ec14b7a77b5447dbfb32c06c7656076d39e2c06d8f3c42e556e2ac58f6481->leave($__internal_989ec14b7a77b5447dbfb32c06c7656076d39e2c06d8f3c42e556e2ac58f6481_prof);

        
        $__internal_807b2d236daa65e55e8c1daf3b49c666fd87caab63023064ac10861716495206->leave($__internal_807b2d236daa65e55e8c1daf3b49c666fd87caab63023064ac10861716495206_prof);

    }

    public function getTemplateName()
    {
        return "task/new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 10,  71 => 9,  59 => 6,  55 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block content %}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}

{% block title %}
Crear tarea
{% endblock %}

", "task/new.html.twig", "/home/daniel/Desktop/SEGUNDO_CARRERA/todo/templates/task/new.html.twig");
    }
}
