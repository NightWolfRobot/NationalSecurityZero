<?php

/* ForumBundle:Topic:topic.html.twig */
class __TwigTemplate_55d8cd40012868d628e8289bcfe31409f6b9c0dd186b3751fe2677297da9c2dc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "ForumBundle:Topic:topic.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9daa2dd90d5716f06c0c87d3f00e73d6a7b6e282c8bf297a33df423aa69a777 = $this->env->getExtension("native_profiler");
        $__internal_a9daa2dd90d5716f06c0c87d3f00e73d6a7b6e282c8bf297a33df423aa69a777->enter($__internal_a9daa2dd90d5716f06c0c87d3f00e73d6a7b6e282c8bf297a33df423aa69a777_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "ForumBundle:Topic:topic.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9daa2dd90d5716f06c0c87d3f00e73d6a7b6e282c8bf297a33df423aa69a777->leave($__internal_a9daa2dd90d5716f06c0c87d3f00e73d6a7b6e282c8bf297a33df423aa69a777_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_356ad8ebd5ad5c577b0cd97f6820808d53458a2b553eaa16c0ec937746c28c23 = $this->env->getExtension("native_profiler");
        $__internal_356ad8ebd5ad5c577b0cd97f6820808d53458a2b553eaa16c0ec937746c28c23->enter($__internal_356ad8ebd5ad5c577b0cd97f6820808d53458a2b553eaa16c0ec937746c28c23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    <h2 class=\"page-header\">";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "subject", array()), "html", null, true);
        echo "</h2>
    <a class=\"btn btn-default\" href=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("forum");
        echo "\">Back to Forum</a>
    <a href=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topicreply", array("id" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "id", array()))), "html", null, true);
        echo "\"
       class=\"btn btn-success\">Reply</a>

    <div class=\"panel panel-default\"  style=\"margin-top: 20px;\">
    <!-- Default panel contents -->
    <div class=\"panel-heading\">Replies</div>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th>Author</th>
            <th>Message</th>
            <th>Date</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "replies", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["reply"]) {
            // line 23
            echo "            <tr>
                <th scope=\"row\">
                    ";
            // line 25
            if ( !(null === $this->getAttribute($context["reply"], "user", array()))) {
                // line 26
                echo "                        <div class=\"avatarForum\">
                            <span>";
                // line 27
                echo twig_escape_filter($this->env, twig_capitalize_string_filter($this->env, $this->getAttribute($this->getAttribute($context["reply"], "user", array()), "username", array())), "html", null, true);
                echo "</span>
                            <img alt=\"Brand\" src=\"";
                // line 28
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl(("img/users/" . $this->getAttribute($this->getAttribute($this->getAttribute($context["reply"], "user", array()), "salarie", array()), "img", array()))), "html", null, true);
                // line 29
                echo "\">
                        </div>

                    ";
            } else {
                // line 33
                echo "                        <div class=\"avatarForum\">
                            <span>Anonymous</span>
                            <img alt=\"Brand\" src=\"";
                // line 35
                echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("img/users/default.png"), "html", null, true);
                // line 36
                echo "\">
                        </div>
                    ";
            }
            // line 39
            echo "                </th>
                <td>";
            // line 40
            echo twig_escape_filter($this->env, $this->getAttribute($context["reply"], "content", array()), "html", null, true);
            echo "</td>
                <td>";
            // line 41
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["reply"], "date", array()), "d-m-Y H:i:s"), "html", null, true);
            echo "</td>
                <td><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("replyedit", array("id" => $this->getAttribute($context["reply"], "id", array()))), "html", null, true);
            echo "\"
                       class=\"btn
                btn-default\">Edit</a>
                    <a href=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("replyremove", array("id" => $this->getAttribute($context["reply"], "id", array()))), "html", null, true);
            // line 46
            echo "\" class=\"btn
                btn-danger\">Remove</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reply'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        echo "        </tbody>
    </table>
    </div>
    <a href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("topicreply", array("id" => $this->getAttribute((isset($context["topic"]) ? $context["topic"] : $this->getContext($context, "topic")), "id", array()))), "html", null, true);
        echo "\"
       class=\"btn btn-success\">Reply to the topic</a>
";
        
        $__internal_356ad8ebd5ad5c577b0cd97f6820808d53458a2b553eaa16c0ec937746c28c23->leave($__internal_356ad8ebd5ad5c577b0cd97f6820808d53458a2b553eaa16c0ec937746c28c23_prof);

    }

    public function getTemplateName()
    {
        return "ForumBundle:Topic:topic.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 54,  133 => 51,  123 => 46,  121 => 45,  115 => 42,  111 => 41,  107 => 40,  104 => 39,  99 => 36,  97 => 35,  93 => 33,  87 => 29,  85 => 28,  81 => 27,  78 => 26,  76 => 25,  72 => 23,  68 => 22,  49 => 6,  45 => 5,  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends 'base.html.twig' %}*/
/* */
/* {% block body %}*/
/*     <h2 class="page-header">{{ topic.subject }}</h2>*/
/*     <a class="btn btn-default" href="{{ path('forum') }}">Back to Forum</a>*/
/*     <a href="{{ path('topicreply', {'id': topic.id}) }}"*/
/*        class="btn btn-success">Reply</a>*/
/* */
/*     <div class="panel panel-default"  style="margin-top: 20px;">*/
/*     <!-- Default panel contents -->*/
/*     <div class="panel-heading">Replies</div>*/
/*     <table class="table table-striped">*/
/*         <thead>*/
/*         <tr>*/
/*             <th>Author</th>*/
/*             <th>Message</th>*/
/*             <th>Date</th>*/
/*             <th>Action</th>*/
/*         </tr>*/
/*         </thead>*/
/*         <tbody>*/
/*         {% for reply in topic.replies %}*/
/*             <tr>*/
/*                 <th scope="row">*/
/*                     {% if reply.user is not null %}*/
/*                         <div class="avatarForum">*/
/*                             <span>{{ reply.user.username|capitalize }}</span>*/
/*                             <img alt="Brand" src="{{ asset('img/users/' ~ reply.user.salarie.img )*/
/*                             }}">*/
/*                         </div>*/
/* */
/*                     {% else %}*/
/*                         <div class="avatarForum">*/
/*                             <span>Anonymous</span>*/
/*                             <img alt="Brand" src="{{ asset('img/users/default.png')*/
/*                             }}">*/
/*                         </div>*/
/*                     {% endif %}*/
/*                 </th>*/
/*                 <td>{{ reply.content }}</td>*/
/*                 <td>{{ reply.date|date("d-m-Y H:i:s")  }}</td>*/
/*                 <td><a href="{{ path('replyedit', {'id': reply.id}) }}"*/
/*                        class="btn*/
/*                 btn-default">Edit</a>*/
/*                     <a href="{{ path('replyremove', {'id': reply.id})*/
/*                     }}" class="btn*/
/*                 btn-danger">Remove</a>*/
/*                 </td>*/
/*             </tr>*/
/*         {% endfor %}*/
/*         </tbody>*/
/*     </table>*/
/*     </div>*/
/*     <a href="{{ path('topicreply', {'id': topic.id}) }}"*/
/*        class="btn btn-success">Reply to the topic</a>*/
/* {% endblock %}*/
