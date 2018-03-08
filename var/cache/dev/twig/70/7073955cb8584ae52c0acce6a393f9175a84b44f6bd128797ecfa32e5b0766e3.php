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
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8c5da8dcad9a97af9f17f45c114f95e1cddbfab8243e38d85b986315152eb4cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c5da8dcad9a97af9f17f45c114f95e1cddbfab8243e38d85b986315152eb4cc->enter($__internal_8c5da8dcad9a97af9f17f45c114f95e1cddbfab8243e38d85b986315152eb4cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $__internal_90aba70118bb1ade3e4b6161328dc80656a2d5d01dccbf1509593d517a19082f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90aba70118bb1ade3e4b6161328dc80656a2d5d01dccbf1509593d517a19082f->enter($__internal_90aba70118bb1ade3e4b6161328dc80656a2d5d01dccbf1509593d517a19082f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "task/index.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8c5da8dcad9a97af9f17f45c114f95e1cddbfab8243e38d85b986315152eb4cc->leave($__internal_8c5da8dcad9a97af9f17f45c114f95e1cddbfab8243e38d85b986315152eb4cc_prof);

        
        $__internal_90aba70118bb1ade3e4b6161328dc80656a2d5d01dccbf1509593d517a19082f->leave($__internal_90aba70118bb1ade3e4b6161328dc80656a2d5d01dccbf1509593d517a19082f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_6679061deef3d4d1cc498836edfecf38d0129e8eb08d55a4743d012b3872de55 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6679061deef3d4d1cc498836edfecf38d0129e8eb08d55a4743d012b3872de55->enter($__internal_6679061deef3d4d1cc498836edfecf38d0129e8eb08d55a4743d012b3872de55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_075c44ce971360b1b3ec41a16f091a1824ad9cf11669dc6da9c31c918703da6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_075c44ce971360b1b3ec41a16f091a1824ad9cf11669dc6da9c31c918703da6c->enter($__internal_075c44ce971360b1b3ec41a16f091a1824ad9cf11669dc6da9c31c918703da6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ";
        echo twig_escape_filter($this->env, (isset($context["controller_name"]) || array_key_exists("controller_name", $context) ? $context["controller_name"] : (function () { throw new Twig_Error_Runtime('Variable "controller_name" does not exist.', 3, $this->getSourceContext()); })()), "html", null, true);
        echo "!";
        
        $__internal_075c44ce971360b1b3ec41a16f091a1824ad9cf11669dc6da9c31c918703da6c->leave($__internal_075c44ce971360b1b3ec41a16f091a1824ad9cf11669dc6da9c31c918703da6c_prof);

        
        $__internal_6679061deef3d4d1cc498836edfecf38d0129e8eb08d55a4743d012b3872de55->leave($__internal_6679061deef3d4d1cc498836edfecf38d0129e8eb08d55a4743d012b3872de55_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_c6f32ae3b3a294135c1479eba12ebb37d781b1396b1c2222d153e1c351ed2a9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c6f32ae3b3a294135c1479eba12ebb37d781b1396b1c2222d153e1c351ed2a9d->enter($__internal_c6f32ae3b3a294135c1479eba12ebb37d781b1396b1c2222d153e1c351ed2a9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_0a0226718892056a82e66b664178a0883b29513aa83186610c63f0ee550bdacf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a0226718892056a82e66b664178a0883b29513aa83186610c63f0ee550bdacf->enter($__internal_0a0226718892056a82e66b664178a0883b29513aa83186610c63f0ee550bdacf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_0a0226718892056a82e66b664178a0883b29513aa83186610c63f0ee550bdacf->leave($__internal_0a0226718892056a82e66b664178a0883b29513aa83186610c63f0ee550bdacf_prof);

        
        $__internal_c6f32ae3b3a294135c1479eba12ebb37d781b1396b1c2222d153e1c351ed2a9d->leave($__internal_c6f32ae3b3a294135c1479eba12ebb37d781b1396b1c2222d153e1c351ed2a9d_prof);

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

{% block body %}

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
", "task/index.html.twig", "/home/daniel/Desktop/todo/templates/task/index.html.twig");
    }
}
