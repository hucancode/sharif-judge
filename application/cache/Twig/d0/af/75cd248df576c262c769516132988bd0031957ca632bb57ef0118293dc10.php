<?php

/* pages/admin/edit_problem_md.twig */
class __TwigTemplate_d0af75cd248df576c262c769516132988bd0031957ca632bb57ef0118293dc10 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("templates/base.twig");

        $this->blocks = array(
            'icon' => array($this, 'block_icon'),
            'title' => array($this, 'block_title'),
            'head_title' => array($this, 'block_head_title'),
            'other_assets' => array($this, 'block_other_assets'),
            'main_content' => array($this, 'block_main_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "templates/base.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 6
        $context["selected"] = "problems";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 8
    public function block_icon($context, array $blocks = array())
    {
        echo "fa-edit";
    }

    // line 9
    public function block_title($context, array $blocks = array())
    {
        echo "Edit Problem Description (Markdown)";
    }

    // line 10
    public function block_head_title($context, array $blocks = array())
    {
        echo "Edit Problem Description (Markdown)";
    }

    // line 14
    public function block_other_assets($context, array $blocks = array())
    {
        // line 15
        echo "<script type='text/javascript' src=\"";
        echo base_url("assets/js/taboverride.min.js");
        echo "\"></script>
<script>
\$(document).ready(function(){
\ttabOverride.set(document.getElementById('md_editor'));
});
</script>
";
    }

    // line 25
    public function block_main_content($context, array $blocks = array())
    {
        // line 26
        echo "<div class=\"pull-right md_cheatsheet\">
<h2>Markdown Cheatsheet</h2>
From <a href=\"http://daringfireball.net/projects/markdown/dingus\">Daring Fireball</a>
<h3>Headers</h3>

<p>Setext-style:</p>

<pre><code>Header 1
========

Header 2
--------
</code></pre>

<p>atx-style (closing #'s are optional):</p>

<pre><code># Header 1 #

## Header 2 ##

###### Header 6
</code></pre>

<h3>Phrase Emphasis</h3>

<pre><code>*italic*   **bold**
_italic_   __bold__
</code></pre>

<h3>Code Spans</h3>

<pre><code>`&lt;code&gt;` spans are delimited
by backticks.</code></pre>

<h3>Fenced Code Blocks</h3>
<pre>
```
function test() {
\tprintf(\"Hello World!\\n\");
}
```</pre>
<h3>Syntax Highlighting</h3>
<code>c</code>, <code>cpp</code>, <code>python</code> and <code>java</code> supported.
<pre>
```python
def test:
\tprint (\"Python Syntax\")
```</pre>

<h3>Preformatted Code Blocks</h3>

<p>Indent every line of a code block by at least 4 spaces or 1 tab.</p>

<pre><code>This is a normal paragraph.

    This is a preformatted
    code block.
</code></pre>

<h3>Lists</h3>

<p>Ordered, without paragraphs:</p>

<pre><code>1.  Foo
2.  Bar
</code></pre>

<p>Unordered, with paragraphs:</p>

<pre><code>*   A list item.

    With multiple paragraphs.

*   Bar
</code></pre>

<p>You can nest them:</p>

<pre><code>*   Item 1
    * item
*   Item 2
    1.  item 1
    2.  item 2
        * item
    3. item 3
*   Item 3
</code></pre>

<h3>Links</h3>

<p>Inline:</p>

<pre><code>An [example](http://url.com/ \"Title\")
</code></pre>

<p>Reference-style labels (titles are optional):</p>

<pre><code>An [example][id]. Then, anywhere
else in the doc, define the link:

  [id]: http://example.com/  \"Title\"
</code></pre>
<h3>Images</h3>

<p>Inline (titles are optional):</p>

<pre><code>![alt text](/path/img.jpg \"Title\")
</code></pre>

<p>Reference-style:</p>

<pre><code>![alt text][id]

[id]: /url/to/img.jpg \"Title\"
</code></pre>
<h3>Blockquotes</h3>

<pre><code>&gt; Email-style angle brackets
&gt; are used for blockquotes.

&gt; &gt; And, they can be nested.

&gt; #### Headers in blockquotes
&gt;
&gt; * You can quote a list.
&gt; * Etc.
</code></pre>
<h3>Horizontal Rules</h3>

<p>Three or more dashes or asterisks:</p>

<pre><code>---

* * *

- - - -
</code></pre>

<h3>Manual Line Breaks</h3>

<p>End a line with two or more spaces:</p>

<pre><code>Roses are red,
Violets are blue.
</code></pre>
</div>

<div id=\"md_div\">
\t<p>
\t\tAssignment ";
        // line 175
        if (isset($context["description_assignment"])) { $_description_assignment_ = $context["description_assignment"]; } else { $_description_assignment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_description_assignment_, "id"), "html", null, true);
        echo " (<span dir=\"auto\">";
        if (isset($context["description_assignment"])) { $_description_assignment_ = $context["description_assignment"]; } else { $_description_assignment_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_description_assignment_, "name"), "html", null, true);
        echo "</span>)<br>
\t\tProblem ";
        // line 176
        if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "id"), "html", null, true);
        echo "
\t</p>
\t";
        // line 178
        if (isset($context["description_assignment"])) { $_description_assignment_ = $context["description_assignment"]; } else { $_description_assignment_ = null; }
        if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
        echo form_open(((("problems/edit/md/" . $this->getAttribute($_description_assignment_, "id")) . "/") . $this->getAttribute($_problem_, "id")));
        echo "
\t<p class=\"input_p\">
\t\t<textarea name=\"text\" rows=\"30\" cols=\"75\" class=\"sharif_input\" id=\"md_editor\">";
        // line 180
        if (isset($context["problem"])) { $_problem_ = $context["problem"]; } else { $_problem_ = null; }
        echo twig_escape_filter($this->env, $this->getAttribute($_problem_, "description"), "html", null, true);
        echo "</textarea>
\t</p>
\t<p class=\"input_p\">
\t\t<input type=\"submit\" value=\"Save\" class=\"sharif_input\"/>
\t</p>
\t</form>
</div>

";
    }

    public function getTemplateName()
    {
        return "pages/admin/edit_problem_md.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 180,  235 => 178,  229 => 176,  221 => 175,  70 => 26,  67 => 25,  55 => 15,  52 => 14,  46 => 10,  40 => 9,  34 => 8,  29 => 6,);
    }
}
