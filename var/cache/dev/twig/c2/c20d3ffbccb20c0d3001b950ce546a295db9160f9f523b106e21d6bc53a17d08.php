<?php

/* base.html.twig */
class __TwigTemplate_7131e8cc1616b114a4c8b1ca94d59192c38d0ddc533142ef9506fadcd143ba7a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_6c5bf1e5c8d1523a14daaf9e6a9b8f9c3add6d57740c921f69d43881bc9efd3d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c5bf1e5c8d1523a14daaf9e6a9b8f9c3add6d57740c921f69d43881bc9efd3d->enter($__internal_6c5bf1e5c8d1523a14daaf9e6a9b8f9c3add6d57740c921f69d43881bc9efd3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_ee4ed1480e46ca942593d0f051107821677a3d324a8774307f8e8bb60b8c75a2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ee4ed1480e46ca942593d0f051107821677a3d324a8774307f8e8bb60b8c75a2->enter($__internal_ee4ed1480e46ca942593d0f051107821677a3d324a8774307f8e8bb60b8c75a2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
    ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 9
        echo "</head>
<body>
";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "flashes", array()));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 13
            echo "    <div class=\"ui ";
            echo twig_escape_filter($this->env, $context["label"], "html", null, true);
            echo " message\">
        <ul class=\"list\">
            ";
            // line 15
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 16
                echo "                <li>";
                echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 18
            echo "        </ul>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['label'], $context['messages'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "
";
        // line 22
        $this->displayBlock('body', $context, $blocks);
        // line 23
        $this->displayBlock('javascripts', $context, $blocks);
        // line 27
        echo "</body>
</html>";
        
        $__internal_6c5bf1e5c8d1523a14daaf9e6a9b8f9c3add6d57740c921f69d43881bc9efd3d->leave($__internal_6c5bf1e5c8d1523a14daaf9e6a9b8f9c3add6d57740c921f69d43881bc9efd3d_prof);

        
        $__internal_ee4ed1480e46ca942593d0f051107821677a3d324a8774307f8e8bb60b8c75a2->leave($__internal_ee4ed1480e46ca942593d0f051107821677a3d324a8774307f8e8bb60b8c75a2_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_07eea4a8fdf0fa186a2e8fd46076f833332e14cb3df915ea33b8f8defa74176e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07eea4a8fdf0fa186a2e8fd46076f833332e14cb3df915ea33b8f8defa74176e->enter($__internal_07eea4a8fdf0fa186a2e8fd46076f833332e14cb3df915ea33b8f8defa74176e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b01e04bb14997d745b94659aee8a864fb137bc25db5f45c41bde3ab627833bb9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b01e04bb14997d745b94659aee8a864fb137bc25db5f45c41bde3ab627833bb9->enter($__internal_b01e04bb14997d745b94659aee8a864fb137bc25db5f45c41bde3ab627833bb9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Welcome!";
        
        $__internal_b01e04bb14997d745b94659aee8a864fb137bc25db5f45c41bde3ab627833bb9->leave($__internal_b01e04bb14997d745b94659aee8a864fb137bc25db5f45c41bde3ab627833bb9_prof);

        
        $__internal_07eea4a8fdf0fa186a2e8fd46076f833332e14cb3df915ea33b8f8defa74176e->leave($__internal_07eea4a8fdf0fa186a2e8fd46076f833332e14cb3df915ea33b8f8defa74176e_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_08cbe8049e271acbf90657b8aa6b497b4ccf583a2eecb333bd7f1843211db7c2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08cbe8049e271acbf90657b8aa6b497b4ccf583a2eecb333bd7f1843211db7c2->enter($__internal_08cbe8049e271acbf90657b8aa6b497b4ccf583a2eecb333bd7f1843211db7c2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6d4a1a7c54a7c4f80a122fe4831b9201db7c82f668e3a1a7d4b55bca0c4ccce8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6d4a1a7c54a7c4f80a122fe4831b9201db7c82f668e3a1a7d4b55bca0c4ccce8->enter($__internal_6d4a1a7c54a7c4f80a122fe4831b9201db7c82f668e3a1a7d4b55bca0c4ccce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 7
        echo "        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css\"/>
    ";
        
        $__internal_6d4a1a7c54a7c4f80a122fe4831b9201db7c82f668e3a1a7d4b55bca0c4ccce8->leave($__internal_6d4a1a7c54a7c4f80a122fe4831b9201db7c82f668e3a1a7d4b55bca0c4ccce8_prof);

        
        $__internal_08cbe8049e271acbf90657b8aa6b497b4ccf583a2eecb333bd7f1843211db7c2->leave($__internal_08cbe8049e271acbf90657b8aa6b497b4ccf583a2eecb333bd7f1843211db7c2_prof);

    }

    // line 22
    public function block_body($context, array $blocks = array())
    {
        $__internal_6a936bba7e39edc7a046fe980ceb73e5f2805476d3fdb25377d16c5d6d51cbf7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a936bba7e39edc7a046fe980ceb73e5f2805476d3fdb25377d16c5d6d51cbf7->enter($__internal_6a936bba7e39edc7a046fe980ceb73e5f2805476d3fdb25377d16c5d6d51cbf7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_bd2ec360daa638351006d3b9067954c358c7f12dbb675edbe78ccd382fe7d525 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd2ec360daa638351006d3b9067954c358c7f12dbb675edbe78ccd382fe7d525->enter($__internal_bd2ec360daa638351006d3b9067954c358c7f12dbb675edbe78ccd382fe7d525_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_bd2ec360daa638351006d3b9067954c358c7f12dbb675edbe78ccd382fe7d525->leave($__internal_bd2ec360daa638351006d3b9067954c358c7f12dbb675edbe78ccd382fe7d525_prof);

        
        $__internal_6a936bba7e39edc7a046fe980ceb73e5f2805476d3fdb25377d16c5d6d51cbf7->leave($__internal_6a936bba7e39edc7a046fe980ceb73e5f2805476d3fdb25377d16c5d6d51cbf7_prof);

    }

    // line 23
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d10ceb5002ffc4d19044f6cf0e80c69577e7a82eb0dc97a40996e92a28a4d959 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d10ceb5002ffc4d19044f6cf0e80c69577e7a82eb0dc97a40996e92a28a4d959->enter($__internal_d10ceb5002ffc4d19044f6cf0e80c69577e7a82eb0dc97a40996e92a28a4d959_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_cc923c76772774c156e9dc2bc725b6f3e876d1a2fe1241fbf48554bc2a236748 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc923c76772774c156e9dc2bc725b6f3e876d1a2fe1241fbf48554bc2a236748->enter($__internal_cc923c76772774c156e9dc2bc725b6f3e876d1a2fe1241fbf48554bc2a236748_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 24
        echo "    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.js\"></script>
";
        
        $__internal_cc923c76772774c156e9dc2bc725b6f3e876d1a2fe1241fbf48554bc2a236748->leave($__internal_cc923c76772774c156e9dc2bc725b6f3e876d1a2fe1241fbf48554bc2a236748_prof);

        
        $__internal_d10ceb5002ffc4d19044f6cf0e80c69577e7a82eb0dc97a40996e92a28a4d959->leave($__internal_d10ceb5002ffc4d19044f6cf0e80c69577e7a82eb0dc97a40996e92a28a4d959_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  158 => 24,  149 => 23,  132 => 22,  121 => 7,  112 => 6,  94 => 5,  83 => 27,  81 => 23,  79 => 22,  76 => 21,  68 => 18,  59 => 16,  55 => 15,  49 => 13,  45 => 12,  41 => 9,  39 => 6,  35 => 5,  29 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
<head>
    <meta charset=\"UTF-8\">
    <title>{% block title %}Welcome!{% endblock %}</title>
    {% block stylesheets %}
        <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.css\"/>
    {% endblock %}
</head>
<body>
{# you can read and display just one flash message type... #}
{% for label, messages in app.flashes %}
    <div class=\"ui {{ label }} message\">
        <ul class=\"list\">
            {% for message in messages %}
                <li>{{ message }}</li>
            {% endfor %}
        </ul>
    </div>
{% endfor %}

{% block body %}{% endblock %}
{% block javascripts %}
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js\"></script>
    <script src=\"https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.0/semantic.min.js\"></script>
{% endblock %}
</body>
</html>", "base.html.twig", "/home/daniel/Desktop/todo/templates/base.html.twig");
    }
}
