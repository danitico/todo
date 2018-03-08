<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_e0f02a76a09bfe4bf2cf92c20cf699909424920e26d9a9d6d430c521b504bdab extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f5cf9677d0cc39f648fe2aeb4745e8994a06457e0c6be0bcace6bfab63ca73fb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5cf9677d0cc39f648fe2aeb4745e8994a06457e0c6be0bcace6bfab63ca73fb->enter($__internal_f5cf9677d0cc39f648fe2aeb4745e8994a06457e0c6be0bcace6bfab63ca73fb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_767bee744a9de9b385aea2f3cc74cd54bc4a257d64ff9610b9a27b4e10fae91c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_767bee744a9de9b385aea2f3cc74cd54bc4a257d64ff9610b9a27b4e10fae91c->enter($__internal_767bee744a9de9b385aea2f3cc74cd54bc4a257d64ff9610b9a27b4e10fae91c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_f5cf9677d0cc39f648fe2aeb4745e8994a06457e0c6be0bcace6bfab63ca73fb->leave($__internal_f5cf9677d0cc39f648fe2aeb4745e8994a06457e0c6be0bcace6bfab63ca73fb_prof);

        
        $__internal_767bee744a9de9b385aea2f3cc74cd54bc4a257d64ff9610b9a27b4e10fae91c->leave($__internal_767bee744a9de9b385aea2f3cc74cd54bc4a257d64ff9610b9a27b4e10fae91c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_c87bf15b93b84f95fdc43d42ac0e69b2b3571f280cb709547ce4c3e0b80f376f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c87bf15b93b84f95fdc43d42ac0e69b2b3571f280cb709547ce4c3e0b80f376f->enter($__internal_c87bf15b93b84f95fdc43d42ac0e69b2b3571f280cb709547ce4c3e0b80f376f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2a8e4f16e8d72b3db2c405bd46812d954ece5dcde6ce87e329f5d45d7e10d0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2a8e4f16e8d72b3db2c405bd46812d954ece5dcde6ce87e329f5d45d7e10d0d->enter($__internal_d2a8e4f16e8d72b3db2c405bd46812d954ece5dcde6ce87e329f5d45d7e10d0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d2a8e4f16e8d72b3db2c405bd46812d954ece5dcde6ce87e329f5d45d7e10d0d->leave($__internal_d2a8e4f16e8d72b3db2c405bd46812d954ece5dcde6ce87e329f5d45d7e10d0d_prof);

        
        $__internal_c87bf15b93b84f95fdc43d42ac0e69b2b3571f280cb709547ce4c3e0b80f376f->leave($__internal_c87bf15b93b84f95fdc43d42ac0e69b2b3571f280cb709547ce4c3e0b80f376f_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_29a9c5ebc62e59426a85a5410de1761f1418c78cb33f2e6f6624b118b3875643 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_29a9c5ebc62e59426a85a5410de1761f1418c78cb33f2e6f6624b118b3875643->enter($__internal_29a9c5ebc62e59426a85a5410de1761f1418c78cb33f2e6f6624b118b3875643_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_491c789705a9da6957bdcc1c9b7f56231259841381d7a3df23ccbf993f877347 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_491c789705a9da6957bdcc1c9b7f56231259841381d7a3df23ccbf993f877347->enter($__internal_491c789705a9da6957bdcc1c9b7f56231259841381d7a3df23ccbf993f877347_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_491c789705a9da6957bdcc1c9b7f56231259841381d7a3df23ccbf993f877347->leave($__internal_491c789705a9da6957bdcc1c9b7f56231259841381d7a3df23ccbf993f877347_prof);

        
        $__internal_29a9c5ebc62e59426a85a5410de1761f1418c78cb33f2e6f6624b118b3875643->leave($__internal_29a9c5ebc62e59426a85a5410de1761f1418c78cb33f2e6f6624b118b3875643_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_b78f44035b9fbd68f83aa158ec52863917525aa0de961eff2d008b68e73d5924 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b78f44035b9fbd68f83aa158ec52863917525aa0de961eff2d008b68e73d5924->enter($__internal_b78f44035b9fbd68f83aa158ec52863917525aa0de961eff2d008b68e73d5924_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_61665d56e0464ea2615be604d53291f9f32f733a7851052dd8653ee3efb056fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61665d56e0464ea2615be604d53291f9f32f733a7851052dd8653ee3efb056fe->enter($__internal_61665d56e0464ea2615be604d53291f9f32f733a7851052dd8653ee3efb056fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_61665d56e0464ea2615be604d53291f9f32f733a7851052dd8653ee3efb056fe->leave($__internal_61665d56e0464ea2615be604d53291f9f32f733a7851052dd8653ee3efb056fe_prof);

        
        $__internal_b78f44035b9fbd68f83aa158ec52863917525aa0de961eff2d008b68e73d5924->leave($__internal_b78f44035b9fbd68f83aa158ec52863917525aa0de961eff2d008b68e73d5924_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "/home/daniel/Desktop/todo/vendor/symfony/twig-bundle/Resources/views/layout.html.twig");
    }
}
