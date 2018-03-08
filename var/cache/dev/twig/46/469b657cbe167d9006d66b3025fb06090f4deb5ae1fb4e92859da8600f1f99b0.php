<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_8f76a2c88853cdbd49954b6be8e274748c3d0611cb094178c13a1c06d207d3b6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_beae6a0fd6b339be1598633a820ddee6d63b1b90b90e0b4ddb3a6abc3576974f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_beae6a0fd6b339be1598633a820ddee6d63b1b90b90e0b4ddb3a6abc3576974f->enter($__internal_beae6a0fd6b339be1598633a820ddee6d63b1b90b90e0b4ddb3a6abc3576974f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_a312310dd44428db94d192fff5fd1ff347fb5c16bea453569928410c34c54604 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a312310dd44428db94d192fff5fd1ff347fb5c16bea453569928410c34c54604->enter($__internal_a312310dd44428db94d192fff5fd1ff347fb5c16bea453569928410c34c54604_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_beae6a0fd6b339be1598633a820ddee6d63b1b90b90e0b4ddb3a6abc3576974f->leave($__internal_beae6a0fd6b339be1598633a820ddee6d63b1b90b90e0b4ddb3a6abc3576974f_prof);

        
        $__internal_a312310dd44428db94d192fff5fd1ff347fb5c16bea453569928410c34c54604->leave($__internal_a312310dd44428db94d192fff5fd1ff347fb5c16bea453569928410c34c54604_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "/home/daniel/Desktop/todo/vendor/symfony/web-profiler-bundle/Resources/views/Profiler/header.html.twig");
    }
}
