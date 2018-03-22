<?php

/* task/index.html.twig */
class __TwigTemplate_e8a4e9972b98045e0f1dbd3df2d75fc337d89f495ccfb995686995b91cf1ec29 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "task/index.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c0636526a83e894ea6a388e2df2f44d0b1026c6394ac0b2bd5afeed86d79e08c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0636526a83e894ea6a388e2df2f44d0b1026c6394ac0b2bd5afeed86d79e08c->enter($__internal_c0636526a83e894ea6a388e2df2f44d0b1026c6394ac0b2bd5afeed86d79e08c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_812d99d516e4aa8f56564ac18c1a16b2b9db9db270dfe8a270c476d7db948851 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_812d99d516e4aa8f56564ac18c1a16b2b9db9db270dfe8a270c476d7db948851->enter($__internal_812d99d516e4aa8f56564ac18c1a16b2b9db9db270dfe8a270c476d7db948851_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c0636526a83e894ea6a388e2df2f44d0b1026c6394ac0b2bd5afeed86d79e08c->leave($__internal_c0636526a83e894ea6a388e2df2f44d0b1026c6394ac0b2bd5afeed86d79e08c_prof);

        
        $__internal_812d99d516e4aa8f56564ac18c1a16b2b9db9db270dfe8a270c476d7db948851->leave($__internal_812d99d516e4aa8f56564ac18c1a16b2b9db9db270dfe8a270c476d7db948851_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_90130240723afb91d46d2ca4833e3f711d40feada3fae23a4f5f29dc673e2413 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_90130240723afb91d46d2ca4833e3f711d40feada3fae23a4f5f29dc673e2413->enter($__internal_90130240723afb91d46d2ca4833e3f711d40feada3fae23a4f5f29dc673e2413_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_15bbb4452767ec24eff0cb67bc190471bebcc1a3987f5bff796d6a7e09a301f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15bbb4452767ec24eff0cb67bc190471bebcc1a3987f5bff796d6a7e09a301f1->enter($__internal_15bbb4452767ec24eff0cb67bc190471bebcc1a3987f5bff796d6a7e09a301f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new Twig_Error_Runtime('Variable "controller_name" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "!";
        
        $__internal_15bbb4452767ec24eff0cb67bc190471bebcc1a3987f5bff796d6a7e09a301f1->leave($__internal_15bbb4452767ec24eff0cb67bc190471bebcc1a3987f5bff796d6a7e09a301f1_prof);

        
        $__internal_90130240723afb91d46d2ca4833e3f711d40feada3fae23a4f5f29dc673e2413->leave($__internal_90130240723afb91d46d2ca4833e3f711d40feada3fae23a4f5f29dc673e2413_prof);

    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        $__internal_a25474e5ab33a4870a28f819784f93b9a5b3a22a8cb0189bdb3cd3f2946a6094 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a25474e5ab33a4870a28f819784f93b9a5b3a22a8cb0189bdb3cd3f2946a6094->enter($__internal_a25474e5ab33a4870a28f819784f93b9a5b3a22a8cb0189bdb3cd3f2946a6094_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9abe92ea9f8aca01c12624685d1199fb8f8a3d876f2eb2fb5edd6b77cf4b8470 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9abe92ea9f8aca01c12624685d1199fb8f8a3d876f2eb2fb5edd6b77cf4b8470->enter($__internal_9abe92ea9f8aca01c12624685d1199fb8f8a3d876f2eb2fb5edd6b77cf4b8470_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 6
        echo "
    <table class=\"ui celled table\">
        <thead>
        <tr>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Terminado</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) || array_key_exists("tasks", $context) ? $context["tasks"] : (function () { throw new Twig_Error_Runtime('Variable "tasks" does not exist.', 17, $this->getSourceContext()); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 18
            echo "        <tr>
            <td>";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "description", array()), "html", null, true);
            echo "</td>
            <td>";
            // line 20
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "createdAt", array())), "html", null, true);
            echo "</td>
            <td>";
            // line 21
            echo ((twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "done", array())) ? ("Sí") : ("No"));
            echo "</td>
            <td><a href=\"";
            // line 22
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_edit", array("id" => twig_get_attribute($this->env, $this->getSourceContext(), $context["task"], "id", array()))), "html", null, true);
            echo "\" class=\"ui button\">Editar</a></td>
        </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "        </tbody>
        <tfoot>
        <tr>
            <th>
                <a href=\"";
        // line 29
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("task_new");
        echo "\" class=\"ui button\">Crear tarea</a>
            </th>
        </tr>
        </tfoot>
        
    </table>


";
        
        $__internal_9abe92ea9f8aca01c12624685d1199fb8f8a3d876f2eb2fb5edd6b77cf4b8470->leave($__internal_9abe92ea9f8aca01c12624685d1199fb8f8a3d876f2eb2fb5edd6b77cf4b8470_prof);

        
        $__internal_a25474e5ab33a4870a28f819784f93b9a5b3a22a8cb0189bdb3cd3f2946a6094->leave($__internal_a25474e5ab33a4870a28f819784f93b9a5b3a22a8cb0189bdb3cd3f2946a6094_prof);

    }

    public function getTemplateName()
    {
        return "task/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 29,  111 => 25,  102 => 22,  98 => 21,  94 => 20,  90 => 19,  87 => 18,  83 => 17,  70 => 6,  61 => 5,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block title %}Hello {{ controller_name }}!{% endblock %}

{% block content %}

    <table class=\"ui celled table\">
        <thead>
        <tr>
            <th>Descripción</th>
            <th>Fecha</th>
            <th>Terminado</th>
            <th>Acciones</th>
        </tr>
        </thead>
        <tbody>
        {% for task in tasks %}
        <tr>
            <td>{{ task.description }}</td>
            <td>{{ task.createdAt | date }}</td>
            <td>{{ task.done ? 'Sí' : 'No' }}</td>
            <td><a href=\"{{ path('task_edit', { id: task.id }) }}\" class=\"ui button\">Editar</a></td>
        </tr>
        {% endfor %}
        </tbody>
        <tfoot>
        <tr>
            <th>
                <a href=\"{{ path('task_new') }}\" class=\"ui button\">Crear tarea</a>
            </th>
        </tr>
        </tfoot>
        
    </table>


{% endblock %}
", "task/index.html.twig", "/home/daniel/Desktop/SEGUNDO_CARRERA/todo/templates/task/index.html.twig");
    }
}
