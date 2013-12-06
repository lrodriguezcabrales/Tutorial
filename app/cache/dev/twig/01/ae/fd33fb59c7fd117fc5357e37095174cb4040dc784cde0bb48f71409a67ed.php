<?php

/* AcmeBlogBundle:Blog:index.html.twig */
class __TwigTemplate_01aefd33fb59c7fd117fc5357e37095174cb4040dc784cde0bb48f71409a67ed extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_title($context, array $blocks = array())
    {
        echo "My cool blog posts";
    }

    // line 6
    public function block_body($context, array $blocks = array())
    {
        // line 7
        echo "\t";
        // line 12
        echo "    
\tJJAJAJA
\t";
        // line 14
        if ($this->getAttribute($this->getContext($context, "app"), "debug")) {
            // line 15
            echo "\t    <p>Request method: ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getContext($context, "app"), "request"), "method"), "html", null, true);
            echo "</p>
\t    <p>Application Environment: ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "app"), "environment"), "html", null, true);
            echo "</p>
\t";
        }
        // line 18
        echo "\t
";
    }

    public function getTemplateName()
    {
        return "AcmeBlogBundle:Blog:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 18,  51 => 16,  46 => 15,  44 => 14,  40 => 12,  38 => 7,  35 => 6,  29 => 4,);
    }
}
