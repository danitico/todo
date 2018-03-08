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
            'body' => array($this, 'block_body'),
            'title' => array($this, 'block_title'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9ed905deebd1bc1bdbcf36c9dff561abed38dd617e5967a4235468e4f71cce59 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9ed905deebd1bc1bdbcf36c9dff561abed38dd617e5967a4235468e4f71cce59->enter($__internal_9ed905deebd1bc1bdbcf36c9dff561abed38dd617e5967a4235468e4f71cce59_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $__internal_ac1d78ccd7063109040718e5e00b15e4b445d4d2e73f4675719d9b77ab2f8aff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac1d78ccd7063109040718e5e00b15e4b445d4d2e73f4675719d9b77ab2f8aff->enter($__internal_ac1d78ccd7063109040718e5e00b15e4b445d4d2e73f4675719d9b77ab2f8aff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_9ed905deebd1bc1bdbcf36c9dff561abed38dd617e5967a4235468e4f71cce59->leave($__internal_9ed905deebd1bc1bdbcf36c9dff561abed38dd617e5967a4235468e4f71cce59_prof);

        
        $__internal_ac1d78ccd7063109040718e5e00b15e4b445d4d2e73f4675719d9b77ab2f8aff->leave($__internal_ac1d78ccd7063109040718e5e00b15e4b445d4d2e73f4675719d9b77ab2f8aff_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_fcc7f1d781fd13cddae59e6f12bdba30fa52b511a1b334979100ff4647151be3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcc7f1d781fd13cddae59e6f12bdba30fa52b511a1b334979100ff4647151be3->enter($__internal_fcc7f1d781fd13cddae59e6f12bdba30fa52b511a1b334979100ff4647151be3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_658422b568808b1599afa71ffb9b9b840426309bd710fc3f94c5bb2aaad8a54f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_658422b568808b1599afa71ffb9b9b840426309bd710fc3f94c5bb2aaad8a54f->enter($__internal_658422b568808b1599afa71ffb9b9b840426309bd710fc3f94c5bb2aaad8a54f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_658422b568808b1599afa71ffb9b9b840426309bd710fc3f94c5bb2aaad8a54f->leave($__internal_658422b568808b1599afa71ffb9b9b840426309bd710fc3f94c5bb2aaad8a54f_prof);

        
        $__internal_fcc7f1d781fd13cddae59e6f12bdba30fa52b511a1b334979100ff4647151be3->leave($__internal_fcc7f1d781fd13cddae59e6f12bdba30fa52b511a1b334979100ff4647151be3_prof);

    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        $__internal_98e90114c062acc4c2533e3a44b882ab289edabef843fede17986cbf8dbc927f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_98e90114c062acc4c2533e3a44b882ab289edabef843fede17986cbf8dbc927f->enter($__internal_98e90114c062acc4c2533e3a44b882ab289edabef843fede17986cbf8dbc927f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_6e394f0f5ee217c36b5fc3738093ee55f06073af65eba131b5eaad7b86bd82ae = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6e394f0f5ee217c36b5fc3738093ee55f06073af65eba131b5eaad7b86bd82ae->enter($__internal_6e394f0f5ee217c36b5fc3738093ee55f06073af65eba131b5eaad7b86bd82ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 10
        echo "Crear tarea
";
        
        $__internal_6e394f0f5ee217c36b5fc3738093ee55f06073af65eba131b5eaad7b86bd82ae->leave($__internal_6e394f0f5ee217c36b5fc3738093ee55f06073af65eba131b5eaad7b86bd82ae_prof);

        
        $__internal_98e90114c062acc4c2533e3a44b882ab289edabef843fede17986cbf8dbc927f->leave($__internal_98e90114c062acc4c2533e3a44b882ab289edabef843fede17986cbf8dbc927f_prof);

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

{% block body %}
    {{ form_start(form) }}
    {{ form_widget(form) }}
    {{ form_end(form) }}
{% endblock %}

{% block title %}
Crear tarea
{% endblock %}

", "task/new.html.twig", "/home/daniel/Desktop/todo/templates/task/new.html.twig");
    }
}
