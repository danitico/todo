<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_96d2e6e52be9e163f80a3694840aeea9d7b50a8dbb848b35db9887a911267a7c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2926c4418d2b0ad5167b05a2961c98019ec4a0dd84a9bb058b168c404b63426f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2926c4418d2b0ad5167b05a2961c98019ec4a0dd84a9bb058b168c404b63426f->enter($__internal_2926c4418d2b0ad5167b05a2961c98019ec4a0dd84a9bb058b168c404b63426f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_79a81cae30abd97f99fda2364e5456c0a2629393f8e7fd5d9d7058fb9fe2f7a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79a81cae30abd97f99fda2364e5456c0a2629393f8e7fd5d9d7058fb9fe2f7a1->enter($__internal_79a81cae30abd97f99fda2364e5456c0a2629393f8e7fd5d9d7058fb9fe2f7a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2926c4418d2b0ad5167b05a2961c98019ec4a0dd84a9bb058b168c404b63426f->leave($__internal_2926c4418d2b0ad5167b05a2961c98019ec4a0dd84a9bb058b168c404b63426f_prof);

        
        $__internal_79a81cae30abd97f99fda2364e5456c0a2629393f8e7fd5d9d7058fb9fe2f7a1->leave($__internal_79a81cae30abd97f99fda2364e5456c0a2629393f8e7fd5d9d7058fb9fe2f7a1_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_a47980a8ef38efd15a813cfb0dbe78d5a0b286f418de42ba703a96eb1c0bcf4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a47980a8ef38efd15a813cfb0dbe78d5a0b286f418de42ba703a96eb1c0bcf4a->enter($__internal_a47980a8ef38efd15a813cfb0dbe78d5a0b286f418de42ba703a96eb1c0bcf4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_309aa9173c1d531aaf3b82d3a0e10a77d90ac125f3514db4f815823ee180864f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_309aa9173c1d531aaf3b82d3a0e10a77d90ac125f3514db4f815823ee180864f->enter($__internal_309aa9173c1d531aaf3b82d3a0e10a77d90ac125f3514db4f815823ee180864f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_309aa9173c1d531aaf3b82d3a0e10a77d90ac125f3514db4f815823ee180864f->leave($__internal_309aa9173c1d531aaf3b82d3a0e10a77d90ac125f3514db4f815823ee180864f_prof);

        
        $__internal_a47980a8ef38efd15a813cfb0dbe78d5a0b286f418de42ba703a96eb1c0bcf4a->leave($__internal_a47980a8ef38efd15a813cfb0dbe78d5a0b286f418de42ba703a96eb1c0bcf4a_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_576e150541706fb6ee976a7ed5c1ff27c382bae65f314bc0eba8a0d0f08acfab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_576e150541706fb6ee976a7ed5c1ff27c382bae65f314bc0eba8a0d0f08acfab->enter($__internal_576e150541706fb6ee976a7ed5c1ff27c382bae65f314bc0eba8a0d0f08acfab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_9c02d323048903ea087e417c41ac53fec85cd71f5d21fefeb42a5ad23a8b9bc4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9c02d323048903ea087e417c41ac53fec85cd71f5d21fefeb42a5ad23a8b9bc4->enter($__internal_9c02d323048903ea087e417c41ac53fec85cd71f5d21fefeb42a5ad23a8b9bc4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_9c02d323048903ea087e417c41ac53fec85cd71f5d21fefeb42a5ad23a8b9bc4->leave($__internal_9c02d323048903ea087e417c41ac53fec85cd71f5d21fefeb42a5ad23a8b9bc4_prof);

        
        $__internal_576e150541706fb6ee976a7ed5c1ff27c382bae65f314bc0eba8a0d0f08acfab->leave($__internal_576e150541706fb6ee976a7ed5c1ff27c382bae65f314bc0eba8a0d0f08acfab_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_ac512509500b56c1fd9248437f15fc2a954ec6fa8b5f232447118ecab9c30fdb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac512509500b56c1fd9248437f15fc2a954ec6fa8b5f232447118ecab9c30fdb->enter($__internal_ac512509500b56c1fd9248437f15fc2a954ec6fa8b5f232447118ecab9c30fdb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_67c6ef753acc6c1166cf6027fac6d8e6805868edec42c760827590328df5dfee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67c6ef753acc6c1166cf6027fac6d8e6805868edec42c760827590328df5dfee->enter($__internal_67c6ef753acc6c1166cf6027fac6d8e6805868edec42c760827590328df5dfee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_67c6ef753acc6c1166cf6027fac6d8e6805868edec42c760827590328df5dfee->leave($__internal_67c6ef753acc6c1166cf6027fac6d8e6805868edec42c760827590328df5dfee_prof);

        
        $__internal_ac512509500b56c1fd9248437f15fc2a954ec6fa8b5f232447118ecab9c30fdb->leave($__internal_ac512509500b56c1fd9248437f15fc2a954ec6fa8b5f232447118ecab9c30fdb_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "/home/daniel/Desktop/todo/vendor/symfony/twig-bundle/Resources/views/Exception/exception_full.html.twig");
    }
}
