<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_8c4522326ccca99d74112ce7d1e69da4e06fe81a47f51d8e608e4cb9709faf8d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_119ed6201d3fb23cb5db4d890ee59fee6b34d5ad8af9126f970f36b750b4295f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_119ed6201d3fb23cb5db4d890ee59fee6b34d5ad8af9126f970f36b750b4295f->enter($__internal_119ed6201d3fb23cb5db4d890ee59fee6b34d5ad8af9126f970f36b750b4295f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_11d6518654bef01b02330f173a084c12518ca816e82185a52ae577108a47920c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11d6518654bef01b02330f173a084c12518ca816e82185a52ae577108a47920c->enter($__internal_11d6518654bef01b02330f173a084c12518ca816e82185a52ae577108a47920c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_119ed6201d3fb23cb5db4d890ee59fee6b34d5ad8af9126f970f36b750b4295f->leave($__internal_119ed6201d3fb23cb5db4d890ee59fee6b34d5ad8af9126f970f36b750b4295f_prof);

        
        $__internal_11d6518654bef01b02330f173a084c12518ca816e82185a52ae577108a47920c->leave($__internal_11d6518654bef01b02330f173a084c12518ca816e82185a52ae577108a47920c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_786f3b199734ccd5f6b7959c100c349cb1a3fc3ecbd17cac7a1fc61d23207db1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_786f3b199734ccd5f6b7959c100c349cb1a3fc3ecbd17cac7a1fc61d23207db1->enter($__internal_786f3b199734ccd5f6b7959c100c349cb1a3fc3ecbd17cac7a1fc61d23207db1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_9fc0e7aeff726f15fa3fd444c198076fdfd0570f0487221e2a854699733eee68 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9fc0e7aeff726f15fa3fd444c198076fdfd0570f0487221e2a854699733eee68->enter($__internal_9fc0e7aeff726f15fa3fd444c198076fdfd0570f0487221e2a854699733eee68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_9fc0e7aeff726f15fa3fd444c198076fdfd0570f0487221e2a854699733eee68->leave($__internal_9fc0e7aeff726f15fa3fd444c198076fdfd0570f0487221e2a854699733eee68_prof);

        
        $__internal_786f3b199734ccd5f6b7959c100c349cb1a3fc3ecbd17cac7a1fc61d23207db1->leave($__internal_786f3b199734ccd5f6b7959c100c349cb1a3fc3ecbd17cac7a1fc61d23207db1_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "/home/daniel/Desktop/todo/vendor/symfony/web-profiler-bundle/Resources/views/Collector/ajax.html.twig");
    }
}
