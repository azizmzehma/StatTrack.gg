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

/* main/index.html.twig */
class __TwigTemplate_f370706b455269696df4f8b56a2464be extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "main/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "main/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Match table!";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "<div class=\"container\">
<h1> Match TAble:  </h1>
 ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 8, $this->source); })()), "flashes", [0 => "notice"], "method", false, false, false, 8));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 9
            echo "        <div class=\"alert alert-success mt-4 mb-b\">
            ";
            // line 10
            echo twig_escape_filter($this->env, $context["message"], "html", null, true);
            echo "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 13
        echo "    <div class=\"create botton\">
     <a class=\"btn btn-warning mt-4 mb-b\" href=\"";
        // line 14
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("create");
        echo "\">create match</a> 
    </div>
    <table class=\"table\">
  <thead>
    <tr class=\"table-active\">    
      <th scope=\"col\">#</th>
      <th scope=\"col\">team1name</th>
      <th scope=\"col\">team2name</th>
      <th scope=\"col\">matchWiner</th>
      <th scope=\"col\">Gamerplayed</th>
      <th scope=\"col\">match time</th>
      <th scope=\"col\">Action</th>
    </tr>
  </thead>
  <tbody>
  ";
        // line 29
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["matchlist"]) || array_key_exists("matchlist", $context) ? $context["matchlist"] : (function () { throw new RuntimeError('Variable "matchlist" does not exist.', 29, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["data"]) {
            // line 30
            echo "    <tr class=\"table-";
            if ((twig_get_attribute($this->env, $this->source, $context["data"], "matchtime", [], "any", false, false, false, 30) < twig_date_converter($this->env))) {
                echo "danger ";
            } else {
                echo "warning";
            }
            echo "\">
      <th scope=\"row\">";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 31), "html", null, true);
            echo " </th>
      <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "team1name", [], "any", false, false, false, 32)), "html", null, true);
            echo "</td>
      <td>";
            // line 33
            echo twig_escape_filter($this->env, twig_upper_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "team2name", [], "any", false, false, false, 33)), "html", null, true);
            echo "</td>
      <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "teamwiner", [], "any", false, false, false, 34), "html", null, true);
            echo "</td>
      <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "game", [], "any", false, false, false, 35), "html", null, true);
            echo "</td>
        <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["data"], "matchtime", [], "any", false, false, false, 36), "Y-m-d H:i:s"), "html", null, true);
            echo "</td>
       <td>
        <a class=\"btn btn-warning\" href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("update", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 38)]), "html", null, true);
            echo "\">update</a>
        <a class=\"btn btn-danger\" href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("delete", ["id" => twig_get_attribute($this->env, $this->source, $context["data"], "id", [], "any", false, false, false, 39)]), "html", null, true);
            echo "\">delete</a>
        </td>
    </tr>
    ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 43
            echo "    <h3 style=\"color:Green;\">there is no match!!!!!</h3>

    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['data'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "  </tbody>
</table>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "main/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  189 => 46,  181 => 43,  172 => 39,  168 => 38,  163 => 36,  159 => 35,  155 => 34,  151 => 33,  147 => 32,  143 => 31,  134 => 30,  129 => 29,  111 => 14,  108 => 13,  99 => 10,  96 => 9,  92 => 8,  88 => 6,  78 => 5,  59 => 3,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Match table!{% endblock %}

{% block body %}
<div class=\"container\">
<h1> Match TAble:  </h1>
 {% for message in app.flashes('notice') %}
        <div class=\"alert alert-success mt-4 mb-b\">
            {{message}}
        </div>
    {% endfor %}
    <div class=\"create botton\">
     <a class=\"btn btn-warning mt-4 mb-b\" href=\"{{ path('create') }}\">create match</a> 
    </div>
    <table class=\"table\">
  <thead>
    <tr class=\"table-active\">    
      <th scope=\"col\">#</th>
      <th scope=\"col\">team1name</th>
      <th scope=\"col\">team2name</th>
      <th scope=\"col\">matchWiner</th>
      <th scope=\"col\">Gamerplayed</th>
      <th scope=\"col\">match time</th>
      <th scope=\"col\">Action</th>
    </tr>
  </thead>
  <tbody>
  {% for data in matchlist %}
    <tr class=\"table-{% if data.matchtime < date() %}danger {% else %}warning{% endif %}\">
      <th scope=\"row\">{{data.id}} </th>
      <td>{{data.team1name|upper}}</td>
      <td>{{data.team2name|upper}}</td>
      <td>{{data.teamwiner}}</td>
      <td>{{data.game}}</td>
        <td>{{ data.matchtime|date(\"Y-m-d H:i:s\") }}</td>
       <td>
        <a class=\"btn btn-warning\" href=\"{{ path('update',{'id': data.id }) }}\">update</a>
        <a class=\"btn btn-danger\" href=\"{{ path('delete',{'id': data.id }) }}\">delete</a>
        </td>
    </tr>
    {% else %}
    <h3 style=\"color:Green;\">there is no match!!!!!</h3>

    {% endfor %}
  </tbody>
</table>
</div>
{% endblock %}
", "main/index.html.twig", "C:\\xampp\\htdocs\\Symfonyproject\\StatTrack\\templates\\main\\index.html.twig");
    }
}
